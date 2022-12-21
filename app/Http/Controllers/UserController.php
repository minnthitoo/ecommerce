<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //dashboard

    // public function home(){
    //     return view('user.index');
    // }
    //userCreate
    public function create(Request $request){
        $validation = $this->dataValidation($request);
        if($validation->fails()){
            return back()->withErrors($validation)->withInput();
        }

        $data = $this->getData($request);
        User::create($data);
        return redirect()->route('admin#user#table')->with(['message' => 'Account Create Success']);;
    }

    //view user table
    public function userTable(){
        $cities = city::get();
        $regions = region::get();
        $users = User::orderBy('id','desc')->paginate(300);
        return view('admin.user.user',compact('users','cities','regions'));
    }

    //user details
    public function details($id){
        // $users = User::get();
        $regions = Region::get();
        $cities = City::get();
        $user = User::where('id',$id)->first();
        return view('admin.user.details',compact('user','regions','cities'));
    }


    //update
    public function update(Request $request){
        $validation = $this->udpateDataValidation($request);
        if($validation->fails()){
            return back()->withErrors($validation)->withInput();
        }
        $data = $this->getUpdateData($request);
        User::where('id',$request->userId)->update($data);
        return redirect()->route('admin#user#table')->with(['message'=>'Updated Success']);
    }

    //delete
    public function delete($id){
        User::where('id',$id)->delete();
        return back()->with(['message'=>'Deleted Success']);
    }

    //getData
    private function getData($request){
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'city' => $request->city,
            'zip' => $request->zip,
            'region' => $request->region,
            // 'refer_code' => $request->refercode
        ];
    }


    //get update data
    private function getUpdateData($request){
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => $request->role,
            'status' => $request->status,
            'city' => $request->city,
            'zip' => $request->zip,
            'region' => $request->region,
        ];
    }

    //dataValidataion
    private function dataValidation($request){
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'role' => 'required',
            "status" => "required",
            'password' => 'required|min:8|max:20',
        ];
        return Validator::make($request->all(),$rules);
    }

    // update data validation
    private function udpateDataValidation($request){
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|unique:users,email,'.$request->userId,
            'phone' => 'required|unique:users,phone,'.$request->userId,
        ];
        return Validator::make($request->all(),$rules);
    }

    public function home(){
        return view("user.index");
    }
    
    //userTableAdmin
    public function userTableAdmin(){
        $cities = city::get();
        $regions = region::get();
        $users = User::where('role','admin')->orderBy('id','desc')->paginate(300);
        return view('admin.user.user_admin',compact('users','cities','regions'));
    }

    //userTableShop
    public function userTableShop(){
        $cities = city::get();
        $regions = region::get();
        $users = User::where('role','merchant')->orderBy('id','desc')->paginate(300);
        return view('admin.user.user_shop',compact('users','cities','regions'));
    }

    //userTableUser
    public function userTableUser(){
        $cities = city::get();
        $regions = region::get();
        $users = User::where('role','user')->orderBy('id','desc')->paginate(300);
        return view('admin.user.user_user',compact('users','cities','regions'));
    }


}
