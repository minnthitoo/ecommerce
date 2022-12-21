@extends('merchant.layouts.master')
@section('title','Product Create')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Product Create Form</div>
                        <div class="card-body">
                            {{-- <div class="card-title">
                                <h3 class="text-center title-2">Pay Invoice</h3>
                            </div> --}}

                            <form action="{{route('merchant#product#add')}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="pname" class="control-label mb-1">Product Name</label>
                                    <input id="pname" name="pname" type="text" value="{{old('pname')}}"
                                        class="form-control @error('pname') is-invalid @enderror">
                                    @error('pname')
                                    <div class="invalid-feedback">product name is required</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pcode" class="control-label mb-1">Product Code</label>
                                    <input id="pcode" name="pcode" type="text" value="{{old('pcode')}}"
                                        class="form-control @error('pcode') is-invalid @enderror">
                                    @error('pname')
                                    <div class="invalid-feedback">product code is required</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cat" class="control-label mb-1">Category</label>
                                            {{-- <select id="cat" name="cat" type="text" value="{{old('cat')}}"
                                            class="form-control @error('cat') is-invalid @enderror cc-exp">
                                            <option value="" selected disabled>--- Select Category ---</option>
                                            @foreach($category as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                            </select> --}}
                                            <select id="cat" name="cat" type="text" value="{{old('cat')}}"
                                                class="form-control @error('cat') is-invalid @enderror cc-exp">
                                                <option  selected disabled>--- Select Category ---</option>
                                                @foreach($category as $c)
                                                    <option value="{{ $c->id }}">{{ $c->title }}</option>
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
                                            {{-- <select id="subcategory" name="subcategory" value="{{old('subcategory')}}"
                                            class="form-control @error('subcategory') is-invalid @enderror">
                                            <option selected disabled>Choose...</option>
                                            @foreach($subcategory as $subcategory)
                                            <option value="{{ $subcategory->id }}"> {{$subcategory->title}}
                                            </option>
                                            @endforeach
                                            </select> --}}
                                            <select id="subcategory" name="subcategory" value="{{old('subcategory')}}"
                                                class="form-control @error('subcategory') is-invalid @enderror">
                                                <option selected disabled>-- Select SubCategory --</option>
                                                @foreach($subcategory as $sc)
                                                    <option value="{{ $sc->id }}">{{ $sc->title }}</option>
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
                                    <textarea id="desc" name="desc"
                                        class="form-control tinymce-editor  @error('desc') is-invalid @enderror cc-exp">{{old('desc')}}</textarea>
                                    @error('desc')
                                    <div class="invalid-feedback">description is required</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="o_price" class="control-label mb-1">Original Price</label>
                                            <input id="o_price" name="o_price" type="text" value="{{old('o_price')}}"
                                                class="form-control @error('o_price') is-invalid @enderror cc-exp" ">
                                            @error('desc')
                                            <div class=" invalid-feedback">original price is required
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" col-6">
                                    <div class="form-group">
                                        <label for="price" class="control-label mb-1">Price</label>
                                        <input id="price" name="price" type="text" class="form-control  cc-exp"
                                            value="{{old('price')}}">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="feature_image" class="control-label mb-1">Feature
                                        Image</label>
                                    <input id="feature_image" name="feature_image" type="file"
                                        class="form-control @error('feature_image') is-invalid @enderror cc-exp">
                                    @error('feature_image')
                                    <div class="invalid-feedback">feature image is required</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="images" class="control-label mb-1">Images</label>
                                    <input type="file" id="images" name="images[]" type="file" multiple accept="image/*"
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
                                    <input id="color" name="color" type="color" class="form-control cc-exp"
                                        value="{{old('color')}}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="size" class="control-label mb-1">Size</label>
                                    <input id="size" name="size" type="text" multiple class="form-control cc-exp"
                                        value="{{old('size')}}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="qty" class="control-label mb-1">Quantity</label>
                                    <input id="qty" name="qty" type="number" multiple value="{{old('qty')}}"
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
                                    <label for="rb" class="control-label mb-1">Recommanded Product</label>
                                    <input id="rb" name="rb" type="checkbox" value="{{old('rb')}}">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bs" class="control-label mb-1">Best Seller</label>
                                    <input id="bs" name="bs" type="checkbox" value="{{old('bs')}}">

                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-info">
                                Create
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
    $(document).ready(function(){
       
             /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#cat').on('change', function () {
                var idState = this.value;
                
                //console.log(idState);
                $("#subcategory").html('');
                $.ajax({
                    url: "{{url('merchant/api/product-category')}}",
                    type: "POST",
                    data: {
                        region_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#subcategory').html('<option value="">-- Select SubCategory --</option>');
                        $.each(res.subcategory, function (key, value) {
                            $("#subcategory").append('<option value="' + value
                                .id + '">' + value.title + '</option>');
                        });
                    }
                });
            });
        });
</script>

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
