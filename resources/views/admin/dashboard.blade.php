@extends('admin.layouts.admin_master')
@section('title','Admin Dashbaord')
@section('head')

@endsection
@section('body')

<main role="main" class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-user-check text-white mb-0"></i>
                </span>
              </div>
              <div class="col pr-0">
                <p class="small text-muted mb-0">All Member Count</p>
                <span class="h3 mb-0 text-white">{{ $users->count() }}</span>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                </span>
              </div>
              <div class="col pr-0">
                <p class="small text-muted mb-0">All Shop Count</p>
                <span class="h3 mb-0">{{ $shops->count() }}</span>
                
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-layout text-white mb-0"></i>
                </span>
              </div>
              <div class="col">
                <p class="small text-muted mb-0">Banner ADS</p>
                <span class="h3 mb-0">{{$banners->count()}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-dollar-sign text-white mb-0"></i>
                </span>
              </div>
              <div class="col">
                <p class="small text-muted mb-0">Point</p>
                <span class="h3 mb-0">$80</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-box text-white mb-0"></i>
                </span>
              </div>
              <div class="col pr-0">
                <p class="small text-muted mb-0">All Industries Count</p>
                <span class="h3 mb-0 text-white">{{ $industries->count() }}</span>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                </span>
              </div>
              <div class="col pr-0">
                <p class="small text-muted mb-0">Category / Subcategory </p>
                <span class="h3 mb-0">{{ $categories->count() }} / {{ $subcategories->count() }}</span>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-filter text-white mb-0"></i>
                </span>
              </div>
              <div class="col">
                <p class="small text-muted mb-0">Product Count</p>
                <div class="row align-items-center no-gutters">
                  <div class="col-auto">
                    <span class="h3 mr-2 mb-0"> {{$products->count()}} </span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-3 mb-4">
        <div class="card shadow">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-3 text-center">
                <span class="circle circle-sm bg-primary">
                  <i class="fe fe-16 fe-activity text-white mb-0"></i>
                </span>
              </div>
              <div class="col">
                <p class="small text-muted mb-0">Order</p>
                <span class="h3 mb-0">$80</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Chart -->
    <div class="row">
      <div class="col-md-6">
        <div id="userChart" ></div>
      </div>
    </div>
    <!-- Chart -->
    <div class="container">
        <div class="my-4">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">User Table</h5>
              <p class="card-text">Last 10 Users Table</p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Create Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users_10 as $users_10_s)
                  <tr>
                    <td>{{$users_10_s->id}}</td>
                    <td>{{$users_10_s->name}}</td>
                    <td>{{$users_10_s->email}}</td>
                    <td>{{$users_10_s->phone}}</td>
                    <td>{{$users_10_s->role}}</td>
                    <td>{{$users_10_s->created_at->diffForHumans()}}</td>
                    <td> @if ($users_10_s->status == 0)
                      <span class="badge badge-pill badge-warning"> draft </span>
                      @else
                      <span class="badge badge-pill badge-success"> publish </span>
                      @endif
                  </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
  </div>
</main> <!-- main -->
<!-- Chart -->
<script type="text/javascript">
  
  var labels =  {{ Js::from($user_labels) }};
  var users =  {{ Js::from($user_data) }};

  const data = {
      labels: labels,
      datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
      }]
  };

  const config = {
      type: 'line',
      data: data,
      options: {}
  };

  const userChart = new Chart(
      document.getElementById('userChart'),
      config
  );

</script>
<!-- Chart -->
@endsection
