@extends('website.layout.master')
@section('title','Home Page')
@section('nav')
    @include("website.layout.nav")
@endsection
@section('content')
<div class="container">


    @if($shopbannerimages_count  != 0)
    <br> <br>
    <div class="nt_section type_slideshow type_carousel ">
        <div class="slideshow-wrapper nt_full se_height_cus_h nt_first">
            <div class="fade_flick_1 slideshow row no-gutters equal_nt nt_slider js_carousel prev_next_0 btn_owl_1 dot_owl_2 dot_color_1 btn_vi_2" data-flickity='{ "fade":0,"cellAlign": "center","imagesLoaded": 0,"lazyLoad": 0,"freeScroll": 0,"wrapAround": true,"autoPlay" : 0,"pauseAutoPlayOnHover" : true, "rightToLeft": false, "prevNextButtons": false,"pageDots": true, "contain" : 1,"adaptiveHeight" : 1,"dragThreshold" : 5,"percentPosition": 1 }'>

                @foreach($shopbannerimages as $s_image)
                <div class="col-12 slideshow__slide">
                    <a href="{{ $s_image->link }}">
                    <div class="oh position-relative nt_img_txt bg-black--transparent" style="background-image:url('{{asset('/shopbannerimages')}}/{{$s_image->image}}');   background-size: cover;  background-repeat: no-repeat;width:100%" >
                        <div class="js_full_ht4 img_slider_block kalles-slide-element__pdb-600">
                            <div class="bg_rp_norepeat bg_sz_cover lazyload item__position center center img_tran_ef pa l__0 t__0 r__0 b__0" data-bgset="{{asset('/storage/shops')}}/{{$s_image->image}}" width alt="{{ $s_image->text }} image"></div>
                        </div>
                        <div class="caption-wrap caption-w-1 pe_none z_100 tl_md tl">
                            <div class="pa_txts caption kalles-caption-layout-01 kalles-caption--midle-left">
                                <div class="left_right">
                                    {{-- <img src="{{asset('/storage/shops')}}/{{$s_image->image}}" alt="123123"> --}}
                                    {{-- <h4 class="kalles-caption-layout-01__subtitle mg__0 lh__1">SUMMER 2020</h4>

                                    <a class="kalles-caption-layout-01__button kalles-button--square slt4_btn button pe_auto round_false btn_icon_false" href="shop-filter-options.html">Explore Now</a> --}}
                                    <h3 class="kalles-caption-layout-01__title mg__0 lh__1">{{ $s_image->text }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                     </a>
                </div>
                @endforeach



            </div>
        </div>
    </div>
    @endif

    <br> <br>
    <div class="row">
        @foreach($shops as $shop)
            <div class="col-md-4">
                <img src="{{asset('/storage/shops')}}/{{$shop->photo}}" style="width:300px;height:300px;" class="img-responsive" alt="Shop Logo">
            </div>
            <div class="col-md-6">
                <b style="color: black">Shop Name : </b> {{$shop->name}} <br>
                <b style="color: black"> Shop Hotline : </b> <a href="tel:{{$shop->phone}}"> {{$shop->phone}} </a> <br>
                <b style="color: black"> Shop Mail :</b> <a href="mailto:{{$shop->email}}"> {{$shop->email}} </a> <br>
                <b style="color: black"> Opening Hour :</b> {{ $shop->hour }} <br>
                <b style="color: black"> Hotline Phone :</b>  <a href="tel:{{$shop->hotlline}}"> {{$shop->hotlline}} </a> <br>
                <b style="color: black">Shop Address : </b> {{ $shop->address }} <br>
                <br>
                @if($shop->facebook_link != "")
                 <a href="{{$shop->facebook_link}}" target="_blank">
                 <img src="{{asset('logos/fb.png')}}"  alt="" style="width:50px;height:50px">
                 </a>
                @endif
                @if($shop->messager_link != "")
                <a href="{{$shop->messager_link}}" target="_blank">
                <img src="{{asset('logos/messanger.png')}}" alt="" style="width:50px;height:50px">
                </a>
                @endif
                @if($shop->telegram_link != "")
                <a href="{{$shop->telegram_link}}" target="_blank">
                <img src="{{asset('logos/telegram.png')}}" alt="" style="width:50px;height:50px">
                </a>
                @endif
                @if($shop->viber_link != "")

                <a href="{{$shop->viber_link}}" target="_blank">
                <img src="{{asset('logos/viber.png')}}" alt="" style="width:50px;height:50px">
                </a>
                @endif



            </div>
        @endforeach
        <hr>
    </div>
    <br>
    <div class="row">
        <div id="nt_wrapper">



            <div id="nt_content">



                <div class="container container_cat pop_default cat_default mb__20">

                    <!--grid control-->
                    <div class="cat_toolbar row fl_center al_center mt__30">
                        <div class="cat_filter col op__0 pe_none">
                            <a href="#" data-opennt="#kalles-section-nt_filter" data-pos="left" data-remove="true" data-class="popup_filter" data-bg="hide_btn" class="has_icon btn_filter mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
                            <a href="#" data-id="#kalles-section-nt_filter" class="btn_filter js_filter dn mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
                        </div>
                        <div class="cat_view col-auto">
                            <div class="dn dev_desktop">
                                <a href="#" data-mode="grid" data-dev="dk" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
                                <a href="#" data-mode="grid" data-dev="dk" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
                                <a href="#" data-mode="grid" data-dev="dk" data-col="3" class="pr mr__10 cat_view_page view_3 active"></a>
                                <a href="#" data-mode="grid" data-dev="dk" data-col="15" class="pr mr__10 cat_view_page view_15"></a>
                                <a href="#" data-mode="grid" data-dev="dk" data-col="2" class="pr cat_view_page view_2"></a>
                            </div>
                            <div class="dn dev_tablet dev_view_cat">
                                <a href="#" data-dev="tb" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
                                <a href="#" data-dev="tb" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
                                <a href="#" data-dev="tb" data-col="3" class="pr cat_view_page view_3"></a>
                            </div>
                            <div class="flex dev_mobile dev_view_cat">
                                <a href="#" data-dev="mb" data-col="12" class="pr mr__10 cat_view_page view_12"></a>
                                <a href="#" data-dev="mb" data-col="6" class="pr cat_view_page view_6"></a>
                            </div>
                        </div>

                    </div>
                    <!--end grid control-->



                    <!--product section-->
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="kalles-section tp_se_cdt">



                                <!--products list-->
                                <div class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default">
                                    @foreach($products as $product)
                                    <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                        <div class="product-inner pr">
                                            <div class="product-image pr oh lazyload">
                                                <input type="hidden" class="productId" value="{{ $product->id }}">
                                                <input type="hidden" class="userId" value="{{ Auth::user()->id }}">
                                                <input type="hidden" class="shopId" value="{{ $product->shop_id }}">
                                                {{-- <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span> --}}
                                                <a class="d-block" href="/product/{{$product->id}}">
                                                    <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/storage/products/' . $product->feature_image) }}"></div>
                                                </a>
                                                <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                    <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('/storage/products/' . $product->feature_image) }}"></div>
                                                </div>
                                                <div class="nt_add_w ts__03 pa ">
                                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                                </div>
                                                <div class="hover_button op__0 tc pa flex column ts__03">
                                                    <button class="pr nt_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"  ><span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span></button>
                                                    <button class="addToCart pr pr_atc cd br__40 bgw tc dib cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></button>
                                                </div>
                                                <div class="product-attr pa ts__03 cw op__0 tc">
                                                    <p class="truncate mg__0 w__100">{{$product->size}}</p>
                                                </div>
                                            </div>
                                            <div class="product-info mt__15">
                                                <h3 class="product-title pr fs__14 mg__0 fwm">
                                                    <a class="cd chp" href="product-detail-layout-01.html">{{$product->name}}</a>
                                                </h3>
                                                <span class="price dib mb__5">{{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!--end products list-->

                                <!--navigation-->
                                <!-- <div class="products-footer tc mt__40">
                                    <nav class="nt-pagination w__100 tc paginate_ajax">
                                        <ul class="pagination-page page-numbers">
                                            <li><a class="prev page-numbers" href="#">Prev</a></li>
                                            <li><span class="page-numbers">1</span></li>
                                            <li><a class="page-numbers current" href="#">2</a></li>
                                            <li><a class="page-numbers" href="#">3</a></li>
                                            <li><a class="page-numbers" href="#">4</a></li>
                                            <li><a class="next page-numbers" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div> -->
                                <!--end navigation-->



                            </div>

                        </div>
                    </div>
                    <!--end product section-->

                </div>

            </div>



            <!-- footer -->
            <footer id="nt_footer" class="bgbl footer-1" style="visibility: hidden;height:0px">
                <div id="kalles-section-footer_top" class="kalles-section footer__top type_instagram">
                    <div class="footer__top_wrap footer_sticky_false footer_collapse_true nt_bg_overlay pr oh pb__30 pt__80">
                        <div  class="container pr z_100">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-1 order-1">
                                    <div class="widget widget_text widget_logo">
                                        <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30 dn_md">
                                            <span class="txt_title">Get in touch</span>
                                            <span class="nav_link_icon ml__5"></span>
                                        </h3>
                                        <div class="widget_footer">
                                            <div class="footer-contact">
                                                <p>
                                                    <a class="d-block" href="index.html">
                                                        <img class="w__100 mb__15 lazyload max-width__95px" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20220%2066%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="Kalles Template" data-src="assets/images/svg/kalles.svg">
                                                    </a>
                                                </p>
                                                <p>
                                                    <i class="pegk pe-7s-map-marker"> </i><span>184 Main Rd E, St Albans <br> <span class="pl__30">VIC 3021, Australia</span></span>
                                                </p>
                                                <p><i class="pegk pe-7s-mail"></i>
                                                    <span><a href="mailto:contact@company.com">contact@company.com</a></span>
                                                </p>
                                                <p><i class="pegk pe-7s-call"></i> <span>+001 2233 456 </span></p>
                                                <div class="nt-social">
                                                    <a href="https://www.facebook.com" class="facebook cb ttip_nt tooltip_top">
                                                        <span class="tt_txt">Follow on Facebook</span>
                                                        <i class="facl facl-facebook"></i>
                                                    </a>
                                                    <a href="https://twitter.com" class="twitter cb ttip_nt tooltip_top">
                                                        <span class="tt_txt">Follow on Twitter</span>
                                                        <i class="facl facl-twitter"></i>
                                                    </a>
                                                    <a href="https://www.instagram.com" class="instagram cb ttip_nt tooltip_top">
                                                        <span class="tt_txt">Follow on Instagram</span>
                                                        <i class="facl facl-instagram"></i>
                                                    </a>
                                                    <a href="https://www.linkedin.com" class="linkedin cb ttip_nt tooltip_top">
                                                        <span class="tt_txt">Follow on Linkedin</span>
                                                        <i class="facl facl-linkedin"></i>
                                                    </a>
                                                    <a href="https://www.pinterest.com" class="pinterest cb ttip_nt tooltip_top">
                                                        <span class="tt_txt">Follow on Pinterest</span>
                                                        <i class="facl facl-pinterest"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-2 order-1">
                                    <div class="widget widget_nav_menu">
                                        <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                            <span class="txt_title">Categories</span>
                                            <span class="nav_link_icon ml__5"></span>
                                        </h3>
                                        <div class="menu_footer widget_footer">
                                            <ul class="menu">
                                                <li class="menu-item">
                                                    <a href="shop-filter-options.html">Men</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-filter-options.html">Women</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-1600px-layout.html">Accessories</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-1600px-layout.html">Shoes</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-1600px-layout.html">Denim</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shop-1600px-layout.html">Dress</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-3 order-1">
                                    <div class="widget widget_nav_menu">
                                        <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                            <span class="txt_title">Infomation</span>
                                            <span class="nav_link_icon ml__5"></span>
                                        </h3>
                                        <div class="menu_footer widget_footer">
                                            <ul class="menu">
                                                <li class="menu-item">
                                                    <a href="about-us.html">About Us</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="contact-us.html">Contact Us</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="terms-conditions.html">Terms &amp; Conditions</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="returns-exchanges.html">Returns &amp; Exchanges</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="shipping-delivery.html">Shipping &amp; Delivery</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="privacy-policy.html">Privacy Policy</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-4 order-1">
                                    <div class="widget widget_nav_menu">
                                        <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                            <span class="txt_title">Useful links</span>
                                            <span class="nav_link_icon ml__5"></span>
                                        </h3>
                                        <div class="menu_footer widget_footer">
                                            <ul class="menu">
                                                <li class="menu-item">
                                                    <a href="store-location.html">Store Location</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-grid.html">Latest News</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="size-guide.html">Size Guide</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="faqs-2.html">FAQs 2</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="faqs.html">FAQs</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-5 order-1">
                                    <div class="widget widget_text">
                                        <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                            <span class="txt_title">Newsletter Signup</span>
                                            <span class="nav_link_icon ml__5"></span>
                                        </h3>
                                        <div class="widget_footer newl_des_1">
                                            <p>Subscribe to our newsletter and get 10% off your first purchase</p>
                                            <form id="contact_form" class="mc4wp-form pr z_100">
                                                <div class="mc4wp-form-fields">
                                                    <div class="signup-newsletter-form row no-gutters pr oh ">
                                                        <div class="col col_email">
                                                            <input type="email" name="email" placeholder="Your email address" value="" class="tc tl_md input-text" required="required">
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="submit" class="btn_new_icon_false w__100 submit-btn truncate">
                                                                <span>Subscribe</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="mt__20">
                                                <img class="w__100 lazyload w__max-width__197" data-src="assets/images/payment2.png" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20197%2020%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div id="kalles-section-footer_bot" class="kalles-section footer__bot">
                    <div class="footer__bot_wrap pt__20 pb__20">
                        <div class="container pr tc">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12 col_1">Copyright © 2021
                                    <span class="cp">Kalles</span> all rights reserved. Powered by <a href="https://themes.the4.co/kalles-html">The4</a></div>
                                <div class="col-lg-6 col-md-12 col-12 col_2">
                                    <ul id="footer-menu" class="clearfix">
                                        <li class="menu-item">
                                            <a href="shop-filter-options.html">Shop</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact-us.html">Contact</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-grid.html">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </footer>
            <!-- end footer -->

        </div>

    </div>

    <div id="map_canvas" style="width:100%;height:200px"></div>
</div>


@foreach ($products as $product)
<div id="quick-shop-tpl" class="dn 123">
    <div class="wrap_qs_pr buy_qs_false kalles-quick-shop">
        <div class="qs_imgs_i row al_center mb__30">
            <div class="col-auto cl_pr_img">
                <div class="pr oh qs_imgs_wrap">
                    <div class="row equal_nt qs_imgs nt_slider nt_carousel_qs p-thumb_qs"
                        data-flickity='{"fade":false,"cellSelector":".qs_img_i","cellAlign":"center","wrapAround":true,"autoPlay":false,"prevNextButtons":false,"adaptiveHeight":true,"imagesLoaded":false,"lazyload":0,"dragThreshold":0,"pageDots":false,"rightToLeft":false}'>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz"
                            data-bgset="{{ asset('storage/products/'.$product->feature_image) }}"></div>
                             {{-- assets/images/quick_shop/p_qs_01.jpg  --}}
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz"
                            data-bgset="assets/images/quick_shop/p_qs_02.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz"
                            data-bgset="assets/images/quick_shop/p_qs_03.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz"
                            data-bgset="assets/images/quick_shop/p_qs_04.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz"
                            data-bgset="assets/images/quick_shop/p_qs_05.jpg"></div>
                    </div>
                </div>
            </div>
            <div class="col cl_pr_title tc">
                <h3 class="product-title pr fs__16 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">{{ $product->name }}</a>
                </h3>
                <div id="price_qs"><span class="price "><del>{{ $product->original_price }}</del> <ins>{{ $product->price }}</ins></span><span
                        class="qs_label onsale cw"><span>-25%</span></span>
                </div>
            </div>
        </div>
        <div class="qs_info_i tc">
            <div class="qs_swatch">
                <div id="callBackVariant_qs" class="nt_green nt1_xs nt2_">
                    <div id="cart-form_qs" class="nt_cart_form variations_form variations_form_qs">
                        <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                            <div class="nt_select_qs0 swatch is-color kalles_swatch_js">
                                <h4 class="swatch__title">Color: <span class="nt_name_current">Green</span></h4>
                                <ul class="swatches-select swatch__list_pr">
                                    <li class="ttip_nt tooltip_top_right nt-swatch swatch_pr_item bg_css_green is-selected"
                                        data-escape="Green">
                                        <span class="tt_txt">Green</span><span
                                            class="swatch__value_pr pr bg_color_green"></span>
                                    </li>
                                    <li class="ttip_nt tooltip_top nt-swatch swatch_pr_item " data-escape="Grey">
                                        <span class="tt_txt">Grey</span><span
                                            class="swatch__value_pr pr bg_color_grey"></span>
                                    </li>
                                    <li class="ttip_nt tooltip_top nt-swatch swatch_pr_item bg_css_blue "
                                        data-escape="Blue">
                                        <span class="tt_txt">Blue</span><span
                                            class="swatch__value_pr pr bg_color_blue"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="nt_select_qs1 swatch is-label kalles_swatch_js">
                                <h4 class="swatch__title">Size: <span class="nt_name_current">XS</span></h4>
                                <ul class="swatches-select swatch__list_pr">
                                    <li class="nt-swatch swatch_pr_item pr bg_css_xs is-selected" data-escape="XS">
                                        <span class="swatch__value_pr">XS</span>
                                    </li>
                                    <li class="nt-swatch swatch_pr_item pr " data-escape="S">
                                        <span class="swatch__value_pr">S</span>
                                    </li>
                                    <li class="nt-swatch swatch_pr_item pr " data-escape="M">
                                        <span class="swatch__value_pr">M</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="variations_button in_flex column w__100">
                            <div class="flex al_center column">
                                <div class="quantity pr mb__15 order-1 qty__" id="sp_qty_qs">
                                    <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js"
                                        step="1" min="1" max="9999" name="quantity" value="1" inputmode="numeric">
                                    <div class="qty tc fs__14">
                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                            <i class="facl facl-plus"></i></button>
                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                            <i class="facl facl-minus"></i></button>
                                    </div>
                                </div>

                                <button type="submit"
                                    class="single_add_to_cart_button button truncate js_frm_cart w__100 order-4">
                                    <span class="txt_add ">Add to cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="product-detail-layout-01.html" class="btn fwsb detail_link dib mt__15">View full details<i
                    class="facl facl-right"></i></a>
        </div>
    </div>
</div>
@endforeach


<!--end quick shop-->
<!--end quick view-->
@endsection

@foreach($shops as $ss)
<script>
    function initialize() {
      var myLatlng = new google.maps.LatLng(<?php echo $ss->latitude ?>, <?php echo $ss->longitude ?>);
      var myOptions = {
        zoom: 8,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }

    function loadScript() {
      var script = document.createElement("script");
      script.type = "text/javascript";
      script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
      document.body.appendChild(script);
    }

    window.onload = loadScript;


</script>
@endforeach
