@extends('admin.layouts.admin_master')
@section('title', 'Admin Dashbaord')
@section('body')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="mb-2 page-title">Users Table</h2>

                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                {{ $users->links() }}
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            @if (Auth::user()->role == 'admin')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $data => $user)
                                        <tr>
                                            <td>{{ ++$data }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td> @if ($user->status == 0)
                                                draft
                                                @else
                                                publish
                                                @endif
                                            </td>

                                            @if (Auth::user()->role == 'admin')
                                            <td><button
                                                    class="btn btn-sm btn-outline-warning dropdown-toggle more-horizontal"
                                                    type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">


                                                    <a href="{{route('admin#user#details',$user->id)}}"
                                                        class="dropdown-item">Details</a>


                                                    {{-- <button type="button" class="dropdown-item" data-toggle="modal"
                                                        data-target=".modalEdit_{{$user->id}}">Edit</button> --}}

                                                    @if (Auth::user()->id != $user->id)
                                                    <a class="dropdown-item text-danger"
                                                        onclick="return alert('Are You Sure Want To Delete This User')"
                                                        href="{{route('admin#user#delete',$user->id)}}">Delete</a>
                                                    @endif
                                                </div>
                                            </td>
                                            @endif
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



    {{-- user edit form  --}}
    {{-- @foreach ($users as $user) --}}
    {{-- <div class="modal modalEdit_{{$user->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>User Edit Form</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin#user#update',$user->id)}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name ( <span style="color: red"> * </span>)</label>
                            <input type="text" name="name" value="{{old('name',$user->name)}}" class="form-control"
                                id="name" required>
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email ( <span style="color: red"> * </span>)</label>
                            <input type="email" name="email" value="{{old('email',$user->email)}}" class="form-control"
                                id="inputEmail5" required>
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password ( <span style="color: red"> * </span>)</label>
                            <input type="text" name="password" class="form-control" id="password"
                                value="{{old('password',$user->password)}}">
                            @error('password')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone ( <span style="color: red"> * </span>)</label>
                            <input type="number" name="phone" value="{{old('phone',$user->phone)}}" class="form-control"
                                id="phone" required>
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="role">Role ( <span style="color: red"> * </span>)</label>
                            <select id="role" class="form-control" name="role" required>
                                <option disabled selected>Choose Role ...</option>
                                <option value="user" @if ($user->role == 'user') selected @endif> Normal User
                                </option>
                                <option value="merchant" @if ($user->role == 'merchant') selected @endif> Merchant
                                </option>
                                <option value="admin" @if ($user->role == 'admin') selected @endif> System Admin
                                </option>
                                <option value="staff" @if ($user->role == 'staff') selected @endif> Employee
                                </option>
                            </select>
                            @error('role')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Status ( <span style="color: red"> * </span>)</label>
                            <select id="status" class="form-control" name="status" required>
                                <option disabled selected>Choose Status ...</option>
                                <option value="0" @if ($user->status == 0) selected @endif > Draft </option>
                                <option value="1" @if ($user->status == 1) selected @endif> Publish </option>
                            </select>
                            @error('status')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState5" name="region" class="form-control" required>
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
                            <select id="inputCity" name="city" class="form-control" required>
                                <option selected disabled>Choose...</option>
                                @foreach($cities as $city)
                                <option value="{{ $city->id }}"> {{$city->name}} </option>
                                @endforeach
                            </select>
                            @error('city')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputZip">Zip</label>
                            <input type="text" name="zip" value="{{old('zip',$user->zip)}}" class="form-control"
                                id="inputZip5" required>
                            @error('zip')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea type="text" name="address" class="form-control" id="inputAddress5"
                            placeholder="1234 Main St" required>{{old('address',$user->address)}}</textarea>
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary"> Update </button>
                </form>
            </div>
        </div>
    </div>
    </div> --}}
    {{-- @endforeach --}}

    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group list-group-flush my-n3">
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-box fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Package has uploaded successfull</strong></small>
                                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-download fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Widgets are updated successfull</strong></small>
                                    <div class="my-0 text-muted small">Just create new layout Index, form, table
                                    </div>
                                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-inbox fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Notifications have been sent</strong></small>
                                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo
                                    </div>
                                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                        <div class="list-group-item bg-transparent">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="fe fe-link fe-24"></span>
                                </div>
                                <div class="col">
                                    <small><strong>Link was attached to menu</strong></small>
                                    <div class="my-0 text-muted small">New layout has been attached to the menu
                                    </div>
                                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                </div>
                            </div>
                        </div> <!-- / .row -->
                    </div> <!-- / .list-group -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear
                        All</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5">
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-success justify-content-center">
                                <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Control area</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Activity</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Droplet</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Upload</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-users fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Users</p>
                        </div>
                        <div class="col-6 text-center">
                            <div class="squircle bg-primary justify-content-center">
                                <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                            </div>
                            <p>Settings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> <!-- main -->

@endsection
