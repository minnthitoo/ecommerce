<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BannerAdsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Merchant_related\CategoryController;
use App\Http\Controllers\Merchant_related\CuponController;
use App\Http\Controllers\Merchant_related\IndustryController;
use App\Http\Controllers\Merchant_related\SubCategoryController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ShopbannerimagesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\TopTextController;
use App\Http\Controllers\UserAnalysisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WhiteListController;
use Illuminate\Support\Facades\Route;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/userAnalysis', [UserAnalysisController::class, 'userAnalysis']);

    //admin middleware
    Route::middleware(['admin_middleware'])->group(function () {
        //admin
        Route::prefix('admin')->group(function () {
            Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin#dashboard');

            Route::get("user", [AdminController::class, 'user'])->name('admin#user');
            Route::get("user/create/form", [AdminController::class, 'userCreateForm'])->name('admin#user#create#form');
            Route::post('api/fetch-cities', [AdminController::class, 'fetchCity']);

            Route::get("shop",[ShopController::class,"shop"])->name("admin#shop");
            Route::get("shop/create",[ShopController::class,"shopCreatePage"])->name("admin#shop#createPage");
            Route::post('shop/create', [ShopController::class, 'shopCreate'])->name('admin#shop#create');
            Route::get('/shop/edit', [ShopController::class, 'editPage'])->name('admin#shop#editPage');
            Route::post('shop/edit', [ShopController::class, 'edit'])->name('admin#shop#edit');

            Route::get("rotues", [AdminController::class, 'viwe_all_route'])->name("admin#view#all#route");
            Route::get("logs", [AdminController::class, 'viwe_all_logs'])->name("admin#view#all#logs");


            // user CRUD
            Route::post('/user/create',[UserController::class,'create'])->name('admin#user#create');
            Route::get('/user/table',[UserController::class,'userTable'])->name('admin#user#table');
            Route::get('/user/details/{id}',[UserController::class,'details'])->name('admin#user#details');
            Route::post('/user/update',[UserController::class,'update'])->name('admin#user#update');
            Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('admin#user#delete');
            Route::get('/user/table/admin',[UserController::class,'userTableAdmin'])->name("admin#user#admin");
            Route::get('/user/table/shop',[UserController::class,'userTableShop'])->name("admin#user#shop");
            Route::get('/user/table/user',[UserController::class,'userTableUser'])->name("admin#user#user");

            //Config
            Route::prefix('config')->group(function () {
                //industry
                Route::get('/industry', [IndustryController::class, 'index'])->name('admin#industry#index');
                Route::post('/industry/create', [IndustryController::class, 'create'])->name('admin#industry#create');
                Route::post('/industry/edit', [IndustryController::class, 'update'])->name('admin#industry#update');
                Route::get('/industry/delete/{id}', [IndustryController::class, 'delete'])->name('admin#industry#delete');

                //category
                Route::get('/category', [CategoryController::class, 'index'])->name('admin#category#index');
                Route::post('/category/create', [CategoryController::class, 'create'])->name('admin#category#create');
                Route::post('/category/update', [CategoryController::class, 'update'])->name('admin#category#update');
                Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin#category#delete');


                //subcategory
                Route::get('/subcategory', [SubCategoryController::class, 'index'])->name('admin#subcategory#index');
                Route::post('/subcategory/create', [SubCategoryController::class, 'create'])->name('admin#subcategory#create');
                Route::post('/subcategory/update', [SubCategoryController::class, 'update'])->name('admin#subcategory#update');
                Route::get('/subcategory/delete/{id}', [SubCategoryController::class, 'delete'])->name('admin#subcategory#delete');


                /* Admin / Config / Region  */
                Route::get("/region", [RegionController::class, "index"])->name("admin#config#state");
                Route::post("/region", [RegionController::class, "store"]);
                Route::post("/region/delete", [RegionController::class, "delete"])->name("admin#config#state#delete");
                Route::post("/region/update", [RegionController::class, "update"])->name("admin#config#state#update");

                /* Admin / Config / City  */
                Route::get("/city", [CityController::class, "index"])->name("admin#config#city");
                Route::post("/city", [CityController::class, "store"]);
                Route::post("/city/delete", [CityController::class, "delete"])->name("admin#config#city#delete");
                Route::post("/city/update", [CityController::class, "update"])->name("admin#config#city#update");

                // admin / config / siteinfo
                Route::get('/siteInfo',[SiteInfoController::class, 'index'])->name('admin#config#siteInfo');
                Route::post('/siteInfo/update',[SiteInfoController::class, 'update'])->name('admin#config#siteInfo#update');

                // admin / config / toptext
                Route::get('/topText',[TopTextController::class, 'index'])->name('admin#config#toptext');
                Route::post('/topText/update',[TopTextController::class,'update'])->name('admin#config#toptext#update');

                // admin / config / bannerAds
                Route::get("/ads/banner",[BannerAdsController::class,"index"])->name("admin#banner#ads");
                Route::post("/ads/banner",[BannerAdsController::class,"store"])->name("admin#banner#ads#post");
                Route::post("/ads/banner/{id}",[BannerAdsController::class,"update"])->name("admin#banner#ads#update");
                Route::get("/ads/banner/{id}",[BannerAdsController::class,"delete"])->name("admin#banner#ads#delete");

            });
        });
    });

    //merchant owner middleware->nullable(); //moment
    Route::middleware(['merchant_middleware'])->group(function () {
        //merchant owner
        Route::prefix('merchant')->group(function () {
            // Route::get('/', [MerchantController::class, 'dashboard'])->name('merchant#dashboard');
            Route::get('/dashboard',[MerchantController::class,'dashboard'])->name('merchant#dashboard');

            //product
            Route::get('/product/create',[ProductController::class,"create"])->name("merchant#product#create");
            //Route::post('api/fetch-category', [ProductController::class, 'fetchCategroy']);
            Route::post('/product/create',[ProductController::class,'add'])->name('merchant#product#add');
            Route::get('/product/list',[ProductController::class,'list'])->name('merchant#product#list');
            Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('merchant#product#edit');
            Route::post('/product/update',[ProductController::class,'update'])->name('merchant#product#update');
            Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('merchant#product#delete');
            Route::get('/product/delete/feature_image/{id}/{name}', [ProductController::class, 'delete_feature_image'])->name('merchant#delete#feature_image');
            Route::get('/product/delete/images/{id}/{name}', [ProductController::class, 'delete_images'])->name('merchant#delete#images');
            Route::post('api/product-category', [ProductController::class, 'fetchCategroy']);
            Route::post('api/product-subcategory', [ProductController::class, 'fetchSubCategroy']);

            //Order
            Route::get("/order",[OrderManagement::class,'index'])->name("merchant#order");


            //cupon crud
            Route::prefix('cupon')->group(function () {
                Route::get('/createPage',[CuponController::class,'createPage'])->name('merchant#cupon#createPage');
                Route::post('/create',[CuponController::class,'create'])->name('merchant#cupon#create');
                Route::get('/list',[CuponController::class,'list'])->name('merchant#cupon#list');
                Route::get('/details/{id}',[CuponController::class,'details'])->name('merchant#cupon#details');
                Route::get('/editPage/{id}',[CuponController::class,'editPage'])->name('merchant#cupon#editPage');
                Route::post('/edit',[CuponController::class,'edit'])->name('merchant#cupon#edit');
                Route::get('/delete/{id}',[CuponController::class,'delete'])->name('merchant#cupon#delete');
            });

            //shopbannerimages
            Route::prefix('shopBanner')->group(function(){
                Route::get('/',[ShopbannerimagesController::class,'index'])->name('merchant#shopbanner#index');
                Route::post('/create',[ShopbannerimagesController::class,'create'])->name('merchant#shopbanner#create');
                Route::post('/update',[ShopbannerimagesController::class,'update'])->name('merchant#shopbanner#update');
                Route::post('/delete',[ShopbannerimagesController::class,'delete'])->name('merchant#shopbanner#delete');
            });

            //shop
            Route::prefix('shop')->group(function () {
                Route::get('/',[ShopController::class,'index'])->name("merchant#shop#setting");
                Route::post('/edit',[ShopController::class,'edit'])->name('merchant#shop#edit');

                
            });
        });


    });


    //user
    Route::middleware(['user_middleware'])->group(function () {
        //user
        Route::prefix('user')->group(function () {
            Route::get('/dashboard', [UserController::class, 'home'])->name('user#home');

            // cart
            Route::post('/addToCart',[CartController::class,'create'])->name('user#cart#add');
            // with ajax
            Route::get('/addToCart',[CartController::class,'add']);
            Route::get('/delete/{id}',[CartController::class,'delete'])->name('user#cart#delete');
            Route::post('/update',[CartController::class,'update'])->name('user#cart#update');
        });
    });
});


//website dashboard
Route::prefix('/')->group(function () {

    //website
    Route::get('/', [WebsiteController::class, 'index'])->name('website');
    Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('website#checkout');
    Route::get("/contact-us", [WebsiteController::class, 'contact'])->name("website#contact-us");
    Route::get('/faq', [WebsiteController::class, 'faq'])->name("website#faq");
    Route::get('/produdct-detail', [WebsiteController::class, 'product_detail'])->name("website#product#detail");
    Route::get("/shopping-cart", [WebsiteController::class, 'shopping_cart'])->name("website#shopping#cart");
    Route::get("/products", [WebsiteController::class, 'product'])->name("website#product");
    Route::get("/product/{id}", [WebsiteController::class, 'product_detail']);
    Route::get("/shop", [WebsiteController::class, 'shop'])->name("website#shop");
    Route::get("/shop/{id}/{user_id}", [WebsiteController::class, 'shop_detail'])->name("website#shop#detail");
    Route::get('/industry/all', [WebsiteController::class, 'industry_all'])->name("industry#all");
    Route::get("/industry/{id}", [WebsiteController::class, 'industry_detail']);
    Route::get('/about-us', [WebsiteController::class, 'about_us'])->name("about#us");
    Route::get("/merchant/form", [WebsiteController::class, 'become_merchant'])->name("merchant#form");
    Route::get("/category/all", [WebsiteController::class, 'view_all_category'])->name("website#category#all");
    Route::get("/category/{id}", [WebsiteController::class, 'category_detail']);

    //ajax
    Route::get('ajax/addToCart', [AjaxController::class, 'addToCart']);


    //old route
    // Route::get('/shop', [WebsiteController::class, 'shop'])->name('user#shop');
    // Route::get('/shop/details', [WebsiteController::class, 'shop_detail'])->name('shop#details');
    // Route::get('/product',  [WebsiteController::class, 'product'])->name('user#product');
    // Route::get('/product/details', [WebsiteController::class, 'product_detail'])->name('product#details');
    // Route::get('/cart', [WebsiteController::class, 'cart'])->name('user#cart');
    // Route::get('/checkout', [WebsiteController::class, 'check_out'])->name('user#checkout');
    // Route::get('/contact',[WebsiteController::class, 'contact'] )->name('contact');
    // Route::get("/industry/detail/{id}",[WebsiteController::class, 'industry_detail'])->name("industry#detail");
});

Route::prefix('whitelist')->group(function () {
    Route::get("/",[WhiteListController::class,'index'])->name('website#whitelist');
    Route::get('/add',[WhiteListController::class,'create'])->name('whitelist#create');
    Route::get('/delete/{id}',[WhiteListController::class,'delete'])->name('whitelist#delete');
});

Route::prefix('merchant')->group(function(){
    Route::post('/create',[MerchantController::class,'create'])->name('merchant#create#post');
});

// Google Auth
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


//404
Route::fallback([WebsiteController::class,"error_404"])->name("error_404");