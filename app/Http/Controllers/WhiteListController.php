<?php

namespace App\Http\Controllers;

use App\Models\white_list;
use Illuminate\Http\Request;

class WhiteListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whiteLists = white_list::select('white_lists.*','white_lists.id as whitelist_id','products.name as product_name','products.feature_image as product_image','products.description as product_description','products.size as product_size','products.price as price','products.color as product_color')
                                ->leftJoin('products','products.id','white_lists.product_id')
                                ->get();
                                // dd($whiteLists->toArray());
        return view('website.whitelist',compact('whiteLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $old = white_list::where('product_id',$request->productId)->first();
        if(isset($old)){
            white_list::where('product_id',$request->productId)->delete();
            return response()->json([
                'status' => 'delete success'
        ], 200);
        }else{
            $data = [
                'user_id' => $request->userId,
                'product_id' => $request->productId,
            ];
            white_list::create($data);
            return response()->json([
                'status' => 'add success'
        ], 200);
        };

    }
    //delete
    public function delete($id)
    {

        white_list::where('id',$id)->delete();
        return back();
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

    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\white_list  $white_list
     * @return \Illuminate\Http\Response
     */
    public function edit(white_list $white_list)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\white_list  $white_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, white_list $white_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\white_list  $white_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(white_list $white_list)
    {
        //
    }
}
