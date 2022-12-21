<?php

namespace App\Http\Controllers;

use App\Models\becomeMerchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\bannerAds;
use App\Models\cart;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Product;
use App\Models\Shop;
use App\Models\siteInfo;
use App\Models\shopbannerimages;
use App\Models\toptext;
use Illuminate\Support\Facades\Auth;


class MerchantController extends Controller
{
    // dashboard
    // public function dasboared()
    // {
    //     return view('merchant_owner.index');
    // }

    public function dashboard(){
        return view('merchant.index');
    }

    //create
    public function create(Request $request)
    {
       $this->dataValidation($request);
       $data = $this->getData($request);
       becomeMerchant::create($data);
       $industries = Industry::orderby("title")->get();
       $categories  = Category::orderby("title")->get();
       $shop_20 = Shop::orderby("name")->take(20)->get();
       $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
       $industry = Industry::orderby("title")->get();
       $products = Product::orderby("id","desc")->paginate(15);
       $siteinfo = siteInfo::first();
       $toptext = toptext::first();
       if(Auth::check()){
           $cart = cart::where('user_id',Auth::user()->id)->get();
       }else{
           $cart = cart::where('id',0)->get();
       }
       return view('website.merchant_form',compact("cart","industries","categories","shop_20","recommaneded_product","products",'siteinfo','toptext'))->with(['sucess_message','Merchant Register Sent Successfully']);

    }
    // getdata
    public function getData(Request $request)
    {
        return [
            'shop_name' => $request->shopname,
            'contact_person' => $request->contactperson,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'industry_type' => $request->type,
        ];
    }

    // validation
    private function dataValidation($request)
    {
        Validator::make($request->all(),[
            'shopname' => 'required|unique:shops,name',
            'contactperson' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'type' => 'required',

        ])->validate();
    }
}
