@extends('merchant.layouts.master')
@section('title','Shop')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Edit Shop</h3>
                        </div>
                        <hr>
                        <form action="{{route('merchant#shop#edit')}}" method="post" novalidate="novalidate"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="shopId" value="{{Auth::user()->id}}">
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{ asset('/storage/shops/'.$shop->photo) }}" class="card-img-top mb-3">
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="latitude" class="control-label mb-1">Latitude</label>
                                        <input id="latitude" name="latitude" type="text"
                                            class="form-control @error('latitude') is-invalid @enderror"
                                            placeholder="Enter latitude..." value="{{old('latitude',$shop->latitude)}}">
                                        @error('latitude')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="longitude" class="control-label mb-1">Longitude </label>
                                        <input id="longitude" name="longitude" type="text"
                                            class="form-control @error('longitude') is-invalid @enderror"
                                            placeholder="Enter longitude..."
                                            value="{{old('longitude',$shop->longitude)}}">
                                        @error('longitude')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="messager" class="control-label mb-1">Messager_Link</label>
                                        <input id="messager" name="messager" type="text"
                                            class="form-control @error('messager') is-invalid @enderror"
                                            placeholder="Enter messager_link ..."
                                            value="{{old('messager',$shop->messager_link)}}">
                                        @error('messager')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="telegram" class="control-label mb-1">Telegram_Link</label>
                                        <input id="telegram" name="telegram" type="text"
                                            class="form-control @error('telegram') is-invalid @enderror"
                                            placeholder="Enter telegram_link ..."
                                            value="{{old('telegram',$shop->telegram_link)}}">
                                        @error('telegram')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook" class="control-label mb-1">Facebook_Link</label>
                                        <input id="facebook" name="facebook" type="text"
                                            class="form-control @error('facebook') is-invalid @enderror"
                                            placeholder="Enter facebook_link ..."
                                            value="{{old('facebook',$shop->facebook_link)}}">
                                        @error('facebook')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="viber" class="control-label mb-1">Viber_Link</label>
                                        <input id="viber" name="viber" type="text"
                                            class="form-control @error('viber') is-invalid @enderror"
                                            placeholder="Enter viber_link ..."
                                            value="{{old('viber',$shop->viber_link)}}">
                                        @error('viber')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="hotline" class="control-label mb-1">Hotline</label>
                                        <input id="hotline" name="hotline" type="text"
                                            class="form-control @error('hotline') is-invalid @enderror"
                                            placeholder="Enter hotline ..." value="{{old('hotline',$shop->hotlline)}}">
                                        @error('hotline')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="hour" class="control-label mb-1">Hour</label>
                                        <input id="hour" name="hour" type="text"
                                            class="form-control @error('hour') is-invalid @enderror"
                                            placeholder="Enter hour ..." value="{{old('hour',$shop->hour)}}">
                                        @error('hour')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label for="image" class="control-label mb-1">Image</label>
                                    <input id="image" name="photo" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="mt-3">
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    Edit Shop
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
