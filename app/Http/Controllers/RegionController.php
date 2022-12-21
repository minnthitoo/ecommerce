<?php

namespace App\Http\Controllers;

use App\Models\region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = region::orderby("name")->get();
        return view("admin.configuration.state",compact("regions"));
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
        region::create($data);
        return redirect()->back()->with(['message' => 'Create Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, region $region)
    {
        $this->DateValidate($request);
        $data = $this->getData($request);
        region::where('id', $request->id)->update($data);
        return redirect()->back()->with(['message' => 'Updated Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        region::where('id', $request->id)->delete();
        return back()->with(['message' => 'Deleted Success']);
    }

    //validation
    private function DateValidate($request){
        Validator::make( $request->all() ,[
            'region' =>'required|unique:regions,name,'.$request->id, 
        ])->validate();
    }


    //get Data
    private function getData($request)
    {
        return [
            'name' => $request->region,
        ];
    }
}
