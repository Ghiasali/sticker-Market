
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard ')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/toastr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">

@endsection
@section('page-style')
  {{-- Page css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/dashboard-ecommerce.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">

@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header">
          <div>
            <h4 class="card-title">Statistics</h4>
            <span class="card-subtitle text-muted">Commercial networks and enterprises</span>
          </div>
          <div class="d-flex d-flex align-items-center mt-1 mt-sm-0">
            <div class="mr-1">
              <h5 class="font-weight-bold mb-25">$8,582</h5>
              <span class="bullet bullet-primary bullet-sm align-middle cursor-pointer"></span>
              <span class="align-middle cursor-pointer">Asia</span>
            </div>
            <div class="mr-1">
              <h5 class="font-weight-bold mb-25">$7,397</h5>
              <span class="bullet bullet-danger bullet-sm align-middle cursor-pointer"></span>
              <span class="align-middle cursor-pointer">Europe</span>
            </div>
            <div>
              <h5 class="font-weight-bold mb-25">$4,786</h5>
              <span class="bullet bullet-sm align-middle cursor-pointer" style="background-color: #ffe800"></span>
              <span class="align-middle cursor-pointer">Africa</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <canvas class="line-chart-ex chartjs" data-height="450"></canvas>
        </div>
      </div>
    </div>
    <div class="col-3">
      
        <div class="card mb-5">
          <div class="card-header">
            <h4 class="card-title">Sessions By Device</h4>
          </div>
          <div class="card-body mb-5">
            <canvas class="doughnut-chart-ex chartjs mt-1" data-height="275"></canvas>
            <div class="d-flex justify-content-between mt-3 mb-1">
              <div class="d-flex align-items-center">
                <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                <span class="font-weight-bold ml-75 mr-25">Desktop</span>
                <span>- 80%</span>
              </div>
              <div>
                <span>2%</span>
                <i data-feather="arrow-up" class="text-success"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between mb-1">
              <div class="d-flex align-items-center">
                <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                <span class="font-weight-bold ml-75 mr-25">Mobile</span>
                <span>- 10%</span>
              </div>
              <div>
                <span>8%</span>
                <i data-feather="arrow-up" class="text-success"></i>
              </div>
            </div>
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-center">
                <i data-feather="tablet" class="font-medium-2 text-success"></i>
                <span class="font-weight-bold ml-75 mr-25">Tablet</span>
                <span>- 10%</span>
              </div>
              <div>
                <span>-5%</span>
                <i data-feather="arrow-down" class="text-danger"></i>
              </div>
            </div>
          </div>
        </div>
     
    </div>
    <div class="col-lg-3 col-md-6 col-12 ">
      <div class="card card-transaction mb-4" >
        <div class="card-header">
          <h4 class="card-title">Transactions</h4>
          <div class="dropdown chart-dropdown mb-5">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body mb-5" >
          <div class="transaction-item">
            <div class="media d-flex">
              <div class="avatar bg-light-primary rounded">
                <div class="avatar-content">
                  <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body ">
                <h6 class="transaction-title">Wallet</h6>
                <small>Starbucks</small>
              </div>
            </div>
            <div class="font-weight-bolder text-danger">- $74</div>
          </div>
          <div class="transaction-item">
            <div class="media d-flex">
              <div class="avatar bg-light-success rounded">
                <div class="avatar-content">
                  <i data-feather="check" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Bank Transfer</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="font-weight-bolder text-success">+ $480</div>
          </div>
          <div class="transaction-item">
            <div class="media d-flex">
              <div class="avatar bg-light-danger rounded">
                <div class="avatar-content">
                  <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Paypal</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="font-weight-bolder text-success">+ $590</div>
          </div>
          <div class="transaction-item">
            <div class="media d-flex">
              <div class="avatar bg-light-warning rounded">
                <div class="avatar-content">
                  <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="media-body">
                <h6 class="transaction-title">Mastercard</h6>
                <small>Ordered Food</small>
              </div>
            </div>
            <div class="font-weight-bolder text-danger">- $23</div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-6 col-md-6 ">
      <div class="card text-left">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
          <h4 class="card-title">Top 5 contributes</h4>
          <div class="row">
            <div class="col-lg-2 offset-1  text-center " style="border-radius: 10%;width:10%!important">
              
                <img width="50"  class="rounded-circle" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                <p class="mt-4" style="writing-mode: tb-rl;
                transform: rotate(-180deg); font-size:20px">Aliza</p>
              
            </div>
            <div class="col-lg-2 offset-1  text-center " style="border-radius: 10%;width:10%!important">
              
              <img width="50"  class="rounded-circle" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
              <p class="mt-4" style="writing-mode: tb-rl;
              transform: rotate(-180deg); font-size:20px">Aliza</p>
            
          </div>
          <div class="col-lg-2 offset-1  text-center " style="border-radius: 10%;width:10%!important">
              
            <img width="50"  class="rounded-circle" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
            <p class="mt-4" style="writing-mode: tb-rl;
            transform: rotate(-180deg); font-size:20px">Aliza</p>
          
        </div>
        <div class="col-lg-2 offset-1  text-center " style="border-radius: 10%;width:10%!important">
              
          <img width="50"  class="rounded-circle" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
          <p class="mt-4" style="writing-mode: tb-rl;
          transform: rotate(-180deg); font-size:20px">Aliza</p>
        
      </div>
      <div class="col-lg-2 offset-1  text-center " style="border-radius: 10%;width:10%!important">
              
        <img width="50"  class="rounded-circle" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
        <p class="mt-4" style="writing-mode: tb-rl;
        transform: rotate(-180deg); font-size:20px">Aliza</p>
      
    </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Views</th>
                  <th>Revenue</th>
                  <th>Sales</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/toolbox.svg')}}" alt="Toolbar svg" />
                        </div>
                      </div>
                      <div>
                        <div class="font-weight-bolder">Dixons</div>
                        <div class="font-small-2 text-muted">meguc@ruj.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary mr-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="font-weight-bolder mb-25">23.4k</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$891.2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-weight-bolder mr-1">68%</span>
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/parachute.svg')}}" alt="Parachute svg" />
                        </div>
                      </div>
                      <div>
                        <div class="font-weight-bolder">Motels</div>
                        <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success mr-1">
                        <div class="avatar-content">
                          <i data-feather="coffee" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="font-weight-bolder mb-25">78k</span>
                      <span class="font-small-2 text-muted">in 2 days</span>
                    </div>
                  </td>
                  <td>$668.51</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-weight-bolder mr-1">97%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/brush.svg')}}" alt="Brush svg" />
                        </div>
                      </div>
                      <div>
                        <div class="font-weight-bolder">Zipcar</div>
                        <div class="font-small-2 text-muted">davcilse@is.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning mr-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="font-weight-bolder mb-25">162</span>
                      <span class="font-small-2 text-muted">in 5 days</span>
                    </div>
                  </td>
                  <td>$522.29</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-weight-bolder mr-1">62%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/star.svg')}}" alt="Star svg" />
                        </div>
                      </div>
                      <div>
                        <div class="font-weight-bolder">Owning</div>
                        <div class="font-small-2 text-muted">us@cuhil.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary mr-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="font-weight-bolder mb-25">214</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$291.01</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-weight-bolder mr-1">88%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/book.svg')}}" alt="Book svg" />
                        </div>
                      </div>
                      <div>
                        <div class="font-weight-bolder">Cafés</div>
                        <div class="font-small-2 text-muted">pudais@jife.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success mr-1">
                        <div class="avatar-content">
                          <i data-feather="coffee" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="font-weight-bolder mb-25">208</span>
                      <span class="font-small-2 text-muted">in 1 week</span>
                    </div>
                  </td>
                  <td>$783.93</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-weight-bolder mr-1">16%</span>
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/rocket.svg')}}" alt="Rocket svg" />
                        </div>
                      </div>
                      <div>
                        <div class="font-weight-bolder">Kmart</div>
                        <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning mr-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="font-weight-bolder mb-25">990</span>
                      <span class="font-small-2 text-muted">in 1 month</span>
                    </div>
                  </td>
                  <td>$780.05</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-weight-bolder mr-1">78%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="{{asset('images/icons/speaker.svg')}}" alt="Speaker svg" />
                        </div>
                      </div>
                      <div>
                        <div class="font-weight-bolder">Payers</div>
                        <div class="font-small-2 text-muted">luk@izug.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning mr-1">
                        <div class="avatar-content">
                          <i data-feather="watch" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="font-weight-bolder mb-25">12.9k</span>
                      <span class="font-small-2 text-muted">in 12 hours</span>
                    </div>
                  </td>
                  <td>$531.49</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="font-weight-bolder mr-1">42%</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!--/ Company Table Card -->

    <!-- Developer Meetup Card -->
   
    <!--/ Developer Meetup Card -->

    <!-- Browser States Card -->
  
    <!--/ Goal Overview Card -->

    <!-- Transaction Card -->
    
    <!--/ Transaction Card -->
  </div>
    <div class="row match-height">
    
    <!--/ Revenue Report Card -->
  </div>

 
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  
  <script src="{{ asset(mix('js/scripts/pages/dashboard-ecommerce.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/charts/chart-chartjs.js')) }}"></script>

@endsection
