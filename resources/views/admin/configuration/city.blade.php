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
                    <strong class="card-title"> City Create Form </strong>
                </div>
                <div class="card-body">
                    <form method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="region">Region ( <span style="color: red"> * </span>)</label>
                                <select name="region" class="form-control" id="region" required>
                                    <option disabled selected> Choose Region ... </option>
                                    @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('region')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group col-md-12">
                                <label for="city">City ( <span style="color: red"> * </span>)</label>
                                <input type="text" name="city" value="{{ old('city') }}" class="form-control" id="city">
                            </div>
                            @error('city')
                            <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary"> Create City </button>
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="mb-2 page-title">City table</h4>
                <p class="card-text"></p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Region</th>
                                            <th>City</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($citys as $num => $city)
                                        <tr>
                                            <form action="{{route('admin#config#city#update')}}" class="form-inline"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $city->id }}">
                                                <td>{{ ++$num }}</td>
                                                <td>
                                                    <select name="update_region" class="form-control" id="region"
                                                        required>
                                                        <option value=" {{ $city->region->id }} " selected>
                                                            {{ $city->region->name }} </option>
                                                        @foreach ($regions as $region)
                                                        <option value="{{ $region->id }}">{{ $region->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('update_region')
                                                    <br>
                                                    <p class="text text-danger">{{ $message }}</p>
                                                    @enderror

                                                </td>
                                                <td> <input required type="text" value="{{ $city->name }}"
                                                        name="update_city" class="form-control">
                                                    @error('update_city')
                                                    <br>
                                                    <p class="text text-danger">{{ $message }}</p>
                                                    @enderror
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-warning">Upgrade</button>
                                                </td>
                                            </form>
                                            <td>
                                                <form class="form-inline"
                                                    action="{{ route('admin#config#city#delete') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $city->id }}">
                                                    <button onclick="return confirm('Are You Sure To Delete ?')"
                                                        type="submit" class="btn btn-danger">Delete</button>
                                                </form>
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
