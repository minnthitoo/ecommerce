<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function shop(){
        return view("admin.shop.shop");
    }

    //shop create page
    public function shopCreatePage(){
        $users = User::where([['is_shop_owner', '0'],["role","=","user"]])->orderby('id','desc')->get();
        $industrys = Industry::orderby("title","asc")->get();
        return view("admin.shop.shop_create",compact("users","industrys"));
    }

    //shop create
    public function shopCreate(Request $request)
    {
        $this->dataValidation($request);
        $data = $this->getData($request);
        $fileName = uniqid().$request->file('shopPhoto')->getClientOriginalName();
        $request->file('shopPhoto')->storeAs('public/shops', $fileName);
        $data['photo'] = $fileName;
        Shop::create($data);
        DB::table('users')
                ->where('id', $request->name)
                ->update(['role' => "merchant","is_shop_owner"=>"1"]);

        return redirect()->route('admin#shop');
        // dd($data);
    }

    //shop edit page
    public function editPage()
    {
        $shop = Shop::first();
        return view('admin.shop.edit', compact('shop'));
    }

    //shop edit
    // public function edit(Request $request)
    // {
    //     dd($request->all());
    // }


    //data validation
    private function dataValidation($request){
        Validator::make($request->all(),[
            'name' => 'required|unique:shops,user_id',
            'shopName' => 'required|unique:shops,name',
            'shopPhone' => 'required|unique:shops,phone',
            'shopEmail' => 'required|unique:shops,email',
            'shopIndustryType' => 'required',
            // 'shopRegionId' => 'required',
            'shopAddress' => 'required',
            // 'shopLatitude' => 'required',
            // 'shopLongitude' => 'required',
            // 'shopPhoto' => 'required',
            // 'shopRole' => 'required',
            'shopStatus' => 'required',
        ])->validate();
    }

    //get Data
    private function getData($request){
        return [
            'user_id' => $request->name,
            'name' => $request->shopName,
            'phone' => $request->shopPhone,
            'email' => $request->shopEmail,
            'industry_type' => $request->shopIndustryType,
            'region_id' => "0",
            'address' => $request->shopAddress,
            'status' => $request->shopStatus,
            'latitude' => $request->shopLatitude,
            'longitude' => $request->shopLongitude
        ];
    }



    //shopsetting from merchant

    public function index()
    {
        $shop = shop::where('user_id',Auth::user()->id)->first();
        return view('merchant.shop.index',compact('shop'));
    }

    public function edit(Request $request)
    {
        // $this->updateDataValidation($request);
        $data = $this->getUpdateData($request);
        if(isset($request->photo)){
            $fileName = uniqid().$request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('public/shops', $fileName);
            $data['photo'] = $fileName;
        }
        shop::where('user_id',$request->shopId)->update($data);
        return back();
    }

    private function getUpdateData($request)
    {
        return[
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'messager_link' => $request->messager,
            'facebook_link' => $request->facebook,
            'telegram_link' => $request->telegram,
            'viber_link' => $request->viber,
            'hotlline' => $request->hotline,
            'hour' => $request->hour,
        ];
    }

    // public function updateDataValidation($request)
    // {
    //     Validator::make($request->all(),[
    //         'latitude' => 'required',
    //         'longitude' => 'required',
    //         'messager' => 'required',
    //         'facebook' => 'required',
    //         'telegram' => 'required',
    //         'viber' => 'required',
    //         'hotline' => 'required',
    //         'hour' => 'required',
    //     ])->validate();
    // }

}
