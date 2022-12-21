<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\logManagment;
use App\Models\region;
use App\Models\User;
use App\Models\Shop;
use App\Models\bannerAds;
use App\Models\Industry;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;
class AdminController extends Controller
{
    //dashboard
    public function dashboard()
    {

        /* Start For Chart */
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("month_name"))
        ->orderBy('id','ASC')
        ->pluck('count', 'month_name');

        $user_labels = $users->keys();
        $user_data = $users->values();
        /* End For Chart */
        
        /* start count */
        $users = User::all();
        $shops = Shop::all();
        $banners = bannerAds::all();
        $industries = Industry::all();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $products = Product::all();
         /* end count */

        /* start 10  */
        $users_10 = User::OrderBy("id","desc")->take(10)->get();
        /* end 100 */
        return view('admin.dashboard',compact("users","shops","banners","industries","categories","subcategories","products",'user_labels', 'user_data',"users_10"));
    }

    //admin user
    public function user()
    {
        return view('admin.user.user');
    }

    //admin user create
    public function userCreateForm()
    {
        $regions = region::orderby("id","desc")->get();
        $citys = city::orderby("id","desc")->get();
        return view('admin.user.user_create',compact("regions","citys"));
    }


    public function fetchCity(Request $request)
    {
        $data['cities'] = city::where("region_id", $request->region_id)->get(["name", "id"]);

        return response()->json($data);
    }

    //view all route
    public function viwe_all_route(){
        $routes = Route::getRoutes();
        return view("admin.route",compact("routes"));
    }


    //view all logs
    public function viwe_all_logs(){
        $logs = logManagment::orderby("id","desc")->paginate(100);
        return view("admin.log",compact("logs"));
    }

}
