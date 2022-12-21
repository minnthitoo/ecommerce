<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citys = city::orderby("id")->get();
        $regions = region::orderby("name")->get();
        return view("admin.configuration.city",compact("regions","citys"));
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
        $this->DateValidate($request);
        $data = $this->getData($request);
        city::create($data);
        return redirect()->back()->with(['message' => 'City Create Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(city $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, city $city)
    {
        $this->DateUpgradeValidate($request);
        $data = $this->getUpgradeData($request);
        city::where('id', $request->id)->update($data);
        return redirect()->back()->with(['message' => 'Updated Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function delete(city $city,Request $request)
    {
        city::where('id', $request->id)->delete();
        return back()->with(['message' => 'Deleted Success']);
    }

    //validation
    private function DateValidate($request){
        Validator::make( $request->all() ,[
            'region' => 'required',
            'city' =>'required',
        ])->validate();
    }


    //get Data
    private function getData($request)
    {
        return [
            'region_id'=>$request->region,
            'name' => $request->city,
        ];
    }

    //upgradevalidation
    private function DateUpgradeValidate($request){
        Validator::make( $request->all() ,[
            'update_region' => 'required',
            'update_city' =>'required',
        ])->validate();
    }


    //get Data
    private function getUpgradeData($request)
    {
        return [
            'region_id'=>$request->update_region,
            'name' => $request->update_city,
        ];
    }
}

