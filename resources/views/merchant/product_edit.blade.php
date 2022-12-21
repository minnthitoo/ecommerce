@extends('merchant.layouts.master')
@section('title', 'Product Edit')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">Product Edit Form</div>
                            <div class="card-body">
                                {{-- <div class="card-title">
                                <h3 class="text-center title-2">Pay Invoice</h3>
                            </div> --}}
                                <form action="{{ route('merchant#product#update') }}" method="post" novalidate="novalidate"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="productId">
                                    <div class="form-group">
                                        <label for="pname" class="control-label mb-1">Product Name</label>
                                        <input id="pname" name="pname" type="text"
                                            value="{{ old('pname', $product->name) }}"
                                            class="form-control @error('pname') is-invalid @enderror">
                                        @error('pname')
                                            <div class="invalid-feedback">product name is required</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pcode" class="control-label mb-1">Product Code</label>
                                        <input id="pcode" name="pcode" type="text"
                                            value="{{ old('pcode', $product->product_code) }}"
                                            class="form-control @error('pcode') is-invalid @enderror">
                                        @error('pname')
                                            <div class="invalid-feedback">product code is required</div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cat" class="control-label mb-1">Category</label>
                                                <select id="cat" name="cat" type="text"
                                                    class="form-control @error('cat') is-invalid @enderror cc-exp">
                                                    <option value="" selected disabled>--- Select Category ---
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->category_id }}"
                                                            @if ($category->category_id == $product->category_id) selected @endif>
                                                            {{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('cat')
                                                    <div class="invalid-feedback">category is required</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="subcategory" class="control-label mb-1">Sub Category</label>
                                                <select id="subcategory" name="subcategory"
                                                    class="form-control @error('subcategory') is-invalid @enderror">
                                                    <option selected disabled>Choose...</option>
                                                    @foreach ($subcategories as $subcategory)
                                                        <option value="{{ $subcategory->subcategory_id }}"
                                                            @if ($subcategory->subcategory_id == $product->subcategory_id) selected @endif>
                                                            {{ $subcategory->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('subcategory')
                                                    <div class="invalid-feedback">subcategory is required</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="desc" class="control-label mb-1">Product description</label>
                                        <textarea id="desc" name="desc" class="form-control @error('desc') is-invalid @enderror cc-exp">{{ old('desc', $product->description) }}</textarea>
                                        @error('desc')
                                            <div class="invalid-feedback">description is required</div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="o_price" class="control-label mb-1">Original Price</label>
                                                <input id="o_price" name="o_price" type="text"
                                                    value="{{ old('o_price', $product->original_price) }}"
                                                    class="form-control @error('o_price') is-invalid @enderror cc-exp" ">
                                                                                        @error('desc')
        <div class=" invalid-feedback">
                                                            original price is required
                                                        </div>
    @enderror
                                            </div>
                                        </div>
                                        <div class=" col-6">
                                            <div class="form-group">
                                                <label for="price" class="control-label mb-1">Price</label>
                                                <input id="price" name="price" type="text" class="form-control  cc-exp"
                                                    value="{{ old('price', $product->price) }}">
                                            </div>
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="feature_image" class="control-label mb-1">Feature
                                                Image</label>
                                                 @if ($product->feature_image != '')
                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <img src="{{ asset('/storage/products/' . $product->feature_image) }}"
                                                            class="card-img-top" alt="">
                                                    </div>
                                                </div>
                                                @endif
                                                <input id="feature_image" name="feature_image" type="file"
                                                    class="form-control @error('feature_image') is-invalid @enderror cc-exp">
                                                @error('feature_image')
                                                    <div class="invalid-feedback">feature image is required</div>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                @php
                                                    $images = explode('|', $product->images);
                                                @endphp
                                                <label for="images" class="control-label mb-1">Images</label>
                                                <div class="d-flex flex-wrap">
                                                    @if (count($images) > 0)
                                                        @foreach ($images as $image)
                                                            <div class="col-6">
                                                                <div class="card">
                                                                    <div class="card-body text-center">
                                                                        <img src="{{ asset('storage/products/' . $image) }}"
                                                                            alt="" class="card-img-top mb-1"
                                                                            style="object-fit: cover">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>

                                                <input id="images" name="images[]" type="file" multiple
                                                    class="form-control @error('images') is-invalid @enderror cc-exp">
                                                @error('images')
                                                    <div class="invalid-feedback">image is required</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="color" class="control-label mb-1">Color</label>
                                                <input id="color" name="color" type="color"
                                                    class="form-control cc-exp"
                                                    value="{{ old('color', $product->color) }}">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="size" class="control-label mb-1">Size</label>
                                                <input id="size" name="size" type="text" multiple
                                                    class="form-control cc-exp"
                                                    value="{{ old('size', $product->size) }}">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="qty" class="control-label mb-1">Quantity</label>
                                                <input id="qty" name="qty" type="number" multiple
                                                    value="{{ old('qty', $product->qty) }}"
                                                    class="form-control @error('qty') is-invalid @enderror cc-exp">
                                                @error('qty')
                                                    <div class="invalid-feedback">quantity is required</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rb" class="control-label mb-1">Recommanded
                                                    Product</label>
                                                <input id="rb" name="rb" type="checkbox"
                                                    value="{{ old('rb', $product->recommanded) }}">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bs" class="control-label mb-1">Best Seller</label>
                                                <input id="bs" name="bs" type="checkbox"
                                                    value="{{ old('bs', $product->best_selling) }}">

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-info">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            alert(1);
            /*------------------------------------------
                --------------------------------------------
                State Dropdown Change Event
                --------------------------------------------
                --------------------------------------------*/
            $('#cat').on('change', function() {
                var idState = this.value;
                //console.log(idState);
                $("#subcategory").html('');
                $.ajax({
                    url: "{{ url('merchant/api/fetch-category') }}",
                    type: "POST",
                    data: {
                        region_id: idState,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#subcategory').html(
                            '<option value="">-- Select SubCategory --</option>');
                        $.each(res.cities, function(key, value) {
                            $("#subcategory").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
