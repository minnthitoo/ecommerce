<?php

namespace App\Http\Controllers\Merchant_related;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Industry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //direct index
    public function index(){
        $categories = Category::orderBy('id','desc')->paginate(5);
        $industries = Industry::get();
        return view('admin.merchant_related.category.index',compact('categories','industries'));
    }

    //create
    public function create(Request $request){

        $validation = $this->dataValidation($request);
        if($validation->fails()){
            return back()->withErrors($validation)->withInput();
        }

        if(isset($request->categoryImage)){
           $file = $request->categoryImage;
           $fileName = uniqid().'_'.$file->getClientOriginalName();
            $file->move(public_path().'/categoryImage',$fileName);
           $data = $this->getData($request,$fileName);
        }else{
            $data = $this->getData($request,NULL);
        }
        Category::create($data);
        return back()->with(['message'=>'Created Success']);

    }

    //update
    public function update(Request $request){
        $data = $this->getUpdateData($request);
        if(file_exists($request->categoryImage)){
            $file = $request->categoryImage;
            $fileName = uniqid().'_'.$file->getClientOriginalName();
            $data['image'] = $fileName;

            $oldData = Category::where('id',$request->categoryId)->first();
            $oldImageName = $oldData->image;
            if(File::exists(public_path().'/categoryImage/'.$oldImageName)){
                File::delete(public_path().'/categoryImage/'.$oldImageName);
            }

            $file->move(public_path().'/categoryImage',$fileName);

        }

        Category::where('id',$request->categoryId)->update($data);
        return back()->with(['message'=>'Updated Success']);

    }

    //delete
    public function delete($id){
        $data = Category::where('id',$id)->first();
        $dbImage = $data->image;

        if(File::exists(public_path().'/categoryImage/'.$dbImage)){
            File::delete(public_path().'/categoryImage/'.$dbImage);
        }

        Category::where('id',$id)->delete();
        return back()->with(['message'=>'Deleted Success']);
    }

    //get data
    private function getData($request,$fileName) {
        return [
            'title' => $request->categoryName,
            'description' => $request->description,
            'industry_id' => $request->industryName,
            'image' => $fileName,
            'created_at' => Carbon::now()
        ];
    }

    //get update data
    private function getUpdateData(Request $request){
        return [
            'title' => $request->categoryName,
            'description' => $request->description,
            'industry_id' => $request->industryName,
            'updated_at' => Carbon::now()
        ];
    }

    //validation
    private function dataValidation($request){
        return Validator::make($request->all(),[
            'categoryName' => 'required',
            'description' => 'required',
            'industryName' => 'required',
        ]);
    }
}
