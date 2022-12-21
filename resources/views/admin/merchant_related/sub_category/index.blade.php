@extends('admin.layouts.admin_master')
@section('title','Sub-Category')
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
                    <strong class="card-title"> Sub-Category Create Form </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('admin#subcategory#create')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Sub-Category Name</label>
                                <input type="text" name="subCategoryName" class="form-control"
                                    value="{{old('subCategoryName')}}" placeholder="Enter Sub-Category Name...">
                            </div>
                            @error('subCategoryName')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group col-md-12">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    <option disabled selected>Choose Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group col-md-12">
                                <label>Industry</label>
                                <select name="industry" class="form-control">
                                    <option disabled selected>Choose Industry</option>
                                    @foreach ($industries as $industry)
                                    <option value="{{$industry->id}}">{{$industry->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('industry')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary"> Create SubCategory </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="mb-2 page-title">Sub-Category table</h4>
                <p class="card-text"></p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                {{ $subcategories->links() }}
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sub-Category Name</th>
                                            <th>Category</th>
                                            <th>Industry</th>
                                            <th>Update</th>
                                            <th></th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($subcategories as $data => $item)
                                        <tr>
                                            <td>{{++$data}}</td>
                                            <form action="{{route('admin#subcategory#update')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="subcategoryId"
                                                    value="{{$item->id}}">
                                                <td><input type="text" name="subCategoryName"
                                                        value="{{old('subCategoryName',$item->title)}}"
                                                        class="form-control" required>
                                                </td>
                                                <td>
                                                    <select name="category" class="form-control">
                                                        @foreach ($categories as $category)
                                                        <option value="{{$category->id}}" @if ($item->id ==
                                                            $category->id) selected @endif>
                                                            {{$category->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="industry" class="form-control">
                                                        @foreach ($industries as $industry)
                                                        <option value="{{$industry->id}}" @if ($item->id == $industry->id) selected @endif>
                                                            {{$industry->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td><button class="btn btn-warning"
                                                        onclick="return confirm('Are You Sure To Update ?')">Update</button>
                                                </td>
                                            </form>
                                            <td>
                                            <td>
                                                <a href="{{route('admin#subcategory#delete',$item->id)}}"
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
