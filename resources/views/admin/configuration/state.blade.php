@extends('admin.layouts.admin_master')
@section('title', 'Configuration')
@section('body')
    @include('admin.layouts.sucess_compontent')
    <main role="main" class="main-content">
        <!-- User Create Form -->
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title"> Region Create Form </strong>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="region">Region ( <span style="color: red"> * </span>)</label>
                                    <input type="text" name="region" value="{{ old('region') }}" class="form-control"
                                        id="region">
                                </div>
                                @error('region')
                                    <p class="text text-danger">{{ $message }}</p>
                                @enderror
                            </div>




                            <button type="submit" class="btn btn-primary"> Create Region </button>
                        </form>
                    </div> <!-- /. card-body -->
                </div> <!-- /. card -->
                <div class="col-md-12 ">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Region Table</h5>
                            <p class="card-text"></p>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Upgrade</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regions as $number => $region)
                                        <tr>
                                            <form action="{{route('admin#config#state#update')}}" class="form-inline" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $region->id }}">
                                                <td>{{ ++$number }}</td>
                                                <td> <input class="form-control" type="text" name="region"
                                                        value="{{ $region->name }}" required></td>
                                                <td> <button type="submit" class="btn btn-warning">Upgrade</button>
                                            </form>
                                            </td>
                                            <td>
                                                <form class="form-inline" action="{{ route('admin#config#state#delete') }}"
                                                    method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $region->id }}">
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
            </div> <!-- /. col -->
        </div> <!-- /. end-section -->
    </main> <!-- main -->
@endsection
