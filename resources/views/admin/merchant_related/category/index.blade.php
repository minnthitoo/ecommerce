@extends('admin.layouts.admin_master')
@section('title','Category')
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
                    <strong class="card-title"> Category Create Form </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('admin#category#create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Category Name</label>
                                <input type="text" name="categoryName" class="form-control"
                                    value="{{old('categoryName')}}" placeholder="Enter category Name...">
                            </div>
                            @error('categoryName')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group col-md-12">
                                <label>Category Image</label>
                                <input type="file" name="categoryImage" class="d-block">
                            </div>

                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea name="description"  class="form-control tinymce-editor" cols="30" rows="5"
                                    placeholder="Enter Descrption...">{{old('description')}}</textarea>
                            </div>
                            @error('description')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror

                            <div class="form-group col-md-12">
                                <label>Industry Name</label>
                                <select name="industryName" class="form-control">
                                    <option value="">Choose Industry</option>
                                    @foreach ($industries as $industry)
                                    <option value="{{$industry->id}}">{{$industry->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('industryName')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary"> Create category </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="mb-2 page-title">Category table</h4>
                <p class="card-text"></p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                {{ $categories->links() }}
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Industry</th>
                                            <th>Update</th>
                                            <th></th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categories as $data => $item)
                                        <tr>
                                            <td>{{++$data}}</td>
                                            <form action="{{route('admin#category#update')}}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="categoryId" value="{{$item->id}}">
                                                <td>
                                                    <img @if ($item->image == null)
                                                    src="{{ asset('defaultImage/default.jpg') }}"
                                                    @else
                                                    src="{{ asset('categoryImage/'.$item->image) }}"
                                                    @endif width="150"
                                                    class="rounded">
                                                    <input type="file" name="categoryImage" class="d-block">
                                                </td>
                                                <td><input type="text" name="categoryName"
                                                        value="{{old('categoryName',$item->title)}}"
                                                        class="form-control" required>
                                                </td>
                                                <td><textarea name="description" id="" cols="30" rows="4"
                                                        class="text-muted" style="background: transparent;"
                                                        required>{{old('description',$item->description)}}</textarea>
                                                </td>
                                                <td>
                                                    <select name="industryName" class="form-control">
                                                        @foreach ($industries as $industry)
                                                        <option value="{{$industry->id}}" @if ($item->id ==
                                                            $industry->id) selected
                                                            @endif>
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
                                                <a href="{{route('admin#category#delete',$item->id)}}"
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

<script type="text/javascript">
            tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            // toolbar: 'undo redo | formatselect | ' +
            //     'bold italic backcolor | alignleft aligncenter ' +
            //     'alignright alignjustify | bullist numlist outdent indent | ' +
            //     'removeformat | help',
            //content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>

@endsection
