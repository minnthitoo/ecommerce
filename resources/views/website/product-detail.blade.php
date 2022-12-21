@extends('website.layout.master')
@section('title','Home Page')
@section('nav')
    @include("website.layout.nav")
@endsection
@section('content')
<div class="sp-single sp-single-1 des_pr_layout_1 mb__60">

    @foreach($products as $product)
    <div id="nt_content">
        <div class="sp-single sp-single-1 des_pr_layout_1 mb__60">
            <div class="bgbl pt__20 pb__20 lh__1">
                <div class="container">
                    <div class="row al_center">
                        <div class="col">
                            <nav class="sp-breadcrumb">
                                <a href="index.html">Home</a><i class="facl facl-angle-right"></i><a href="{{route('website#product')}}">Products</a><i class="facl facl-angle-right"></i>{{ $product->name }}
                            </nav>
                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="container container_cat cat_full">
                <div class="row product mt__40">
                    <div class="col-md-12 col-12 thumb_left">
                        <div class="row mb__50 pr_sticky_content">
                            <div class="col-md-6 col-12 pr product-images img_action_zoom pr_sticky_img kalles_product_thumnb_slide">
                                <div class="row theiaStickySidebar">
                                    <div class="col-12 col-lg col_thumb">
                                        <div class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel" data-flickity='{"initialIndex": ".media_id_001","fade":true,"draggable":">1","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>
                                            <div class="img_ptw p_ptw p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_66 media_id_001" data-mdid="001" data-height="1440" data-width="1128" data-ratio="0.7833333333333333" data-mdtype="image" data-src="{{ asset('/storage/products/' . $product->feature_image) }}" data-bgset="{{ asset('/storage/products/' . $product->feature_image) }}" ></div>
                                           
                                        </div>

                                        <div class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel" data-flickity='{"initialIndex": ".media_id_001","fade":true,"draggable":">1","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>
                                            <div class="img_ptw p_ptw p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload padding-top__127_66 media_id_001" data-mdid="001" data-height="1440" data-width="1128" data-ratio="0.7833333333333333" data-mdtype="image" data-src="{{ asset('/storage/products/' . $product->images) }}" data-bgset="{{ asset('/storage/products/' . $product->images) }}" ></div>
                                           
                                        </div>
                                       
                                    </div>
                                    <div class="col-12 col-lg-auto col_nav nav_medium t4_show">
                                        <div class="p-nav ratio_imgtrue row equal_nt nt_cover position_8 nt_slider pr_carousel" data-flickityjs='{"initialIndex": ".media_id_001","cellSelector": ".n-item:not(.is_varhide)","cellAlign": "left","asNavFor": ".p-thumb","wrapAround": true,"draggable": ">1","autoPlay": 0,"prevNextButtons": 0,"percentPosition": 1,"imagesLoaded": 0,"pageDots": 0,"groupCells": 3,"rightToLeft": false,"contain":  1,"freeScroll": 0}'></div>
                                    </div>
                                    <div class="dt_img_zoom pa t__0 r__0 dib"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 product-infors pr_sticky_su">
                                <div class="theiaStickySidebar">
                                    <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                                        <h1 class="product_title entry-title fs__16">{{$product->name}}</h1>
                                        
                                        <div class="flex wrap fl_between al_center price-review">
                                            <p class="price_range" id="price_ppr">
                                                <?php
                                                                    if($product->price < $product->original_price){
                                                                        ?>
                                                                <del><?php echo $product->original_price; ?> MMKS</del>
                                                                <ins><?php echo $product->price; ?> MMKS</ins>
                                                                <?php
                                                                    }else{
                                                                        ?>
                                                                <ins><?php echo $product->price; ?> MMKS</ins>
                                                                <?php
                                                                    }
                                                                ?>
                                            </p>
                                          
                                        </div>
                                        <div class="pr_short_des">
                                            <p class="mg__0">{!! $product->description !!}</p>
                                        </div>
                                        <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                            <div id="callBackVariant_ppr">
                                                <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                                                    <div class="swatch is-label kalles_swatch_js">
                                                        <h4 class="swatch__title">Size:
                                                            <span class="nt_name_current user_choose_js">{{ $product->size }}</span>
                                                        </h4>
                                                        
                                                    </div>
                                                </div>
                                                <div class="nt_cart_form variations_form variations_form_ppr">
                                                    <div class="variations_button in_flex column w__100 buy_qv_false">
                                                        <div class="flex wrap">
                                                            <div class="quantity pr mr__10 order-1 qty__true d-inline-block" id="sp_qty_ppr">
                                                                <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" name="quantity" value="1" >
                                                                <div class="qty tc fs__14">
                                                                    <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                                        <i class="facl facl-plus"></i></button>
                                                                    <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                                                        <i class="facl facl-minus"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="nt_add_w ts__03 pa order-3">
                                                                <a href="#" class="wishlistadd cb chp ttip_nt tooltip_top_left">
                                                                    <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                                                                </a>
                                                            </div>
                                                            <button type="submit" data-time="6000" data-ani="shake" class="single_add_to_cart_button button truncate w__100 mt__20 order-4 d-inline-block animated">
                                                                <span class="txt_add ">Add to cart</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="trust_seal_ppr" class="pr_trust_seal tl_md tc">

                                            <img class="img_tr_s1 lazyload w__100 max-width__330px" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%202244%20285%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="" data-srcset="assets/images/single-product/trust_img2.png"/>
                                        </div>
                                        {{-- <div class="extra-link mt__35 fwsb">
                                            <a class="ajax_pp_js cd chp mr__20" href="#" data-id="#popup-size-guide">Size Guide</a>
                                            <a class="ajax_pp_js cd chp mr__20" href="#" data-id="#popup-delivery-and-return">Delivery &amp; Return</a>
                                            <a class="ajax_pp_js cd chp" href="#" data-id="#popup-ask-a-question">Ask a Question</a>
                                        </div> --}}
                                        <div class="product_meta">
                                            <span class="sku_wrapper"><span class="cb">SKU:</span> <span class="sku value cg d-inline-block">{{$product->product_code}}</span></span>
                                            <span class="posted_in"><span class="cb">Categories:</span> 
                                            {{-- <a href="shop-filter-options.html" class="cg">All</a>, <a href="shop-filter-options.html" class="cg">Best seller</a>, <a href="shop-filter-options.html" class="cg">Bottom</a>, <a href="shop-filter-options.html" class="cg">Dress</a>, <a href="shop-filter-options.html" class="cg">New Arrival</a>, <a href="shop-filter-options.html" class="cg">Women</a> --}}
                                        </span>
                                            {{-- <span class="tagged_as"><span class="cb">Tags:</span> <a href="shop-filter-options.html" class="cg">Color Black</a>, <a href="shop-filter-options.html" class="cg">Color Grey</a>, <a href="shop-filter-options.html" class="cg">Color Pink</a>, <a href="shop-filter-options.html" class="cg">Price $7-$50</a>, <a href="shop-filter-options.html" class="cg">Size L</a>, <a href="shop-filter-options.html" class="cg">Size M</a>, <a href="shop-filter-options.html" class="cg">Size S</a></span> --}}
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!--product recommendations section-->
            <div class="kalles-section tp_se_cdt">
                <div class="related product-extra mt__60 lazyload">
                    <div class="container">
                        <div class="wrap_title des_title_1">
                            <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                                <span class="mr__10 ml__10">You may also like</span></h3>
                            <span class="dn tt_divider"><span></span><i class="dn clprfalse title_1 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title"></span>
                        </div>
                        <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                          @foreach($all_products as $ap)
                            @if($ap->category_id == $product->category_id)
                                @if($ap->id != $product->id)
                                <div
                                class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                <div class="product-inner pr">
                                    <div
                                        class="product-image pr oh lazyload">
                                        <span
                                            class="tc nt_labels pa pe_none cw">
                                            <?php
                                            if($ap->recommanded == "1"){
                    ?>
                                            <span class="nt_label new"
                                                style="width: 100%">Recommand</span>
                                            <?php
                                            }
                                        ?>
                    
                                            <?php
                    if($ap->best_selling == "1"){
                    ?>
                                            <span class="nt_label new"
                                                style="width: 100%">Best
                                                Selling</span>
                                            <?php
                    }
                    ?>
                    
                                        </span>
                                        <a class="d-block"
                                            href="/product/{{$ap->id}}">
                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                data-bgset="{{ asset('/storage/products/' . $ap->feature_image) }}">
                                            </div>
                                        </a>
                                        <div
                                            class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                data-bgset="{{ asset('/storage/products/' . $ap->feature_image) }}">
                                            </div>
                                        </div>
                                        <div class="nt_add_w ts__03 pa ">
                                            <a href="#"
                                                class="wishlistadd cb chp ttip_nt tooltip_right"><span
                                                    class="tt_txt">Add to
                                                    Wishlist</span><i
                                                    class="facl facl-heart-o"></i></a>
                                        </div>
                                        <div
                                            class="hover_button op__0 tc pa flex column ts__03">
                                            <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left"
                                                href="#"><span
                                                    class="tt_txt">Quick
                                                    view</span><i
                                                    class="iccl iccl-eye"></i><span>Quick
                                                    view</span></a>
                                            <a href="#"
                                                class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                                    class="tt_txt">Quick
                                                    Shop</span><i
                                                    class="iccl iccl-cart"></i><span>Quick
                                                    Shop</span></a>
                                        </div>
                                        <div
                                            class="product-attr pa ts__03 cw op__0 tc">
                                            <p
                                                class="truncate mg__0 w__100">
                                                {{ $ap->size }}</p>
                                        </div>
                                    </div>
                                    <div class="product-info mt__15">
                                        <h3
                                            class="product-title pr fs__14 mg__0 fwm">
                                            <a class="cd chp"
                                                href="product-detail-layout-01.html">
                                                {{ $ap->name }}</a>
                                        </h3>
                                        <span
                                            class="price dib mb__5">{{ $ap->price }}
                                            MMKS</span>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--end product recommendations section-->

           

        </div>
    </div>
    @endforeach
</div>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/jarallax.min.js')}}"></script>
<script src="{{asset('assets/js/packery.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
<script src="{{asset('assets/js/js-cookie.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe.min.js')}}"></script>
<script src="{{asset('assets/js/photoswipe-ui-default.min.js')}}"></script>
<script src="{{asset('assets/js/drift.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/resize-sensor.min.js')}}"></script>
<script src="{{asset('assets/js/theia-sticky-sidebar.min.js"')}}></script>
<script src="{{asset('assets/js/interface.js"')}}></script>
@endsection