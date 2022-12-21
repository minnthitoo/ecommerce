<header id="ntheader" class="ntheader header_8 h_icon_la">
    <div class="ntheader_wrapper pr z_200">
        <div id="kalles-section-header_top" class="kalles-section">
            <div class="h__top bgbl pt__10 pb__10 fs__12 flex fl_center al_center">
                <div class="container">
                    <div class="row al_center">
                        <div class="col-lg-3 col-12 tc tl_lg col-md-12 dn_false_1024">
                            <div class="nt-social">
                                <?php
                                    if($siteinfo->site_facebook != "#"){
                                        ?>
                                <a href="<?php echo $siteinfo->site_facebook; ?>"
                                    class="facebook cb ttip_nt tooltip_bottom_right">
                                    <span class="tt_txt">Follow on Facebook</span><i
                                        class="facl facl-facebook"></i>
                                </a>
                                <?php
                                    }

                                    if($siteinfo->site_ig != "#"){
                                        ?>
                                <a href="<?php echo $siteinfo->site_ig; ?>"
                                    class="instagram cb ttip_nt tooltip_bottom_right">
                                    <span class="tt_txt">Follow on Instagram</span><i
                                        class="facl facl-instagram"></i>
                                </a>
                                <?php
                                    }


                                ?>


                                {{-- <a href="#" class="twitter cb ttip_nt tooltip_bottom_right">
                                    <span class="tt_txt">Follow on Twitter</span><i
                                        class="facl facl-twitter"></i>
                                </a>

                                <a href="#" class="linkedin cb ttip_nt tooltip_bottom_right">
                                    <span class="tt_txt">Follow on Linkedin</span><i
                                        class="facl facl-linkedin"></i>
                                </a>
                                <a href="#" class="pinterest cb ttip_nt tooltip_bottom_right">
                                    <span class="tt_txt">Follow on Pinterest</span><i
                                        class="facl facl-pinterest"></i>
                                </a> --}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 tc col-md-12 dn_false_1024">
                            <div class="header-text">
                                {{-- <span class="cr fwm">20%</span> use code “SUMMER20”!
                                <a href="/shop"><span class="cr fwm">Shop Now</span> </a> --}}
                                {{ $toptext->text }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="kalles-section-header_8" class="kalles-section sp_header_mid">
            <div class="header__mid">
                <div class="container">
                    <div class="row al_center css_h_se">
                        <div class="col-md-4 col-3 dn_lg">
                            <a href="#" data-id="#nt_menu_canvas"
                                class="push_side push-menu-btn lh__1 flex al_center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16"
                                    viewBox="0 0 30 16">
                                    <rect width="30" height="1.5"></rect>
                                    <rect y="7" width="20" height="1.5"></rect>
                                    <rect y="14" width="30" height="1.5"></rect>
                                </svg>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 tc tl_lg">
                            <div class="branding ts__05 lh__1">
                                <a class="dib" href="index.html">
                                    <img class="w__95 logo_normal dn db_lg" src="assets/images/svg/kalles.svg"
                                        alt="Kalles Template">
                                    <img class="w__100 logo_sticky dn" src="assets/images/svg/kalles.svg"
                                        alt="Kalles Template">
                                    <img class="w__100 logo_mobile dn_lg" src="assets/images/svg/kalles.svg"
                                        alt="Kalles Template">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 dn db_lg cl_h_search atc_opended_rs">
                            <form action="#" method="get" class="h_search_frm js_frm_search pr" role="search">
                                <div class="row no-gutters al_center">
                                    {{-- <div class="frm_search_cat col-auto">
                                        <select name="product_type">
                                            <option value="*">All Categories</option>
                                            <option value="Acessories">Acessories</option>
                                            <option value="Bag">Bag</option>
                                            <option value="Camera">Camera</option>
                                            <option value="Decor">Decor</option>
                                            <option value="Earphones">Earphones</option>
                                            <option value="Electric">Electric</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Headphone">Headphone</option>
                                            <option value="Men">Men</option>
                                            <option value="Shoes">Shoes</option>
                                            <option value="Speaker">Speaker</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Women">Women</option>
                                        </select>
                                    </div> --}}
                                    {{-- <div class="col-auto h_space_search"></div> --}}
                                    <div class="frm_search_input pr oh col">
                                        <input class="h_search_ip js_iput_search" autocomplete="off" type="text"
                                            name="q" placeholder="I’m shopping for...." value="" />
                                    </div>
                                    <div class="frm_search_cat col-auto">
                                        <button class="h_search_btn js_btn_search" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            <div class="pr">
                                <div class="mini_cart_content fixcl-scroll widget">
                                    <div class="fixcl-scroll-content product_list_widget">
                                        <div class="ld_bar_search"></div>
                                        <div class="skeleton_wrap skeleton_js dn">
                                            <div class="row mb__10 pb__10">
                                                <div class="col-auto widget_img_pr">
                                                    <div class="skeleton_img"></div>
                                                </div>
                                                <div class="col widget_if_pr">
                                                    <div class="skeleton_txt1"></div>
                                                    <div class="skeleton_txt2"></div>
                                                </div>
                                            </div>
                                            <div class="row mb__10 pb__10">
                                                <div class="col-auto widget_img_pr">
                                                    <div class="skeleton_img"></div>
                                                </div>
                                                <div class="col widget_if_pr">
                                                    <div class="skeleton_txt1"></div>
                                                    <div class="skeleton_txt2"></div>
                                                </div>
                                            </div>
                                            <div class="row mb__10 pb__10">
                                                <div class="col-auto widget_img_pr">
                                                    <div class="skeleton_img"></div>
                                                </div>
                                                <div class="col widget_if_pr">
                                                    <div class="skeleton_txt1"></div>
                                                    <div class="skeleton_txt2"></div>
                                                </div>
                                            </div>
                                            <div class="row mb__10 pb__10">
                                                <div class="col-auto widget_img_pr">
                                                    <div class="skeleton_img"></div>
                                                </div>
                                                <div class="col widget_if_pr">
                                                    <div class="skeleton_txt1"></div>
                                                    <div class="skeleton_txt2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js_prs_search">
                                            @foreach ($recommaneded_product as $rp)
                                            <div class="row mb__10 pb__10">
                                                <div class="col widget_img_pr">
                                                    <a class="db pr oh" href="/product/{{$rp->id}}">
                                                        <img src="data:image/svg+xml,{{ asset('/storage/products/' . $rp->feature_image) }}"
                                                            data-src="{{ asset('/storage/products/' . $rp->feature_image) }}"
                                                            class="w__100 lazyload lz_op_ef"
                                                            alt="{{ $rp->name }}" />
                                                    </a>
                                                </div>
                                                <div class="col widget_if_pr">
                                                    <a class="product-title db"
                                                        href="/product/{{$rp->id}}">{{ $rp->name }}</a>
                                                    <?php
                                                            if($rp->price < $rp->original_price){
                                                            ?>
                                                    <del><?php echo $rp->original_price; ?> MMKS</del>
                                                    <ins><?php echo $rp->price; ?> MMKS</ins>
                                                    <?php
                                                            }else{
                                                                ?>
                                                    <ins><?php echo $rp->price; ?> MMKS</ins>
                                                    <?php
                                                                }
                                                            ?>
                                                </div>
                                            </div>
                                            {{-- for whitelist  --}}
                                            <input type="hidden" value="{{ $rp->id }}" name="productId"
                                                id="productId">
                                            @auth
                                            <input type="hidden" value="{{ Auth::user()->id }}" name="userId"
                                                id="userId">
                                            @endauth
                                            @endforeach
                                            <a href="/products" class="btn fwsb detail_link">View
                                                All({{--{{ $products->count() }}--}})
                                                <i class="facl facl-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-3 tr">
                            <div class="nt_action in_flex al_center cart_des_1">
                                <a class="icon_search push_side cb chp" data-id="#nt_search_canvas" href="#"><i
                                        class="las la-search"></i></a>
                                @guest
                                <div class="my-account ts__05 pr dn db_md">
                                    <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas"><i
                                            class="las la-user"></i></a>
                                </div>
                                @endguest

                                {{-- @guest
                                <a href="#" class="push_side cb chp ttip_nt tooltip_right"
                                    data-id="#nt_login_canvas">
                                    <span class="tt_txt">Add to Whitelist</span><i
                                        class="facl facl-heart-o"></i>
                                </a>
                                @endguest --}}

                                @auth
                                <div style="background-color: black;color:white;padding:10px;border-radius:20px"
                                    class="my-account ts__05 pr dn db_md">
                                    <a class="cb chp db push_side" style="color: white"
                                        href="/userAnalysis">{{ Auth::user()->name }}</a>
                                </div>

                                {{-- <a href="{{route('website#whitelist')}}"
                                    class="wishlistadd cb chp ttip_nt tooltip_right">
                                    <span class="tt_txt">Add to Whitelist</span><i
                                        class="facl facl-heart-o"></i>
                                </a> --}}
                                @endauth

                                {{-- <a class="icon_like cb chp pr dn db_md js_link_wis" href="#">
                                            <i class="lar la-heart pr"><span
                                                    class="op__0 ts_op pa tcount bgb br__50 cw tc">5</span></i>
                                        </a> --}}
                                {{-- <div class="icon_cart pr">
                                    <a class="push_side pr cb chp db" href="{{ route('website#shopping#cart') }}">
                                    <a class="cb chp db" href="{{ route('website#shopping#cart') }}" data-id="#nt_login_canvas">
                                        <i class="las la-shopping-cart pr">
                                            @auth
                                            <span class="op__0 ts_op pa tcount bgb br__50 cw tc">
                                                {{ count($cart) }}
                                            </span>
                                            @endauth
                                        </i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__bot border_false dn db_lg">
                <div class="container">
                    <div class="row no-gutters al_center">
                        <div class="col-auto ha8_cat">
                            <h5 class="mg__0 fs__14 flex al_center">
                                <i class="las la-bars mr__5 fs__18"></i><span class="dib truncate">SORT BY
                                    INDUSTRY</span>
                            </h5>
                            <div class="h_cat_nav pa op__0 mh_js_cat">
                                <ul class="lazy_menu lazy_h_cat lazyload">
                                    @foreach ($industries as $industry)
                                    <li class="cat_menu-0">
                                        <a class="lh__1 flex al_center pr"
                                            href="/industry/{{ $industry->id }}">{{ $industry->title }}</a>
                                    </li>
                                    @endforeach
                                    <li class="cat_menu-0">
                                        <a class="lh__1 flex al_center pr" href="/industry/all">View All
                                            Industry</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col ha8_nav">
                            <nav class="nt_navigation tl hover_side_up nav_arrow_false">
                                <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">
                                    <li
                                        class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_default pos_default">
                                        <a class="lh__1 flex al_center pr" href="/">Home</a>

                                    </li>

                                    {{-- <li
                                        class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                        <a class="lh__1 flex al_center pr"
                                            href="product-detail-layout-01.html">Product</a>
                                        <div class="cus sub-menu">
                                            <div class="container megamenu-content-1050px">
                                                <div class="row lazy_menu lazyload"
                                                    data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                    <div class="type_mn_link menu-item sub-column-item col-3">
                                                        <a href="product-detail-layout-01.html">PRODUCT
                                                            LAYOUT</a>
                                                        <ul class="sub-column not_tt_mn">
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Product
                                                                    Detail Layout 1</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-02.html">Product
                                                                    Detail Layout 2</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-03.html">Product
                                                                    Detail Layout 3</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-thumb-bottom.html">Product
                                                                    thumb at bottom</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-thumb-right.html">Product
                                                                    thumb on right</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-without-thumbnail.html">Product
                                                                    without thumbnail</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-left-sidebar.html">Left
                                                                    Sidebar</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-right-sidebar.html">Right
                                                                    sidebar</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-sidebar-full-height.html">Sidebar
                                                                    Full Height</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-tab-accordion.html">Product
                                                                    Tab Accordions</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-full-width-atc.html">Product
                                                                    Full Width ATC</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-full-width.html">Product
                                                                    full width layout</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-advance-product-type.html">Advance
                                                                    Product Type
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">Hot</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="type_mn_link menu-item sub-column-item col-3">
                                                        <a href="product-detail-layout-01.html">PRODUCT
                                                            DETAIL</a>
                                                        <ul class="sub-column not_tt_mn">
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-external-affiliate.html">External/Affiliate
                                                                    Product</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-simple-product.html">Simple
                                                                    product</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Variable
                                                                    product</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-grouped-product.html">Grouped
                                                                    Product
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">hot</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-02.html">Inner
                                                                    Zoom #1</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">External
                                                                    Zoom</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-03.html">Inner
                                                                    Zoom #2</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">PhotoSwipe
                                                                    Popup</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-description-with-product.html">Description
                                                                    with product</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-description-with-instagram-shop.html">Description
                                                                    with instagram shop</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-product-video.html">Product
                                                                    video
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">hot</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-3d-ar-models.html">Product
                                                                    3D, AR models
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">hot</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="type_mn_link menu-item sub-column-item col-3">
                                                        <a href="product-detail-layout-01.html">PRODUCT
                                                            SWATCH</a>
                                                        <ul class="sub-column not_tt_mn">
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Product
                                                                    Color Swatch</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-swatch-color.html">Product
                                                                    Gallery Swatch</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-swatch-color.html">Product
                                                                    Images Swatch</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-swatch-color.html">Swatch
                                                                    Color</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Swatch
                                                                    Color Circle</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-swatch-radio.html">Swatch
                                                                    Radio</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-swatch-radio-color.html">Swatch
                                                                    Radio Color</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-swatch-rectangle.html">Swatch
                                                                    Rectangle</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-swatch-rectangle-color.html">Swatch
                                                                    Rectangle Color</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-swatch-simple.html">Swatch
                                                                    Simple</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-swatch-simple-color.html">Swatch
                                                                    Simple Color</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="type_mn_link menu-item sub-column-item col-3">
                                                        <a href="product-detail-layout-01.html">PRODUCT
                                                            FEATURES</a>
                                                        <ul class="sub-column not_tt_mn">
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-frequently-bought-together.html">Frequently
                                                                    Bought Together
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">Hot</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-pre-orders.html">Product
                                                                    pre-orders</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-tab-accordion.html">Product
                                                                    Upsell Features
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">Hot</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-description-with-lookbook.html">Description
                                                                    with Lookbook
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">Hot</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-back-in-stock-notification.html">Back
                                                                    in stock notification</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a
                                                                    href="product-detail-variant-images-grouped.html">Variant
                                                                    Images Grouped
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">Hot</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Size
                                                                    Guide HTML</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Delivery
                                                                    &amp; Return</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Ask a
                                                                    Question</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-product-sticky.html">Product
                                                                    sticky</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-360-viewer.html">360°
                                                                    product viewer</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-swatch-radio.html">Dynamic
                                                                    checkout buttons
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">Hot</span>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="product-detail-layout-01.html">Sticky
                                                                    add to cart
                                                                    <span
                                                                        class="lbc_nav lb_menu_hot ml__5">Hot</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                    <li
                                        class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                        <a class="lh__1 flex al_center pr kalles-lbl__nav-sale"
                                            href="/products">Products

                                        </a>
                                        <div class="cus sub-menu">
                                            <div class="container megamenu-content-1200px">
                                                <div class="row lazy_menu lazyload"
                                                    data-jspackery='{ "itemSelector": ".sub-column-item","gutter": 0,"percentPosition": true,"originLeft": true }'>
                                                    <div class="type_mn_link2 menu-item sub-column-item col-2">
                                                        @foreach ($categories as $category)
                                                        <a
                                                            href="/category/{{ $category->id }}">{{ $category->title }}</a>
                                                        @endforeach
                                                        {{-- <a href="shop-full-width-layout.html">Accessories</a>
                                                        <a href="shop-1600px-layout.html">Footwear</a>
                                                        <a href="shop-filter-options.html">Women</a>
                                                        <a href="shop-left-sidebar.html">T-Shirt</a>
                                                        <a href="shop-right-sidebar.html">Shoes</a>
                                                        <a href="shop-masonry-layout.html">Denim</a>
                                                        <a href="shop-1600px-layout.html">Dress</a>
                                                        <a href="shop-filter-options.html">Men</a> --}}
                                                    </div>
                                                    <div class="type_mn_pr menu-item sub-column-item col-10">
                                                        <div class="prs_nav js_carousel nt_slider products nt_products_holder row al_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 flickity-enabled is-draggable"
                                                            data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": 1,"prevNextButtons": 1,"percentPosition": 1,"pageDots": 0, "autoPlay" : 0, "pauseAutoPlayOnHover" : 1, "rightToLeft": false }'>

                                                            @foreach ($recommaneded_product as $rp)
                                                            <div
                                                                class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                                                <div class="product-inner pr">
                                                                    <div class="product-image pr oh lazyload">
                                                                        <span
                                                                            class="tc nt_labels pa pe_none cw">
                                                                            <?php
                                                                            if($rp->recommanded == "1"){
                                                                            ?>
                                                                            <span class="nt_label new"
                                                                                style="width: 100%">Recommand</span>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                            <?php
                                                                            if($rp->best_selling == "1"){
                                                                            ?>
                                                                            <span class="nt_label new"
                                                                                style="width: 100%">Best
                                                                                Selling</span>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </span>
                                                                        <a class="d-block"
                                                                            href="/product/{{$rp->id}}">
                                                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                                                data-bgset="{{ asset('/storage/products/' . $rp->feature_image) }}">
                                                                            </div>
                                                                        </a>
                                                                        <div
                                                                            class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                                                data-bgset="{{ asset('/storage/products/' . $rp->feature_image) }}">
                                                                            </div>
                                                                        </div>
                                                                        @guest
                                                                        <div class="nt_add_w ts__03 pa">
                                                                            <a href="#"
                                                                                data-id="#nt_login_canvas"
                                                                                class="wishlistadd cb chp push_side"><span
                                                                                    class="tt_txt">Add to
                                                                                    Wishlist</span><i
                                                                                    class="facl facl-heart-o"></i></a>
                                                                        </div>
                                                                        @endguest
                                                                        @auth
                                                                        <div class="nt_add_w ts__03 pa ">
                                                                            <a href="#"
                                                                                class="addtoWhiteList wishlistadd cb chp ttip_nt tooltip_right"><span
                                                                                    class="tt_txt">Add to
                                                                                    Wishlist</span><i
                                                                                    class="facl facl-heart-o"></i></a>
                                                                        </div>
                                                                        @endauth
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
                                                                            <p class="truncate mg__0 w__100">
                                                                                {{ $rp->size }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-info mt__15">
                                                                        <h3
                                                                            class="product-title pr fs__14 mg__0 fwm">
                                                                            <a class="cd chp"
                                                                                href="/product/{{$rp->id}}">
                                                                                {{ $rp->name }}</a>
                                                                        </h3>
                                                                        <span
                                                                            class="price dib mb__5">{{ $rp->price }}
                                                                            MMKS</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- <li class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                    <a class="lh__1 flex al_center pr" href="#">Lookbook</a>
                                    <div class="sub-menu">
                                        <div class="lazy_menu lazyload">
                                            <div class="menu-item">
                                                <a href="home-lookbook.html">Lookbook Slider</a></div>
                                            <div class="menu-item">
                                                <a href="home-lookbook-collection.html">Lookbook Section</a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="home-default.html">Lookbook instagram</a></div>
                                            <div class="menu-item">
                                                <a href="product-detail-description-with-lookbook.html">Lookbook in product</a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="blog-post-with-lookbook.html">Lookbook in blog post</a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="single-portfolio-with-lookbook.html">Lookbook in portfolio post</a>
                                            </div>
                                            <div class="menu-item">
                                                <a href="lookbook-in-page.html">Lookbook in page</a></div>
                                        </div>
                                    </div>
                                    </li> -->
                                    <li
                                        class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                        <a class="lh__1 flex al_center pr"
                                            href="{{ route('website#shop') }}">Shop</a>

                                    </li>
                                    <li
                                        class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                        <a class="lh__1 flex al_center pr"
                                            href="{{ route('merchant#form') }}">Become
                                            Merchant</a>
                                    </li>
                                    <li
                                        class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                        <a class="lh__1 flex al_center pr"
                                            href="{{ route('website#shop') }}">About
                                            Us</a>

                                    </li>
                                    {{-- <li
                                        class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                        <a class="lh__1 flex al_center pr"
                                            href="{{ route('website#shop') }}">Contact
                                            Us</a>

                                    </li> --}}
                                    <li
                                    class="type_dropdown menu-item has-children menu_has_offsets menu_right pos_right">
                                    <a class="lh__1 flex al_center pr"
                                        href="{{ route('website#shop') }}">Leader Board
                                        </a>

                                </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-3 fs__12 ha8_txt tr">
                            <a href="{{ $siteinfo->site_email }}" class="ttip_nt tooltip_top mr__10">
                                <span class="tt_txt">{{ $siteinfo->site_email }}</span>
                                <i class="las la-envelope fs__14 mr__5"></i><span>contact</span>
                            </a>
                            <a class="ttip_nt tooltip_top mr__10">
                                <span class="tt_txt">{{ $siteinfo->opening_closeing }}</span>
                                <i
                                    class="las la-clock fs__14 mr__5"></i><span>{{ $siteinfo->opening_closeing }}</span>
                            </a>
                            <a href="tel:{{ $siteinfo->hot_line }}" class="ttip_nt tooltip_top">
                                <span class="tt_txt">Phone:{{ $siteinfo->hot_line }}</span>
                                <i class="las la-phone fs__14 mr__5"></i><span>{{ $siteinfo->hot_line }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>