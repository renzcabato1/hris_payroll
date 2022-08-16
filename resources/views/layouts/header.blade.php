<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{asset('images/icon.png')}}">
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
<!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('body_css/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('body_css/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('body_css/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('body_css/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('body_css/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('body_css/js/select.dataTables.min.css')}}">
     <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('body_css/vendors/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('body_css/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('body_css/css/vertical-layout-light/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<!-- endinject -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <style>
      .loader {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url("{{ asset('login_css/images/loader.gif')}}") 50% 50% no-repeat white ;
          opacity: .8;
          background-size:120px 120px;
      }

      .redbox1
        {
            background-color: lightgrey;
            width: 15px;
            height: 15px;
            border: 10px solid red;
            display: inline-block;
            
        }
        .orangebox
        {
            background-color: lightgrey;
            width: 15px;
            height: 15px;
            border: 10px solid orange;
            float:right;
        }
        .orangebox1
        {
            background-color: lightgrey;
            width: 15px;
            height: 15px;
            border: 10px solid orange;
            display: inline-block;
        }
        .green
        {
            background-color: lightgrey;
            width: 15px;
            height: 15px;
            border: 10px solid green;
            display: inline-block;
        }
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E;
}



#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
}


#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
}

/*Dropdown List Exp Date*/
select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px;
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue;
}

/*The background card*/
.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
}

/*FieldSet headings*/
.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
}

#progressbar .active {
    color: #000000;
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative;
}

/*Icons in the ProgressBar*/
#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f007";
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007";
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d";
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f090";
}

.user:before {
    font-family: FontAwesome;
    content:"\f02d";
}
.employment:before {
    font-family: FontAwesome;
    content:"\f0f0";
}

/*ProgressBar before any progress*/
#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: skyblue;
}

    </style>
</head>
<body>
    <div id = "loader" style="display:none;" class="loader">
    </div>
    {{-- <div id="app">
        <main class="py-4">
        </main>
    </div> --}}

    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="{{url('/')}}"><img src="images/obanana_brand.png" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{url('/')}}"><img src="images/icon.png" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  {{-- <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                      <i class="icon-search"></i>
                    </span>
                  </div> --}}
                  {{-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> --}}
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <img class="rounded-circle" style='width:34px;height:34px;' src='{{URL::asset(auth()->user()->employee->avatar)}}' onerror="this.src='{{URL::asset('/images/no_image.png')}}';">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="{{url('account-setting')}}">
                    <i class="ti-settings text-primary"></i>
                    Account Settings
                  </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"  onclick="logout(); show();">
                    <i class="ti-power-off text-primary"></i>
                    Logout
                  </a>
                  <form id="logout-form"  action="{{ route('logout') }}"  method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="icon-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <hr>
                <h5>Employee</h5>
              </li>
              <li class="nav-item @if($header == '') active @endif">
                <a class="nav-link" href="{{url('/')}}" onclick='show()'>
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item @if($header == 'attendances') active @endif">
                <a class="nav-link" href="{{url('/attendances')}}" onclick='show()'>
                  <i class="icon-clock menu-icon"></i>
                  <span class="menu-title">Attendances</span>
                </a>
              </li>
              <li class="nav-item @if($header == 'forms') active @endif">
                <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="ui-basic">
                  <i class="icon-layout menu-icon"></i>
                  <span class="menu-title">Forms</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item "> <a class="nav-link active" href="{{url('/leave')}}">Leave</a></li>
                    <li class="nav-item "> <a class="nav-link " href="{{url('/overtime')}}">Overtime</a></li>
                    <li class="nav-item "> <a class="nav-link " href="{{url('/work-from-home')}}">Work from home</a></li>
                    <li class="nav-item "> <a class="nav-link " href="{{url('/official-business')}}">Official Business</a></li>
                    <li class="nav-item "> <a class="nav-link " href="{{url('/dtr-correction')}}">DTR Correction</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/payslips')}}" onclick='show()'>
                  <i class="icon-briefcase menu-icon"></i>
                  <span class="menu-title">Payslips</span>
                </a>
              </li>
              <li class="nav-item">
                <hr>
                <h5>Manager</h5>
              </li>
              <li class="nav-item @if($header == 'dashboard-manager') active @endif">
                <a class="nav-link" href="{{url('/dashboard-manager')}}" onclick='show()'>
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item @if($header == 'for-approval') active @endif">
                <a class="nav-link" href="{{url('/dashboard-manager')}}" onclick='show()'>
                  <i class="icon-check menu-icon"></i>
                  <span class="menu-title">For Approval</span>
                </a>
              </li>
              <li class="nav-item">
                <hr>
                <h5>Admin</h5>
              </li>
              <li class="nav-item @if($header == 'employees') active @endif ">
                <a class="nav-link" href="{{url('/employees')}}" onclick='show()'>
                  <i class="icon-head menu-icon"></i>
                  <span class="menu-title">Employees</span>
                </a>
              </li>
              <li class="nav-item @if($header == 'Handbooks') active @endif">
                <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="ui-basic">
                  <i class="icon-anchor menu-icon"></i>
                  <span class="menu-title">Settings</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="settings">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/holidays')}}">Holidays</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/schedules')}}">Schedules</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/allowances')}}">Allowances</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/handbooks')}}">Handbook</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/leavee-employees')}}">Leaves</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false" aria-controls="ui-basic">
                  <i class="icon-file menu-icon"></i>
                  <span class="menu-title">Reports</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="reports">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/leave')}}">Leave</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/overtime')}}">Overtime</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/work-from-home')}}">Work from home</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/official-business')}}">Official Business</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('/dtr-correction')}}">DTR Correction</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          <!-- partial -->
          
          @yield('content')
          <!-- main-panel ends -->

        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->

        @include('sweetalert::alert')
        <!-- plugins:js -->
        <script src="{{asset('body_css/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('body_css/vendors/chart.js/Chart.min.js')}}"></script>
    
        <script src="{{asset('body_css/vendors/select2/select2.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
      
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{asset('body_css/js/dashboard.js')}}"></script>
        <script src="{{asset('body_css/js/select2.js')}}"></script>


        <script src="{{asset('body_css/vendors/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('body_css/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('body_css/js/dataTables.select.min.js')}}"></script>

        <script src="{{asset('body_css/js/off-canvas.js')}}"></script>
        <script src="{{asset('body_css/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('body_css/js/template.js')}}"></script>
        <script src="{{asset('body_css/js/settings.js')}}"></script>
        <script src="{{asset('body_css/js/todolist.js')}}"></script>
        <script type='text/javascript'>
            function show() {
                document.getElementById("loader").style.display="block";
            }

            function logout()
            {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            }
            $( document ).ready(function() {

              $(document).ready(function() {
              $('.tablewithSearch').DataTable();
              });
            }); 
        </script>
        </div>
<script>

$(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    
    $(".next").click(function(){
        
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 600
        });
    });
    
    $('.radio-group .radio').click(function(){
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });
    
    $(".submit").click(function(){
        return false;
    })
        
    });
    

    
</script>

@include('sweetalert::alert')
</body>
</html>
