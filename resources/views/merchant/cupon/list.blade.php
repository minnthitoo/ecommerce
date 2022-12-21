@extends('merchant.layouts.master')
@section('title','Cupon List')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Cupon Code</th>
                                <th>Type</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cupons as $cupon)
                            <tr>
                                <td>{{$cupon->name}}</td>
                                <td>{{$cupon->cupon_code}}</td>
                                <td>{{$cupon->type}}</td>
                                <td>{{$cupon->start_date}}</td>
                                <td>{{$cupon->end_date}}</td>
                                <td>{{$cupon->amount}}</td>
                                <td><button class="btn btn-sm btn-outline-warning dropdown-toggle more-horizontal"
                                        type="button" data-toggle="dropdown">
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a href="{{route('merchant#cupon#details',$cupon->id)}}"
                                            class="dropdown-item">Details</a>

                                        <a href="{{route('merchant#cupon#editPage',$cupon->id)}}"
                                            class="dropdown-item">Edit</a>

                                        <a class="dropdown-item text-danger"
                                            onclick="return alert('Are You Sure Want To Delete This Cupon')"
                                            href="{{route('merchant#cupon#delete',$cupon->id)}}">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$cupons->links()}}
                </div>
                <a href="{{route('merchant#cupon#createPage')}}" class="btn btn-dark">Create Cupon</a>
            </div>
        </div>
    </div>
</div>

@endsection
