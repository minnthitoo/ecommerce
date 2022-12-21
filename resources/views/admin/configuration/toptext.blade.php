@extends('admin.layouts.admin_master')
@section('title', 'Configuration')
@section('body')
@include('admin.layouts.sucess_compontent')
<main role="main" class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title"> TopText Edit Form </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('admin#config#toptext#update')}}" method="POST">
                        @csrf
                        <label class="form-label">TopText</label>
                        <input type="text" name="text" class="form-control" value="{{$TopText->text}}" required>

                        <input type="submit" class="btn btn-success mt-3" value="Update">
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div>
    </div>
</main> <!-- main -->
@endsection
