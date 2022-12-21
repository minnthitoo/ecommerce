@extends('admin.layouts.admin_master')
@section('title','Industry')
@section('body')
<style>
    table,
    thead,
    tr,
    th,
    td,
    label {
        color: white !important;
    }
</style>
@include('admin.layouts.sucess_compontent')
<main role="main" class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title"> Industry Create Form </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('admin#industry#create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Industry Name</label>
                                <input type="text" name="industryName" class="form-control"
                                    value="{{old('industryName')}}" placeholder="Enter Industry Name...">
                            </div>
                            @error('industryName')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group col-md-12">
                                <label>Industry Image</label>
                                <input type="file" name="industryImage" class="d-block">
                            </div>
                            @error('industryImage')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary"> Create Industry </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="mb-2 page-title">Industry table</h4>
                <p class="card-text"></p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                {{ $industries->links() }}
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Industry Name</th>
                                            <th>Update</th>
                                            <th></th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($industries as $data => $item)
                                        <tr>
                                            <td>{{++$data}}</td>
                                            <form action="{{route('admin#industry#update')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="industryId" value="{{$item->id}}">
                                                <td>
                                                    <img @if ($item->image == null)
                                                    src="{{ asset('defaultImage/default.jpg') }}"
                                                    @else
                                                    src="{{ asset('industryImage/'.$item->image) }}"
                                                    @endif width="150"
                                                    class="rounded">
                                                    <input type="file" name="industryImage" class="d-block">
                                                </td>
                                                <td><input type="text" name="industryName"
                                                        value="{{old('industryName',$item->title)}}"
                                                        class="form-control" required>
                                                </td>
                                                <td><button class="btn btn-warning"
                                                        onclick="return confirm('Are You Sure To Update ?')">Update</button>
                                                </td>
                                            </form>
                                            <td>
                                            <td>
                                                <a href="{{route('admin#industry#delete',$item->id)}}"
                                                    onclick="return confirm('Are You Sure To Delete ?')"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div> <!-- end section -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
@endsection
