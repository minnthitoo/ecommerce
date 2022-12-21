@extends('merchant.layouts.master')
@section('title','Shop Banner')
@section('content')
<div class="section__content section__content--p30">
    @include('merchant.layouts.success_component')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Create Shop Banner</h3>
                        </div>
                        <hr>
                        <form action="{{route('merchant#shopbanner#create')}}" method="post" novalidate="novalidate"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="shopId" value="{{Auth::id()}}">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="text" class="control-label mb-1">Text</label>
                                    <input id="text" name="text" type="text"
                                        class="form-control @error('text') is-invalid @enderror"
                                        placeholder="Enter Text..." value="{{old('text')}}">
                                    @error('text')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="link" class="control-label mb-1">Link</label>
                                    <input id="link" name="link" type="text"
                                        class="form-control @error('link') is-invalid @enderror"
                                        placeholder="Enter link..." value="{{old('link')}}">
                                    @error('link')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="sort" class="control-label mb-1">Sort</label>
                                    <input type="text" class="form-control @error('sort') is-invalid @enderror"
                                        name="sort" placeholder="Enter Sort..." value="{{old('sort')}}">
                                    @error('sort')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="image" class="control-label mb-1">image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" placeholder="Enter Image..." value="{{old('image')}}">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div>
                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            Create Shop Banner
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="mb-2 page-title">Banner table</h4>
                <p class="card-text"></p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Text</th>
                                            <th>Link</th>
                                            <th>Sort</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banners as $num => $item)
                                        <tr>
                                            <form action="{{route('merchant#shopbanner#update')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <td>{{ ++$num }}</td>
                                                <td>
                                                    <img src="{{asset('shopbannerimages/'.$item->image)}}" width="150"
                                                        class="border shadow">
                                                    <input type="file" name="image" class="form-control">
                                                </td>
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <input type="text" name="shopId" value="{{Auth::user()->id}}">
                                                <td>
                                                    <input type="text" class="form-control" name="text"
                                                        value="{{$item->text}}" required>
                                                </td>
                                                <td>
                                                    <input type="link" class="form-control" name="link"
                                                        value="{{$item->link}}" required>
                                                </td>
                                                <td>
                                                    <input type="sort" class="form-control" name="sort"
                                                        value="{{$item->sort}}" required>
                                                </td>
                                                <td><button type="submit" class="btn btn-warning"
                                                        onclick="return confirm('Are you sure to Update ?')">Update</button>
                                                </td>
                                            </form>
                                            <td>
                                                <form class="form-inline"
                                                    action="{{route('merchant#shopbanner#delete')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$item->id}}">
                                                    <button onclick="return confirm('Are You Sure To Delete ?')"
                                                        type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
                {{ $banners->links() }}
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</div>
@endsection
