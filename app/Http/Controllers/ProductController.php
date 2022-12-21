<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\SubCategory;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderby("title", "asc")->get();
        $subcategory  = SubCategory::get();
        return view("merchant.product_create", compact("category", "subcategory"));
    }

    //product create
    public function add(Request $request)
    {
        $this->dataValidation($request);
        $data = $this->getData($request);
        if(isset($request->feature_image)){
            $file = $request->feature_image;
            $fileName = uniqid().'_'.$file->getClientOriginalName();
            $file->storeAs('/public/products', $fileName);
            $data['feature_image'] = $fileName;
        }

        if ($files = $request->file('images')) {
            foreach ($files as $image) {
                $imageName = uniqid() . $image->getClientOriginalName();
                $image->storeAs('public/products', $imageName);
                $images[] = $imageName;
            }
        }
        // $data['shop_id'] = Auth::user()->id;
        $data['images'] = implode('|', $images);

        Product::create($data);
        return redirect()->route('merchant#product#list')->with(['message' => 'Product Created Success']);
    }

    //product list
    public function list(Request $request)
    {
        $products = Product::where("shop_id",Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $shops = Shop::get();

        return view('merchant.product_list', compact('products', 'categories', 'subcategories', 'shops'));
    }

    //product editpage
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $shops = Shop::get();
        return view('merchant.product_edit', compact('product', 'categories', 'subcategories', 'shops'));
    }

    //product update
    public function update(Request $request)
    {
        $this->dataValidation($request);
        $data = $this->getData($request);
        if(isset($request->feature_image)){
            $file = $request->feature_image;
            $fileName = uniqid().'_'.$file->getClientOriginalName();
            $file->storeAs('/public/products', $fileName);
            $data['feature_image'] = $fileName;
        }
        if ($files = $request->file('images')) {
            foreach ($files as $image) {
                $imageName = uniqid() . $image->getClientOriginalName();
                $image->storeAs('public/products', $imageName);
                $images[] = $imageName;
            }
            $data['images'] = implode('|', $images);
        }
         $data['shop_id'] = Auth::user()->id;
        Product::where('id', $request->productId)->update($data);
        return redirect()->route('merchant#product#list')->with(['message' => 'Product Update Success']);
    }

    //product delete
    public function delete($id)
    {

        $product = Product::where('id', $id)->first();
        if(isset($product->images)){
            $images[] = explode('|', $product->images);
            for($i = 0; $i < count($images[0]); $i++){
                $img = $images[0][$i];
                Storage::delete('public/products/' . $img);
            }
        }
        if (isset($product->feature_image)) {
            Storage::delete('public/products/' . $product->feature_image);
        }
        Product::where('id', $product->id)->delete();
        return back()->with(['message' => 'Product Deleted']);
    }

    public function fetchCategroy(Request $request)
    {
        $data['subcategory'] = SubCategory::where("category_id", $request->region_id)->get(["title", "id"]);

        return response()->json($data);
    }

    // public function fetchSubCategroy(Request $request)
    // {
    //     $data['subcategory'] = City::where("state_id", $request->state_id)
    //                                 ->get(["title", "id"]);

    //     return response()->json($data);
    // }

    //getData
    private function getData($request)
    {
        $data = [
            'name' => $request->pname,
            'product_code' => $request->pcode,
            'category_id' => $request->cat,
            'subcategory_id' => $request->subcategory,
            'description' => $request->desc,
            'original_price' => $request->o_price,
            'price' => $request->price,
            'size' => $request->size,
            'qty' => $request->qty,
            'color'=>$request->color,
            "shop_id"=> Auth()->id(),
        ];
        return $data;
    }

    //data validation
    private function dataValidation($request)
    {
        $rules = [
            'pname' => 'required',
            'pcode' => 'required',
            'cat' => 'required',
            "subcategory" => "required",
            "color" => "required",
            // 'subcategory' => 'required',
            'desc' => 'required',
            'o_price' => 'required',
            'images' => 'required',
            'qty' => 'required',
        ];
        Validator::make($request->all(), $rules)->validate();
    }

        //data validation
        private function updatedataValidation($request)
        {
            $rules = [
                'pname' => 'required',
                'pcode' => 'required',
                'cat' => 'required',
                // 'subcategory' => 'required',
                'desc' => 'required',
                'o_price' => 'required',
                // 'images' => 'required',
                'qty' => 'required',
            ];
            Validator::make($request->all(), $rules)->validate();
        }



}
