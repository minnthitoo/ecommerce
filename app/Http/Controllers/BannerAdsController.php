<?php

namespace App\Http\Controllers;

use App\Models\bannerAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class BannerAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.configuration.bannerImage");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->dataValidation($request);
        $data = $this->getData($request);
        $fileName = uniqid().$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/banner', $fileName);
        $data['image'] = $fileName;
        bannerAds::create($data);

        return redirect()->back()->with(['message' => 'Banner ADS Create Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bannerAds  $bannerAds
     * @return \Illuminate\Http\Response
     */
    public function show(bannerAds $bannerAds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bannerAds  $bannerAds
     * @return \Illuminate\Http\Response
     */
    public function edit(bannerAds $bannerAds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bannerAds  $bannerAds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bannerAds $bannerAds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bannerAds  $bannerAds
     * @return \Illuminate\Http\Response
     */
    public function destroy(bannerAds $bannerAds)
    {
        //
    }

    
    //data validation
    private function dataValidation($request){
        Validator::make($request->all(),[
            'image' => 'required | mimes:jpeg,png,jpg,gif',
        ])->validate();
    }

    //get Data
    private function getData($request){
        return [
            'image' => $request->image,
            "text" => $request->title,
            "link" => $request->link,
            "sort" => $request->sort,
        ];
    }

}
