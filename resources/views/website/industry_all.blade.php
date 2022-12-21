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
</div>
@endsection
