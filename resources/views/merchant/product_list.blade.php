@extends('merchant.layouts.master')
@section('title','Product List')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-30">
                    <table class="table table-borderless table-striped table-earning">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Product Code</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Shop</th>
                                <th>Decription</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Color</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $data=>$product)
                            <tr>
                                <td>{{ ++$data }}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->product_code}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>{{$product->subcategory_id}}</td>
                                <td>{{$product->shop_id}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->size}}</td>
                                <td>{{$product->qty}}</td>
                                <td>{{$product->color}}</td>
                                <td><button class="btn btn-sm btn-outline-warning dropdown-toggle more-horizontal"
                                        type="button" data-toggle="dropdown">
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">

                                        <a href="{{ route('merchant#product#edit',$product->id) }}"
                                            class="dropdown-item">Edit</a>

                                        <a class="dropdown-item text-danger"
                                            onclick="return alert('Are You Sure Want To Delete This Product')"
                                            href="{{route('merchant#product#delete',$product->id)}}">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
                <a href="{{route('merchant#product#create')}}" class="btn btn-dark">Create Product</a>
            </div>
        </div>
    </div>
</div>

@endsection
