<?php

namespace App\Http\Controllers\Merchant_related;

use App\Http\Controllers\Controller;
use App\Models\Cupon;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CuponController extends Controller
{
    //
    public function createPage(){
        $shops = Shop::get();
        return view('merchant.cupon.create',compact('shops'));
    }

    //create
    public function create(Request $request){
        $this->dataValidation($request,'create');
        $data = $this->getData($request);
        Cupon::create($data);
        return redirect()->route('merchant#cupon#list')->with(['message','Cupon Created']);
    }

    //list
    public function list(){
        $cupons = Cupon::orderBy('id','desc')->paginate(10);
        $shops = Shop::get();
        return view('merchant.cupon.list',compact('cupons','shops'));
    }


    //details
    public function details($id){
        $shops = Shop::get();
        $cupon = Cupon::where('id',$id)->first();
        return view('merchant.cupon.details',compact('cupon','shops'));
    }

    //editPage
    public  function editPage($id){
       $cupon = Cupon::where('id',$id)->first();
        $shops = Shop::get();
        return view('merchant.cupon.edit',compact('cupon','shops'));
    }

    //edit
    public function edit(Request $request){
        $this->dataValidation($request,'edit');
        $data  = $this->getData($request);
        Cupon::where('id',$request->cuponId)->update($data);
        return redirect()->route('merchant#cupon#list')->with(['message','Cupon Updated']);
    }

    //delete
    public function delete($id){
        Cupon::where('id',$id)->delete();
        return redirect()->route('merchant#cupon#list')->with(['message','Cupon deleted']);
    }
    //get data
    private function getData($request){
        return [
        'name' => $request->name,
        'cupon_code' => $request->cupon_code,
        'type' => $request->type,
        'shop_id' => $request->shop_id,
        'description' => $request->description,
        'start_date' => $request->startDate,
        'end_date' => $request->endDate,
        'amount' => $request->amount,
        ];
    }
    //data validation
    private function dataValidation($request,$action){
        Validator::make($request->all(),[
            'name' => 'required',
            'type' => 'required',
            'shop_id' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'amount' => 'required',
            'cupon_code' => $action == 'create' ?  'required|unique:cupons,cupon_code' : 'required|unique:cupons,cupon_code,'.$request->cuponId,

        ])->validate();
    }
}
