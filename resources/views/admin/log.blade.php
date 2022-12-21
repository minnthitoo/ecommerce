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
  
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="mb-2 page-title">Action Log table</h4>
                <p class="card-text"></p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                {{ $logs->links() }}
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($logs as $num => $log)
                                        <tr>
                                            <td>{{ ++$num  }}</td>
                                            <td> <a >{{ $log->user->name }}</a> ( {{ $log->user->email }} ) </td>
                                            <td>{{ $log->action }}</td>
                                            <td>{{ $log->created_at }}</td>
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
