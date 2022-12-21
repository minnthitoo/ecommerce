@extends('admin.layouts.admin_master')
@section('title','User | Details')
@section('body')
<main class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header">Details</h3>
                <form action="{{route('admin#user#update')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="hidden" name="userId" value="{{$user->id}}">
                                <label for="name">Name ( <span style="color: red"> * </span>)</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" value="{{old('name',$user->name)}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Email ( <span style="color: red"> * </span>)</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="inputEmail5"
                                    value="{{old('email',$user->email)}}">
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone">Phone ( <span style="color: red"> * </span>)</label>
                                <input type="number" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" id="phone"
                                    value="{{old('phone',$user->phone)}}">
                                @error('phone')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        @if ($user->role == 'user')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="role">Role ( <span style="color: red"> * </span>)</label>
                                <select name="role" class="form-control @error('role') is-invalid @enderror">
                                    <option value="user" @if($user->role == 'user') selected @endif>Normal User</option>
                                    <option value="merchant" @if($user->role == 'merchant') selected @endif>Merchant
                                    </option>
                                    <option value="admin" @if($user->role == 'admin') selected @endif>System Admin
                                    </option>
                                    <option value="staff" @if($user->role == 'staff') selected @endif>Employee</option>
                                </select>
                                @error('role')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Status ( <span style="color: red"> * </span>)</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="0" @if($user->status == 0) selected @endif >Draft</option>
                                    <option value="1" @if($user->status == 0) selected @endif >Publish</option>
                                </select>
                                @error('role')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label>Customer Type ( <span style="color: red"> * </span>)</label>
                                @if ($user->new_customer == 1)
                                <input type="text" name="customer_type" style="background:transparent"
                                    class="form-control text-muted" value="New Customer" disabled />
                                @else
                                <input type="text" name="customer_type" style="background:transparent"
                                    class="form-control text-success" value="Loyal Customer" disabled />
                                @endif
                            </div>
                        </div>
                        @else
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="role">Role ( <span style="color: red"> * </span>)</label>
                                <select name="role" class="form-control @error('city') is-invalid @enderror">
                                    <option value="user" @if($user->role == 'user') selected @endif>Normal User</option>
                                    <option value="merchant" @if($user->role == 'merchant') selected @endif>Merchant
                                    </option>
                                    <option value="admin" @if($user->role == 'admin') selected @endif>System Admin
                                    </option>
                                    <option value="staff" @if($user->role == 'staff') selected @endif>Employee</option>
                                </select>
                                @error('role')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status ( <span style="color: red"> * </span>)</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="0" @if($user->status == 0) selected @endif >Draft</option>
                                    <option value="1" @if($user->status == 0) selected @endif >Publish</option>
                                </select>
                                @error('status')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        @endif
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState5" name="region"
                                    class="form-control @error('region') is-invalid @enderror">
                                    <option selected disabled>Choose...</option>
                                    @foreach($regions as $region)
                                    <option value="{{ $region->id }}" @if($user->region == $region->id) selected @endif>
                                        {{$region->name}} </option>
                                    @endforeach
                                </select>
                                @error('region')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <select id="inputCity" name="city"
                                    class="form-control @error('city') is-invalid @enderror">
                                    <option selected disabled>Choose...</option>
                                    @foreach($cities as $city)
                                    <option value="{{ $city->id }}" @if($user->city == $city->id) selected @endif>
                                        {{$city->name}} </option>
                                    @endforeach
                                </select>
                                @error('city')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Zip</label>
                                <input type="text" name="zip" class="form-control @error('zip') is-invalid @enderror"
                                    id="inputZip5" value="{{old('zip',$user->zip)}}">
                                @error('zip')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <textarea type="text" name="address"
                                class="form-control @error('address') is-invalid @enderror" id="inputAddress5"
                                placeholder="1234 Main St">{{ old('address',$user->address) }}</textarea>
                            @error('address')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4 d-flex justify-content-between">
                            <a href="{{route('admin#user#table')}}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

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
@stop
