@extends('website.layout.master')
@section('title','All Industry')
@section('nav')
    @include("website.layout.nav_for_home")
@endsection
@section('content')
<br> 
<div class="container">
    <div class="row">
        @foreach($industry as $ia)
            <div class="col-md-4" style="border:1px solid black 20px;'">
                <a href="/industry/{{$ia->id}}">
                    <img src="{{ asset('/industryImage/' . $ia->image) }}"  style="height:200px;width:100%" class="text-center" alt="">
                    <p class="text-center" style="">{{$ia->title}}</p>
                </a>
            </div>
  
        @endforeach
    </div>
    <hr>


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
        
        
                    @foreach($industry_shops as $s2)
        
                    <div class="col-lg-4 col-md-4 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
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

                <br>
            </div>
        </div>
        

  
        
        {{-- @foreach ($products as $rp)
        <div
            class="col-lg-3 col-md-12 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
            <div class="product-inner pr">
                <div
                    class="product-image pr oh lazyload">
                    <span
                        class="tc nt_labels pa pe_none cw">
                        <?php
                        // if($rp->recommanded == "1"){
?>
                        <span class="nt_label new"
                            style="width: 100%">Recommand</span>
                        <?php
                        // }
                    ?>

                        <?php
// if($rp->best_selling == "1"){
?>
                        <span class="nt_label new"
                            style="width: 100%">Best
                            Selling</span>
                        <?php
// }
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
                            {{ $rp->size }}</p>
                    </div>
                </div>
                <div class="product-info mt__15">
                    <h3
                        class="product-title pr fs__14 mg__0 fwm">
                        <a class="cd chp"
                            href="product-detail-layout-01.html">
                            {{ $rp->name }}</a>
                    </h3>
                    <span
                        class="price dib mb__5">{{ $rp->price }}
                        MMKS</span>
                </div>
            </div>
        </div>
    @endforeach --}}
    

</div>
@endsection
