<?php

namespace App\Http\Controllers;

use App\Models\shopbannerimages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ShopbannerimagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $banners = shopbannerimages::orderBy('id','desc')->paginate(5);
       return view('merchant.shopbannerimages.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->dataValidation($request);
        $data = $this->getData($request);

        if($request->image){
            $file = $request->image;
            $fileName = uniqid().'_'.$file->getClientOriginalName();
            $file->move(public_path('/shopbannerimages/'),$fileName);
            $data['image'] = $fileName;
        }
        shopbannerimages::create($data);
        return redirect()->back()->with(['message' => 'Create Success']);
    }

    public function update(Request $request, shopbannerimages $shopbannerimages)
    {
        $data = $this->getData($request);
        if(isset($request->image)){
            $file = $request->image;
            $fileName = uniqid().'-'.$file->getClientOriginalName();
            $file->move(public_path('/shopbannerimages/'),$fileName);
            $data['image'] = $fileName;

            $oldData = shopbannerimages::where('id',$request->id)->first();
            $oldImage = $oldData->image;
            if(File::exists(public_path('/shopbannerimages/').$oldImage)){
                File::delete(public_path('/shopbannerimages/').$oldImage);
            }
        }
        shopbannerimages::where('id',$request->id)->update($data);
        return back()->with(['message'=>'Updated Successfully']);
    }

    //delete
    public function delete(Request $request)
    {
        $oldData = shopbannerimages::where('id',$request->id)->first();
        $oldImage = $oldData->image;

        if(File::exists(public_path('/shopbannerimages/').$oldImage)){
            File::delete(public_path('/shopbannerimages/').$oldImage);
        }
        shopbannerimages::where('id',$request->id)->delete();
        return redirect()->back()->with(['message' => 'Deteled Successfully']);
    }

    //get data
    private function getData($request)
    {
        return [
            'text' => $request->text,
            'link' => $request->link,
            'sort' => $request->sort,
            'shop_id' => $request->shopId,
        ];
    }

    //data validation
    private function dataValidation($request)
    {
        Validator::make($request->all(),[
            // 'text' => 'required',
            // 'link' => 'required',
            'sort' => 'required',
            'image' => 'required'
        ])->validate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shopbannerimages  $shopbannerimages
     * @return \Illuminate\Http\Response
     */
    public function show(shopbannerimages $shopbannerimages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shopbannerimages  $shopbannerimages
     * @return \Illuminate\Http\Response
     */
    public function edit(shopbannerimages $shopbannerimages)
    {
        //
    }
}
