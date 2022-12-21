@extends('admin.layouts.admin_master')
@section('title', 'Admin Dashbaord')
@section('body')
<main role="main" class="main-content">
    <!-- User Create Form -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Shop Create </strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin#shop#create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">User Name ( <span style="color: red"> * </span> )</label>
                                <select required name="name" class="form-control" id="name">
                                    <option disabled selected> --- SELECT USER --- </option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red">@error('name')
                                    {{$message}}
                                    @enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Shop Name ( <span style="color: red"> * </span>)</label>
                                <input type="text" name="shopName" value="{{ old('shopName') }}" class="form-control"
                                    id="phone">
                                <span style="color: red">@error('shopName')
                                    {{$message}}
                                    @enderror</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Shop Phone ( <span style="color: red"> * </span> )</label>
                                <input type="text" name="shopPhone" value="{{ old('shopPhone') }}" class="form-control"
                                    id="phone">
                                <span style="color: red"> @error('shopPhone')
                                    {{$message}}
                                    @enderror </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Shop Email ( <span style="color: red"> * </span>)</label>
                                <input type="email" name="shopEmail" value="{{ old('shopEmail') }}" class="form-control"
                                    id="inputEmail5">
                                <span style="color: red"> @error('shopEmail')
                                    {{$message}}
                                    @enderror </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="shopIndustryType">Industry Type ( <span style="color: red"> * </span>
                                    )</label>
                                <select required id="shopIndustryType" name="shopIndustryType" class="form-control">
                                    <option disabled selected> --- SELECT INDUSTRY --- </option>
                                    @foreach ($industrys as $industry)
                                    <option value="{{$industry->id}}">{{$industry->title}}</option>
                                    @endforeach
                                </select>
                                <span style="color: red"> @error('shopIndustryType')
                                    {{$message}}
                                    @enderror </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status ( <span style="color: red"> * </span> )</label>
                                <select required id="" class="form-control" name="shopStatus">
                                    <option disabled selected>Choose Status ...</option>
                                    <option value="0"> Draft </option>
                                    <option value="1"> Publish </option>
                                </select>
                                <span style="color: red"> @error('shopStatus')
                                    {{$message}}
                                    @enderror </span>
                            </div>

                            {{-- <div class="form-group col-md-6">
                                <label for="phone">Region ID (  <span style="color: red"> * </span>)</label>
                                <input type="number" name="shopRegionId" value="{{ old('shopRegionId') }}"
                            class="form-control" id="phone">
                            <span style="color: red"> @error('shopRegionId')
                                {{$message}}
                                @enderror </span>
                        </div> --}}
                        <div class="form-group col-md-12">
                            <label for="phone">Logo </label>
                            <input type="file" name="shopPhoto" class="form-control" id="">
                            <span style="color: red"> @error('shopImage')
                                {{$message}}
                                @enderror </span>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="phone">Address ( <span style="color: red"> * </span> )</label>
                            <textarea name="shopAddress" id="" cols="30" rows="10"
                                class="form-control">{{ old('shopAddress') }}</textarea>
                            <span style="color: red"> @error('shopAddress')
                                {{$message}}
                                @enderror </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Latitude </label>
                            <input type="number" class="form-control" value="{{ old('shopLatitude') }}"
                                name="shopLatitude" id="">
                            <span style="color: red"> @error('shopLatitude')
                                {{$message}}
                                @enderror </span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Longitude </label>
                            <input type="number" name="shopLongitude" value="{{ old('shopLongitude') }}"
                                class="form-control" id="">
                            <span style="color: red"> @error('shopLongitude')
                                {{$message}}
                                @enderror </span>
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
