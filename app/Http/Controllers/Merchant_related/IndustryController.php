<?php

namespace App\Http\Controllers\Merchant_related;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\logManagment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class IndustryController extends Controller
{
    //direct index
    public function index(){
        $industries = Industry::orderBy('id','desc')->paginate(5);
        return view('admin.merchant_related.industry.index',compact('industries'));
    }

    //create
    public function create(Request $request){

        $validation = $this->validationCheck($request);
        if($validation->fails()){
            return back()->withErrors($validation)->withInput();
        }

        if(file_exists($request->industryImage)){
            $file = $request->industryImage;
            $fileName = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path().'/industryImage',$fileName);
            $data = $this->getData($request,$fileName);
        }else{
            $data = $this->getData($request,NULL);
        }

        $log_add = $this->addLogData();
        logManagment::create($log_add);

        Industry::create($data);
        return back()->with(['message'=>'Created Success']);
    }

    //update
    public function update(Request $request){

         $data = ['title' => $request->industryName];

        if(file_exists($request->industryImage)){
            $file = $request->industryImage;
            $fileName = uniqid().'_'.$file->getClientOriginalName();
            $data['image'] = $fileName;

            $oldData = Industry::where('id',$request->industryId)->first();
            $oldFileName = $oldData->image;

            if(File::exists(public_path().'/industryImage/'.$oldFileName)){
                File::delete(public_path().'/industryImage/'.$oldFileName);
            }

            $file->move(public_path().'/industryImage/',$fileName);

            $updateLogData = $this->updateLogData();
            logManagment::create($updateLogData);

            Industry::where('id',$request->industryId)->update($data);
            return back()->with(['message' => 'Updated Succcess']);

        }else{

            $updateLogData = $this->updateLogData();
            logManagment::create($updateLogData);

            Industry::where('id',$request->industryId)->update($data);
            return back()->with(['message' => 'Updated Succcess']);
        }

    }


    //delete
    public function delete($id){

        $data = Industry::where('id',$id)->first();
        $imageName = $data->image;
        Industry::where('id',$id)->delete();
        if(File::exists(public_path().'/industryImage/'.$imageName)){
            File::delete(public_path().'/industryImage/'.$imageName);
        }

        $deleteLogData = $this->deleteLogData();
        logManagment::create($deleteLogData);

        return back()->with(['message' => 'Deleted Success']);

    }


    //get data
    private function getData($request,$fileName){
        return [
            'id' => $request->industryId,
            'title' => $request->industryName,
            'image' => $fileName
        ];
    }

    //get addLogData
    private function addLogData(){
        return[
            "user_id" => Auth::user()->id,
            "action" => "Create Industry",
        ];
    }

    //get updateLogData
    private function updateLogData(){
        return[
            "user_id" => Auth::user()->id,
            "action" => "Upadte Industry",
        ];
    }

    //get deleteLogData
    private function deleteLogData(){
        return[
            "user_id" => Auth::user()->id,
            "action" => "Delete Industry",
        ];
    }




    //validation
    private function validationCheck($request){
        $rules = [
            'industryName' => 'required',
        ];

        return Validator::make($request->all(),$rules);
    }
}

