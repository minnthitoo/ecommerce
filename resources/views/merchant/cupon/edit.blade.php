@extends('merchant.layouts.master')
@section('title','Cupon Create')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Edit Cupon</h3>
                        </div>
                        <hr>
                        <form action="{{route('merchant#cupon#edit')}}" method="post" novalidate="novalidate">
                            @csrf
                            <input type="hidden" name="shop_id" value="{{$cupon->shop_id}}">
                            <input type="hidden" name="cuponId" value="{{$cupon->id}}">
                            <div class="form-group">
                                <label for="name" class="control-label mb-1">Name</label>
                                <input id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name..."
                                    value="{{old('name',$cupon->name)}}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group has-success">
                                <label for="cupon_code" class="control-label mb-1">Cupon_code</label>
                                <input id="cupon_code" name="cupon_code" type="text"
                                    class="form-control @error('cupon_code') is-invalid @enderror"
                                    placeholder="Enter Cupon_code..." value="{{old('cupon_code',$cupon->cupon_code)}}">
                                @error('cupon_code')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label mb-1">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="3"
                                    name="description"
                                    placeholder="Enter Description...">{{old('description',$cupon->description)}}</textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="type" class="control-label mb-1">Type</label>
                                        <select id="type" name="type" 
                                            class="form-control @error('type') is-invalid @enderror"
                                            placeholder="Enter Type..." value="{{old('type')}}">
                                            <option selected value="{{old('type',$cupon->type)}}">{{old('type',$cupon->type)}}</option>
                                            
                                            <option value="holiday">Holiday Coupon</option>
                                            <option value="shop_birthday">Shop Birthday Coupon</option>
                                            <option value="news_years">New Years Cupon </option>
                                        </select>
                                        @error('type')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-6">
                                    <div class="form-group">
                                        <label for="type" class="control-label mb-1">Type</label>
                                        <input id="type" name="type" type="text"
                                            class="form-control @error('type') is-invalid @enderror"
                                            placeholder="Enter Type..." value="{{old('type',$cupon->type)}}">
                                        @error('type')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="col-6">
                                    <label for="shop" class="control-label mb-1">Shop</label>
                                    <select name="shop" id="shop"
                                        class="form-control @error('shop') is-invalid @enderror">
                                        <option value="">Choose Shop</option>
                                        @foreach ($shops as $shop)
                                        <option value="{{$shop->id}}" @if($cupon->shop_id == $shop->id) selected @endif
                                            >{{$shop->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('shop')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="amount" class="control-label mb-1">Amount</label>
                                        <input type="text" class="form-control @error('amount') is-invalid @enderror"
                                            name="amount" placeholder="Enter Amount..."
                                            value="{{old('amount',$cupon->amount)}}">
                                        @error('amount')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                        <small class="text-warning">*Please double check the amount</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="startDate" class="control-label mb-1">Start Date</label>
                                        <input id="startDate" name="startDate" type="date"
                                            class="form-control @error('startDate') is-invalid @enderror "
                                            placeholder="DD / MM / YY" value="{{old('startDate',$cupon->start_date)}}">
                                        @error('startDate')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="endDate" class="control-label mb-1">End Date</label>
                                    <div class="input-group">
                                        <input id="endDate" name="endDate" type="date"
                                            class="form-control @error('endDate') is-invalid @enderror"
                                            placeholder="DD / MM / YY" value="{{old('endDate',$cupon->end_date)}}" />
                                        @error('endDate')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror

                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    Update Cupon
                                </button>
                                <a href="{{route('merchant#cupon#list')}}" type="submit"
                                    class="btn btn-lg btn-dark btn-block">
                                    Back To Cupon List
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
