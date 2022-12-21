@extends('merchant.layouts.master')
@section('title','Cupon Details')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Cupon Details</h3>
                        </div>
                        <hr>
                        <form novalidate="novalidate">
                            <div class="form-group">
                                <label for="name" class="control-label mb-1">Name</label>
                                <input id="name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name..."
                                    disabled value="{{ $cupon->name }}">
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
                                    placeholder="Enter Cupon_code..." disabled value="{{ $cupon->cupon_code }}">
                                @error('cupon_code')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label mb-1">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="3"
                                    name="description" placeholder="Enter Description..."
                                    disabled>{{ $cupon->description }}</textarea>
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
                                        <input id="type" name="type" type="text"
                                            class="form-control @error('type') is-invalid @enderror"
                                            placeholder="Enter Type..." disabled value="{{$cupon->type}}">
                                        @error('type')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-6">
                                    <label for="shop" class="control-label mb-1">Shop</label>
                                    <select name="shop" id="shop" disabled
                                        class="form-control @error('shop') is-invalid @enderror">
                                        @foreach ($shops as $shop)
                                        <option value="{{$shop->id}}" @if($shop->id == $cupon->shop_id) selected @endif
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
                                            name="amount" placeholder="Enter Amount..." disabled value="{{$cupon->amount}}">
                                        @error('amount')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                           
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="startDate" class="control-label mb-1">Start Date</label>
                                        <input id="startDate" name="startDate" type="text"
                                            class="form-control @error('startDate') is-invalid @enderror "
                                            placeholder="DD / MM / YY" disabled value="{{$cupon->start_date}}">
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
                                        <input id="endDate" name="endDate" type="text"
                                            class="form-control @error('endDate') is-invalid @enderror"
                                            placeholder="DD / MM / YY" disabled value="{{$cupon->end_date}}" />
                                        @error('endDate')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
