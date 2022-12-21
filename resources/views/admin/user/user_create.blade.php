@extends('admin.layouts.admin_master')
@section('title', 'Admin Dashbaord')
@section('body')
<main role="main" class="main-content">
    <!-- User Create Form -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">User Create Form </strong>
                </div>
                <div class="card-body">
                    <form action="{{route('admin#user#create')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name ( <span style="color: red"> * </span>)</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone ( <span style="color: red"> * </span>)</label>
                                <input type="number" name="phone" value="{{old('phone')}}" class="form-control"
                                    id="phone">
                                @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email ( <span style="color: red"> * </span>)</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control"
                                    id="inputEmail5">
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password ( <span style="color: red"> * </span>)</label>
                                <input type="password" name="password" class="form-control" id="inputPassword5">
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="role">Role ( <span style="color: red"> * </span>)</label>
                                <select id="role" class="form-control" name="role">
                                    <option disabled selected>Choose Role ...</option>
                                    <option value="user"> Normal User </option>
                                    <option value="merchant"> Merchant </option>
                                    <option value="admin"> System Admin </option>
                                    <option value="staff"> Employee </option>
                                </select>
                                @error('role')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status ( <span style="color: red"> * </span>)</label>
                                <select id="status" class="form-control" name="status">
                                    <option disabled selected>Choose Status ...</option>
                                    <option value="0"> Draft </option>
                                    <option value="1"> Publish </option>
                                </select>
                                @error('status')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState5" name="region" class="form-control">
                                    <option selected disabled>Choose...</option>
                                    @foreach($regions as $region)
                                    <option value="{{ $region->id }}"> {{$region->name}} </option>
                                    @endforeach
                                </select>
                                @error('region')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <select id="inputCity" name="city" class="form-control">
                                    <option selected disabled>Choose...</option>
                                    @foreach($citys as $city)
                                    <option value="{{ $city->id }}"> {{$city->name}} </option>
                                    @endforeach
                                </select>
                                @error('city')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputZip">Zip</label>
                                <input type="text" name="zip" value="{{old('zip')}}" class="form-control"
                                    id="inputZip5">
                                @error('zip')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <textarea type="text" name="address" class="form-control" id="inputAddress5"
                                placeholder="1234 Main St">{{old('address')}}</textarea>
                            @error('address')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary"> Create </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div> <!-- /. col -->
    </div> <!-- /. end-section -->
</main> <!-- main -->

<script>
    $(document).ready(function(){
             /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#inputState5').on('change', function () {
                var idState = this.value;
                //console.log(idState);
                $("#inputCity").html('');
                $.ajax({
                    url: "{{url('/admin/api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        region_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#inputCity').html('<option value="">-- Select City --</option>');
                        $.each(res.cities, function (key, value) {
                            $("#inputCity").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
</script>

@endsection
