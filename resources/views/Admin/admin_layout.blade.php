<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Online Nursery</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
		<script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
		<script src="{{ asset('assets/js/respond.min.js') }}"></script>
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
                <a href="{{ url('/') }}" >
                    <h4 class="mt-3 text-white">Online Nursery</h4>
				</a>
			</div>
            <a href="{{ url('/') }}" class="btn btn-success mt-2">Visit Store</a>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
                        {{-- <a class="dropdown-item" href="{{ url('admin/change-password') }}">Change Password</a> --}}
                        <a class="dropdown-item"></a>
						<a class="dropdown-item"><form action="{{ route('logout') }}" method="post">@csrf
                            <button type="submit">Logout</button>
                        </form></a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item"><form action="{{ route('logout') }}" method="post">@csrf
                        <button type="submit">Logout</button>
                    </form></a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        {{-- <li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span>Customers </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ url('admin/create-customer') }}">Create Customer</a></li>
								<li><a href="{{ url('admin/customers') }}">Customers</a></li>
							</ul>
						</li> --}}

                        <li class="submenu">
							<a href="#"><i class="fa fa-users"></i> <span>Customer </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ url('admin/create-customer') }}">Create Customer</a></li>
								<li><a href="{{ url('admin/customers') }}">View Customers</a></li>
							</ul>
						</li>

                        <li class="submenu">
							<a href="#"><i class="fa fa-cog"></i> <span>Category </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ url('admin/create-category') }}">Create Category</a></li>
								<li><a href="{{ url('admin/categories') }}">View Categories</a></li>
							</ul>
						</li>


                        <li class="submenu">
							<a href="#"><i class="fa fa-database"></i> <span>Products </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ url('admin/create-product') }}">Create Product</a></li>
								<li><a href="{{ url('admin/products') }}">View Products</a></li>
							</ul>
						</li>
                        <li class="submenu">
							<a href="#"><i class="fa fa-cart-plus"></i> <span>Sales </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
                                {{-- <li><a href="{{url('admin/create-invoice')}}">Create Invoice</a></li> --}}
                                <li><a href="{{ url('admin/invoices') }}">View Sales</a></li>
                            </ul>
                        </li>

                        {{-- <li class="submenu">
							<a href="#"><i class="fa fa-credit-card"></i> <span>Payment </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
                                <li><a href="{{url('admin/create-balance')}}">Create Payment</a></li>
                                <li><a href="{{ url('admin/view-balances') }}">View Payments</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
                                
        
     
        @yield('content')




        <div id="delete_patient" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        {{-- <img src="assets/img/sent.png" alt="" width="50" height="46"> --}}
                        <h3>Are you sure want to delete it?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                            <a href="{{ url('/') }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/moment.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
	
</body>


<!-- add-employee24:07-->
</html>
