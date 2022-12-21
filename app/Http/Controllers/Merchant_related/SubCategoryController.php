<?php

namespace App\Http\Controllers\Merchant_related;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Industry;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    //direct index
    public function index(){
        $industries = Industry::get();
        $categories = Category::get();
        $subcategories = SubCategory::orderBy('id','desc')->paginate(5);
        return view('admin.merchant_related.sub_category.index',compact('subcategories','categories','industries'));
    }

    //create
    public function create(Request $request){
        $validation = $this->dataValidation($request);
        if($validation->fails()){
            return back()->withErrors($validation)->withInput();
        }

        $data = $this->getData($request);
        SubCategory::create($data);
        return back()->with(['message'=>'SubCategory Created']);
    }

    //update
    public function update(Request $request){
        $data = $this->getData($request);
        SubCategory::where('id',$request->subcategoryId)->update($data);
        return back()->with(['message'=>'Updated Success']);
    }

    //delete
    public function delete($id){
        SubCategory::where('subcategory_id',$id)->delete();
        return back()->with(['message'=>'Deleted Success']);
    }

    //getdata
    private function getData($request){
       return [
        'title' => $request->subCategoryName,
        'category_id' => $request->category,
        'industry_id' => $request->industry,
        ];
    }

    //validation
    private function dataValidation($request){
        return Validator::make($request->all(),[
            'subCategoryName' => 'required',
            'category' => 'required',
            'industry' => 'required',
        ]);
    }
}
