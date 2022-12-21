<?php

namespace App\Http\Controllers;

use App\Models\siteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteInfo = siteInfo::first();
        return view('admin.configuration.siteInfo',compact('siteInfo'));
    }


    public function update(Request $request)
    {
        $data = $this->getData($request);

        if($request->logo || $request->tabLogo){
           if($request->logo){
            $file =  $request->logo;
            $fileName = uniqid().'_'.$file->getClientOriginalName();
            $file->move(public_path('/siteInfoLogo/'),$fileName);
            $data['logo'] = $fileName;
           }
           if($request->tabLogo){
            $file =  $request->tabLogo;
            $fileName = uniqid().'_'.$file->getClientOriginalName();
            $file->move(public_path('/siteInfoTabLogo/'),$fileName);
            $data['tab_logo'] = $fileName;
           }
        }
        siteInfo::where('id',1)->update($data);
        return back()->with(['message'=>'Updated Successfully']);
    }


    // get update data
    private function getData(Request $request)
    {
        return [
          'site_name' => $request->name,
          'site_email' => $request->email,
          'site_facebook' => $request->facebook,
          'site_ig' => $request->instagram,
          'site_youtube' => $request->youtube,
          'site_tiktop' => $request->tiktok,
          'opening_closeing' => $request->opening_closing

        ];
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siteInfo  $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function show(siteInfo $siteInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siteInfo  $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(siteInfo $siteInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siteInfo  $siteInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(siteInfo $siteInfo)
    {
        //
    }
}
