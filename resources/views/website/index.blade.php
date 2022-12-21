@extends('website.layout.master')
@section('title','Home Page')
@section('nav')
    @include("website.layout.nav_for_home")
@endsection
@section('content')
<!-- main slide -->
<div class="kalles-section nt_section type_image_text_overlay">
    @if($bannerAds->count() > 0)
        @foreach($bannerAds as $bannerAds)
        <div class="kalles-electronic-vertical__slide-banner nt_full txt_shadow_false se_height_cus_h nt_first">
            <div class="row equal_nt">
                <div class="col-12">
                    <div class="nt_img_txt oh pr middle center">
                    

                    
                        <div class="js_full_ht4 lazyload item__position bg_rp_norepeat bg_sz_cover center"
                            data-bgset="{{ asset('/storage/banner/' . $bannerAds->image) }}"></div>
                        <div
                            class="txt_content pa t__0 l__0 b__0 r__0 caption-w-2 flex column shadow_wrap tc pe_none z__100">
                            <div class="pa pa_txts">
                                <h3 class="mt__0 mg__0 lh__1"></h3>
                                <div class="kalles-electronic-vertical__slide-banner-br imtt4_space"></div>
                            </div>
                        </div>
                        <a href="{{$bannerAds->link}}" class="pa t__0 l__0 b__0 r__0"></a>
                    
                    </div>
                </div>
            </div>
            <a href="{{$bannerAds->link}}" class="pa t__0 l__0 b__0 r__0"></a>
        </div>
        @endforeach        
    @else
        <!-- Default Banner Image -->
    @endif

</div>

<!-- end main slide -->
<br>
<div class="nt_section type_featured_collection tp_se_cdt">
    <div class="kalles-otp-01__feature container">
        <!-- <div class="wrap_title des_title_2">
            <h3 class="section-title tc position-relative flex fl_center al_center fs__24 title_2">
                <span class="mr__10 ml__10">LATEST SHOP</span>
            </h3>
            <span class="dn tt_divider">
                <span></span>
                <i class="dn clprfalse title_2 la-gem"></i>
                <span></span>
            </span>
            <span class="section-subtitle db tc sub-title">Latest 20 shop</span>
        </div> -->

        <div class="products nt_products_holder row fl_center row_pr_1 cdt_des_5 round_cd_true nt_cover ratio_nt position_8 space_30">


            @foreach($shop_20 as $s2)

            <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                <div class="product-inner pr">
                    <div class="product-image position-relative oh lazyloaded">
                        {{-- <span class="tc nt_labels pa pe_none cw">
                            <span class="nt_label new">New</span>
                        </span> --}}
                        <a class="d-block" href="/shop/{{$s2->id}}/{{$s2->user_id}}">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz padding-top__127_571 lazyloaded" data-bgset="{{asset('/storage/shops')}}/{{$s2->photo}}" style="background-image: url(&quot;{{asset('/storage/shops')}}/{{$s2->photo}}&quot;);"><picture style="display: none;"><source data-srcset="assets/images/products/pr-01.jpg" sizes="150px" srcset="assets/images/products/pr-01.jpg"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="150px"></picture></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz padding-top__127_571 lazyloaded" data-bgset="{{asset('/storage/shops')}}/{{$s2->photo}}" style="background-image: url(&quot;{{asset('/storage/shops')}}/{{$s2->photo}}&quot;);"><picture style="display: none;"><source data-srcset="assets/images/products/pr-02.jpg" sizes="150px" srcset="assets/images/products/pr-02.jpg"><img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="150px"></picture></div>
                        </div>


                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title text-center position-relative fs__14 mg__0 fwm">
                            <a class="cd chp text-center" style="text-align: center" href="/shop/{{$s2->id}}/{{$s2->user_id}}"> <b>{{ $s2->name }}</b> </a>
                            <br>
                            <!-- <p style="font-szie:11px" class="text-center">{{ $s2->industry_type }}</p> -->
                        </h3>

                    </div>
                </div>
            </div>


            @endforeach


        </div>
        <br> <br>
        <div class="products-footer tc mt__40">
            <a class="btn btn-info " style="padding-top:10px;padding-bottom:10px;padding-left:30px;padding-right:30px;border-radius:100%%;" href="/shop">VIEW ALL SHOP</a>
        </div>
        <br>
    </div>
</div>


<!-- bestselling products-->
{{-- <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
    <div class="kalles-electronic-vertical__bestseller container">
        <form action="{{route('user#cart#add')}}" method="POST">
            @csrf
            <div class="wrap_title des_title_2">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                    <span class="mr__10 ml__10">BESTSELLER</span>
                </h3>
                <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span>
                <span class="section-subtitle db tc sub-title">Top seller in the week</span>
            </div>
            @foreach ($products as $product)
            <input type="hidden" value="{{$product->id}}" name="productId" id="productId">
            @auth
            <input type="hidden" value="{{Auth::user()->id}}" name="userId" id="userId">
            @endauth
            <input type="hidden" value="1" name="qty">
            <div
                class="products nt_products_holder row fl_center row_pr_2 cdt_des_1 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt">
                <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                    <div class="product-inner pr">
                        <div class="product-image pr oh lazyload">
                            <span class="tc nt_labels pa pe_none cw">
                                <span class="onsale nt_label"><span>-29%</span></span>
                            </span>
                            <a class="db" href="product-detail-layout-01.html">
                                <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                    data-bgset="assets/images/home-electronic/pr-01.jpg"></div>
                            </a>
                            <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                    data-bgset="assets/images/home-electronic/pr-02.jpg"></div>
                            </div>
                            @auth
                            <div class="nt_add_w ts__03 pa">
                                <a href="#" class="addtoWhiteList wishlistadd cb chp ttip_nt tooltip_right">
                                    <span class="tt_txt">Add to Whitelist</span><i class="facl facl-heart-o"></i>
                                </a>
                            </div>
                            @endauth
                            @guest
                            <div class="nt_add_w ts__03 pa">
                                <a href="#" class="push_side cb chp ttip_nt tooltip_right" data-id="#nt_login_canvas">
                                    <span class="tt_txt">Add to Whitelist</span><i class="facl facl-heart-o"></i>
                                </a>
                            </div>
                            @endguest
                            <div class="hover_button op__0 tc pa flex column ts__03">
                                <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                    href="#">
                                    <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                        view</span>
                                </a>
                                {{-- <a href="#"
                                    class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                        cart</span>
                                </a> --}}

                                {{--@auth
                                <button type="submit"
                                    class=" pr pr_atc cd br__40 bgw tc dib  cb chp ttip_nt tooltip_top_left">
                                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                        cart</span>
                                </button>
                                @endauth
                                @guest
                                <a href="#" data-id="#nt_login_canvas"
                                    class="pr pr_atc cd br__40 bgw tc dib cb chp ttip_nt tooltip_top_left cb chp db push_side">
                                    <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                        cart</span></a>
                                @endguest
                            </div>
                        </div>
                        <div class="product-info mt__15">
                            <h3 class="product-title pr fs__14 mg__0 fwm">
                                <a class="cd chp" href="product-detail-layout-01.html">Ysamsung Camera</a>
                            </h3>
                            <span class="price dib mb__5"><del>$35.00</del><ins>$25.00</ins></span>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">

                                    <a class="db" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-electronic/pr-03.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-electronic/pr-04.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                            href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                                view</span>
                                        </a>
                                        <a href="#" class="addCart pr pr_atc cd br__40 bgw tc dib cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                                cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Beats Solo3 Wireless</a>
                                    </h3>
                                    <span class="price dib mb__5">$35.00 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-electronic/pr-05.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-electronic/pr-06.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                            href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                                view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                                cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Lomo Sanremo Edition</a>
                                    </h3>
                                    <span class="price dib mb__5">$65.00 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-electronic/pr-07.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-electronic/pr-08.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                            href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                                view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                                cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Ygoogle Speaker</a>
                                    </h3>
                                    <span class="price dib mb__5">$65.00 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-14.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-15.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                            href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                                view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                                cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Ybeoplay H9i</a>
                                    </h3>
                                    <span class="price dib mb__5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-16.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-17.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                            href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                                view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                                cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">YApple MacBook</a>
                                    </h3>
                                    <span class="price dib mb__5">$55.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
                                    <a class="db" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-20.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-21.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                            href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                                view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                                cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Contemporary design classic</a>
                                    </h3>
                                    <span class="price dib mb__5">$25.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    <a class="db" href="product-detail-layout-01.html">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-26.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100"
                                            data-bgset="assets/images/home-decor-2/pr-27.jpg"></div>
                                    </div>
                                    <div class="nt_add_w ts__03 pa">
                                        <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                            <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                        </a>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                        <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                            href="#">
                                            <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick
                                                view</span>
                                        </a>
                                        <a href="#" class="pr pr_atc cd br__40 bgw tc dib js_addtc cb chp ttip_nt tooltip_top_left">
                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to
                                                cart</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="product-detail-layout-01.html">Yapple Watch Nike Series 4</a>
                                    </h3>
                                    <span class="price dib mb__5">$49.00</span>
                                </div>
                            </div>
                        </div> --}}
            {{--</div>
            @endforeach
            <div class="products-footer tc mt__40">
                <a class="se_cat_lm pr nt_cat_lm button button_dark br_rd_false btn_icon_false" href="#">Load More</a>
            </div>
        </form>
    </div>
</div> --}}
<!-- end bestselling products-->


@endsection
