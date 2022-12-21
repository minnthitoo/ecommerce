@extends('admin.layouts.admin_master')
@section('title', 'Shop Edit')
@section('body')
<main role="main" class="main-content">
    <!-- User Create Form -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Shop Edit </strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin#shop#edit') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">User ID ( <span style="color: red">@error('userId')
                                    {{$message}}
                                @enderror</span>)</label>
                                <input type="number" name="userId" value="{{ old('userId', $shop->user_id) }}" class="form-control" id="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Name ( <span style="color: red">@error('shopName')
                                    {{$message}}
                                @enderror</span>)</label>
                                <input type="text" name="shopName" value="{{ old('shopName', $shop->name) }}" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone ( <span style="color: red"> @error('shopPhone')
                                    {{$message}}
                                @enderror </span>)</label>
                                <input type="text" name="shopPhone" value="{{ old('shopPhone', $shop->phone) }}" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email ( <span style="color: red"> @error('shopEmail')
                                    {{$message}}
                                @enderror </span>)</label>
                                <input type="email" name="shopEmail" value="{{ old('shopEmail', $shop->email) }}" class="form-control" id="inputEmail5">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Industry_type ( <span style="color: red"> @error('shopIndustryType')
                                    {{$message}}
                                @enderror </span>)</label>
                                <input type="text" name="shopIndustryType" value="{{ old('shopInductryType') }}" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Region ID ( <span style="color: red"> @error('shopRegionId')
                                    {{$message}}
                                @enderror </span>)</label>
                                <input type="number" name="shopRegionId" value="{{ old('shopRegionId') }}" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="phone">Photo ( <span style="color: red"> @error('shopImage')
                                    {{$message}}
                                @enderror </span>)</label>
                                <input type="file" name="shopPhoto" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="phone">Address ( <span style="color: red"> @error('shopAddress')
                                    {{$message}}
                                @enderror </span>)</label>
                                <textarea name="shopAddress" id="" cols="30" rows="10" class="form-control">{{ old('shopAddress') }}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Latitude ( <span style="color: red"> @error('shopLatitude')
                                    {{$message}}
                                @enderror </span>)</label>
                                <input type="number" class="form-control" value="{{ old('shopLatitude') }}" name="shopLatitude" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Longitude ( <span style="color: red"> @error('shopLongitude')
                                    {{$message}}
                                @enderror </span>)</label>
                                <input type="number" name="shopLongitude" value="{{ old('shopLongitude') }}" class="form-control" id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="role">Role ( <span style="color: red"> @error('shopRole')
                                    {{$message}}
                                @enderror </span>)</label>
                                <select id="" class="form-control" name="shopRole">
                                    <option disabled selected>Choose Role ...</option>
                                    <option value="0"> Normal User </option>
                                    <option value="1"> Merchant </option>
                                    <option value="2"> System Admin </option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status ( <span style="color: red"> @error('shopStatus')
                                    {{$message}}
                                @enderror </span>)</label>
                                <select id="" class="form-control" name="shopStatus">
                                    <option disabled selected>Choose Status ...</option>
                                    <option value="0"> Draft </option>
                                    <option value="1"> Publish </option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Create </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div> <!-- /. col -->
    </div> <!-- /. end-section -->
</main> <!-- main -->
@endsection
