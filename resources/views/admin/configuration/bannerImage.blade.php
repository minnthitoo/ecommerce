@extends('admin.layouts.admin_master')
@section('title', 'Configuration')
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
                    <strong class="card-title"> Banner ADS  </strong>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" value="{{old('title')}}" name="title" class="form-control" placeholder="Title ..... ">
                            </div>
                            
                            <div class="col-md-6">
                                <input type="text" value="{{old('link')}}" name="link" class="form-control" placeholder="Link ..... ">
                            </div>

                        </div>
                        <br> <br>
                        <div class="row">

                            <div class="col-md-6">
                                <input type="number" value="{{old('sort')}}" name="sort" class="form-control" placeholder="1 - 100 ..... ">
                            </div>
                            
                            <div class="col-md-6">
                                <input type="file" name="image" required>
                                @error('image')
                                <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"> Create Ads </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
          
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
<script>
    $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [20, 50, 100, -1],
                [20, 50, 100, "All"]
            ]
        });
</script>
@endsection
