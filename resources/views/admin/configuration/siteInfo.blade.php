@extends('admin.layouts.admin_master')
@section('title', 'Configuration')
@section('body')
@include('admin.layouts.sucess_compontent')
<main role="main" class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title"> SiteInfo Edit Form </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('admin#config#siteInfo#update')}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row mb-5">
                            <div class="col-md-6">
                                <label>Logo</label>
                                <input type="file" name="logo" class="form-control" value="">
                            </div>
                            <div class="col-md-6">
                                <label>Tab_Logo</label>
                                <input type="file" name="tabLogo" class="form-control" value="">
                            </div>
                        </div>

                        <div class="form-row mb-5">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required
                                    value="{{$siteInfo->site_name}}">
                            </div>
                            <div class="col-md-6">
                                <label>Hot Line</label>
                                <input type="tel" name="hotLine" class="form-control" required
                                    value="{{$siteInfo->hot_line}}">
                            </div>
                        </div>

                        <div class="form-row mb-5">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required
                                    value="{{$siteInfo->site_email}}">
                            </div>
                            <div class="col-md-6">
                                <label>Facebook</label>
                                <input type="text" name="facebook" class="form-control" required
                                    value="{{$siteInfo->site_facebook}}">
                            </div>
                        </div>

                        <div class="form-row mb-5">
                            <div class="col-md-6">
                                <label>Youtube</label>
                                <input type="text" name="youtube" class="form-control" required
                                    value="{{$siteInfo->site_youtube}}">
                            </div>
                            <div class="col-md-6">
                                <label>Instagram</label>
                                <input type="text" name="instagram" class="form-control" required
                                    value="{{$siteInfo->site_ig}}">
                            </div>
                        </div>

                        <div class="form-row mb-5">
                            <div class="col-md-6">
                                <label>Tiktok</label>
                                <input type="text" name="tiktok" class="form-control" required
                                    value="{{$siteInfo->site_tiktop}}">
                            </div>
                            <div class="col-md-6">
                                <label>Opening_Closing</label>
                                <input type="text" name="opening_closing" class="form-control" required
                                    value="{{$siteInfo->opening_closeing}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Update SiteInfo </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div>
    </div>
</main> <!-- main -->
@endsection
