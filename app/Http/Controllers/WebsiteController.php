<?php

namespace App\Http\Controllers;

use App\Models\bannerAds;
use App\Models\cart;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Product;
use App\Models\Shop;
use App\Models\siteInfo;
use App\Models\shopbannerimages;
use App\Models\toptext;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    //home
    public function index(){
        $industry = Industry::orderby("title")->get();
        $products = Product::get();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
// <<<<<<< HEAD
//         return view('website.index',compact("industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));

// =======
        $bannerAds = bannerAds::orderby("sort","desc")->get();
        return view('website.index',compact("bannerAds","industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));

// >>>>>>> e8af25f32325ab4b2ab12a51fc45b64412620734
    }

    //shop
    public function shop(){
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $products = Product::get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $industry = Industry::orderby("title")->get();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }

        $shops = Shop::orderby("id","desc")->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        return view('website.shop',compact("industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext',"shops"));
    }

    //shop_detail
    public function shop_detail($id,$user_id){
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $industry = Industry::orderby("title")->get();
        if(Auth::check()){
            $cart = cart::where(['user_id' => Auth::user()->id, 'shop_id' => $user_id])
            ->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        $shopbannerimages_count = shopbannerimages::where("shop_id",$user_id)->count();
        $shopbannerimages = shopbannerimages::where("shop_id",$user_id)->orderby("sort","desc")->get();

        $shops = Shop::where("id",$id)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        $products = Product::where("shop_id",$user_id)->get();

        // dd($products);
        return view('website.shop_detail',compact("shopbannerimages_count","shopbannerimages","industries","categories","shop_20","recommaneded_product","industry",'cart',"shops","products",'siteinfo','toptext'));

    }

    //product
    public function product(){
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $industry = Industry::orderby("title")->get();
        $products = Product::orderby("id","desc")->paginate(15);
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        // $cart = cart::where('user_id', Auth::user()->id)->get();
        return view('website.product',compact("cart","industries","categories","shop_20","recommaneded_product","products",'siteinfo','toptext', 'cart'));

    }


    //cart
    public function cart(){
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $industry = Industry::orderby("title")->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        return view('website.cart.index',compact("cart","industries","categories","shop_20","recommaneded_product",'siteinfo','toptext'));
    }

    //check_out
    public function checkout(){
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $industry = Industry::orderby("title")->get();
        // $cart = cart::where('user_id',Auth::user()->id)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        return view('website.checkout',compact("industries","categories","shop_20","recommaneded_product","industry",'cart','siteinfo','toptext'));
    }

    //contact
    public function contact(){
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $industry = Industry::orderby("title")->get();
        //$cart = cart::where('user_id',Auth::user()->id)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        return view('website.contact-us',compact("industries","categories","shop_20","recommaneded_product","industry",'cart','siteinfo','toptext'));
    }

    //industry_detail
    public function industry_detail($id){
        // $industries = Industry::orderby("title")->get();
        // $categories  = Category::orderby("title")->get();
        // $shop_20 = Shop::orderby("name")->take(20)->get();
        // $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        // $industry = Industry::orderby("title")->get();
        // $category = Category::where("industry_id",$id)->get();
        // $cart = cart::where('user_id',Auth::user()->id)->get();
        // $siteinfo = siteInfo::first();
        // $toptext = toptext::first();
        // return view('website.industry_detail',compact("industries","categories","shop_20","recommaneded_product","industry","category",'cart','siteinfo','toptext'));

        $industry = Industry::where("id",$id)->get();
        $products = Product::where("category_id",$id)->get();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        $industry_shops = Shop::where("industry_type",$id)->get();
        return view('website.industry_detail',compact("industry_shops","industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));
    }

    //Faq
    public function faq(){
       // $cart = cart::where('user_id',Auth::user()->id)->get();
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        return view('website.faqs',compact("industries","categories","shop_20","recommaneded_product",'cart','siteinfo','toptext'));
    }

    //product_detail
    public function product_detail($id){
        $industry = Industry::orderby("title")->get();
        $products = Product::where("id",$id)->get();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        $all_products = Product::all();
        return view('website.product-detail',compact("all_products","industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));

    }

    //shopping_cart
    public function shopping_cart(){
// <<<<<<< HEAD
//         $cart = cart::select('carts.*','products.name as product_name','products.price as product_price','products.feature_image as product_image')
//                     ->leftJoin('products','products.id','carts.product_id')
//                     ->where('user_id',Auth::user()->id)
//                     ->get();

//         $totalPrice = 0;
//         foreach($cart as $item){
//             $totalPrice += $item->product_price;
//         }
//         $industries = Industry::orderby("title")->get();
//         $categories  = Category::orderby("title")->get();
//         $shop_20 = Shop::orderby("name")->take(20)->get();
//         $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
//         $siteinfo = siteInfo::first();
//         $toptext = toptext::first();
//         return view("website.shopping-cart",compact("industries","categories","shop_20","recommaneded_product",'cart','totalPrice','siteinfo','toptext'));
//     }
// =======
        if(Auth::check()){
            $cart = cart::select('carts.*','products.name as product_name','products.price as product_price','products.feature_image as product_image')
            ->leftJoin('products','products.id','carts.product_id')
            ->where('user_id',Auth::user()->id)
            ->get();

            $totalPrice = 0;
            foreach($cart as $item){
            $totalPrice += (int)$item->product_price * (int)$item->qty;
            }
            $industries = Industry::orderby("title")->get();
            $categories  = Category::orderby("title")->get();
            $shop_20 = Shop::orderby("name")->take(20)->get();
            $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
            $siteinfo = siteInfo::first();
            $toptext = toptext::first();
            return view("website.shopping-cart",compact("industries","categories","shop_20","recommaneded_product",'cart','totalPrice','siteinfo','toptext'));

        }else{
           return redirect()->back();
        }

}
// >>>>>>> e8af25f32325ab4b2ab12a51fc45b64412620734


    //industry_all
    public function industry_all(){
        // $industries = Industry::orderby("title")->get();
        // $categories  = Category::orderby("title")->get();
        // $shop_20 = Shop::orderby("name")->take(20)->get();
        // $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        // $industry = Industry::orderby("title")->get();
        // $products = Product::get();
        // $siteinfo = siteInfo::first();
        // $toptext = toptext::first();
        // if(Auth::check()){
        //     $cart = cart::where('user_id',Auth::user()->id)->get();
        // }else{
        //     $cart = cart::where('id',0)->get();
        // }
        // return view('website.industry_all',compact("industry","industries","categories","shop_20","recommaneded_product","products",'siteinfo','toptext','cart'));

        $industry = Industry::orderby("title")->get();
        $products = Product::get();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        return view('website.industry_all',compact("industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));

    }


    //become_merchant
    public function become_merchant(){
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $industry = Industry::orderby("title")->get();
        $products = Product::orderby("id","desc")->paginate(15);
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        return view('website.merchant_form',compact("cart","industries","categories","shop_20","recommaneded_product","products",'siteinfo','toptext'));
    }


    //category_detail
    public function category_detail($id){
        $industry = Industry::orderby("title")->get();
        $products = Product::get();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
        $industry_shops = Shop::where("industry_type",$id)->get();
        return view('website.category_detail',compact("industry_shops","industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));

    }

    //error_404
    public function error_404(){
        $industry = Industry::orderby("title")->get();
        $products = Product::get();
        if(Auth::check()){
            $cart = cart::where('user_id',Auth::user()->id)->get();
        }else{
            $cart = cart::where('id',0)->get();
        }
        $industries = Industry::orderby("title")->get();
        $categories  = Category::orderby("title")->get();
        $shop_20 = Shop::orderby("name")->take(20)->get();
        $recommaneded_product = Product::orderby("id","desc")->take(10)->get();
        $siteinfo = siteInfo::first();
        $toptext = toptext::first();
// <<<<<<< HEAD
//         return view('website.index',compact("industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));

// =======
        $bannerAds = bannerAds::orderby("sort","desc")->get();
        return view('website.404',compact("bannerAds","industries","categories","shop_20","recommaneded_product","industry",'products','cart','siteinfo','toptext'));

// >>>>>>> e8af25f32325ab4b2ab12a51fc45b64412620734
    }

}




