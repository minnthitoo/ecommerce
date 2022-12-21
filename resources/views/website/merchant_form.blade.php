@extends('website.layout.master')
@section('title','Merchant Form')
@section('nav')
    @include("website.layout.nav_for_home")
@endsection
@section('content')
<!--hero banner-->
<div class="kalles-section page_section_heading">
    <div class="page-head tc pr oh cat_bg_img page_head_">
        <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
            data-bgset="assets/images/shop/shop-banner.jpg"></div>
        <div class="container pr z_100">
            <h1 class="mb__5 cw">Become A Merchant</h1>
            <p class="mg__0">Follow your passion, and success will follow you</p>
        </div>
    </div>
</div>
<!--end hero banner-->

<!--page content-->
<div class="kalles-section container mb__50 cb">
    <div class="row fl_center">
        <div class="contact-form col-12 col-md-6 order-1 order-md-0">
            <form method="post" action="{{route('merchant#create#post')}}" class="contact-form">
                @csrf
                <h3 class="mb__20 mt__40 text-center">Merchant Form</h3>
                <p>
                    <label for="ct-name">Shop Name</label>
                    <input type="text" id="ct-name" name="shopname" value="{{old('shopname')}}">
                    @error('shopname')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
                </p>
                <p>
                    <label for="ct-name">Contact Person</label>
                    <input type="text" id="ct-name" name="contactperson" value="{{old('contactperson')}}">
                    @error('contactperson')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
                </p>
                <p>
                    <label for="ct-email">Your Email</label>
                    <input type="email" id="ct-email" name="email" value="{{old('email')}}">
                    @error('email')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
                </p>
                <p>
                    <label for="ct-phone">Your Phone Number</label>
                    <input type="tel" id="ct-phone" name="phone" value="{{old('phone')}}">
                    @error('phone')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
                </p>
                <p>
                    <label for="ct-message">Your Address</label>
                    <textarea row="5" id="ct-message" name="address">{{old('address')}}</textarea>
                    @error('address')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
                </p>
                <p>
                    <label for="type">Merchant Type</label>
                    <select name="type" class="text-muted">
                        <option value="" disabled selected>Choose Merchant Type ...</option>
                        <option value="a">AAA</option>
                        <option value="b">BBB</option>
                        <option value="c">CCC</option>
                    </select>
                </p>
                @error('type')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
                <input type="submit" class="button w__100" value="Submit">
            </form>
        </div>
    </div>
</div>
<!--end page content-->
@endsection
