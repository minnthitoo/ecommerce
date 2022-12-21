@extends('website.layouts.master')

@section('title','Industry Detail')
@section('slidebar')
    @include('website.layouts.sidebar2')
@endsection
@section('content')

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach($category as $category)
                <a href="/category/detail/{{ $category->category_id }}" >
                <div class="col-lg-3">
                    <div class="categories__item set-bg" style="height: 200px" data-setbg="{{asset('categoryImage/')}}/{{$category->image}}">
                        <h5><span  style="color: white;background-color:black">{{ $category->title }}</span></h5>
                    </div>
                </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->
<hr>
@endsection
