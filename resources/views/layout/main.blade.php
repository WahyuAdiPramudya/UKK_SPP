<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from seantheme.com/color-admin/admin/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:21:13 GMT -->
<head>
	<meta charset="utf-8" />
	<title>@yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('admin/assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css')}}">
	<link href="{{asset('admin/assets/css/material/app.min.css')}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{asset('admin/assets/plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet" />
	<link href="{{asset('admin/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
	<link href="{{asset('admin/assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	@stack('css')
	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Loading...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed navbar-toggle-left" data-click="sidebar-minify">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.html" class="navbar-brand">
					Color Admin Material
				</a>
			</div>
			<!-- end navbar-header -->

			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<span class="d-none d-md-inline">Hi,</span>
						<img src="{{asset('admin/assets/img/user/user-14.jpg')}}" alt="" /> 
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="{{route('logout')}}" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
			
			<div class="search-form">
				<button class="search-btn" type="submit"><i class="material-icons">search</i></button>
				<input type="text" class="form-control" placeholder="Search Something..." />
				<a href="#" class="close" data-dismiss="navbar-search"><i class="material-icons">close</i></a>
			</div>
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar" data-disable-slide-animation="true">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="{{asset('admin/assets/img/user/user-14.jpg')}}" alt="" />
							</div>
							<div class="info">
								John Smith
								<small>Front end developer</small>
							</div>
						</a>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="{{route('dashboard')}}">
							<i class="material-icons">home</i>
							<span>Dashboard</span>
						</a>
					</li>
					
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="far fa-money-bill-alt"></i>
							<span>Keuangan</span>
							
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('siswa.index')}}">Pos Keuangan</a></li>
							<li><a href="{{route('karyawan.index')}}">Jenis Pembayaran</a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fas fa-edit"></i>
							<span>Jurnal Keuangan</span>
							
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('siswa.index')}}">Pemasukan</a></li>
							<li><a href="{{route('karyawan.index')}}">Pengeluaran</a></li>
						</ul>
					</li>


					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="material-icons">grid_on</i>
							<span>Managemen Data</span>
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('siswa.index')}}">Data Siswa</a></li>
							<li><a href="{{route('karyawan.index')}}">Data Karyawan</a></li>
							<li><a href="{{route('kelas.index')}}">Data Kelas</a></li>
							<li><a href="{{route('kompetensi.index')}}">Data Kompetensi</a></li>
							<li><a href="{{route('akses.index')}}">Data Hak Akses</a></li>
							<li><a href="{{route('tahun_ajaran.index')}}">Data Tahun Ajaran</a></li>
							<li><a href="{{route('akses.index')}}">Data Hak Akses</a></li>
						</ul>
					</li>

					<li class="has-sub">
						<a href="calendar.html">
							<i class="material-icons">
								description
							</i> 
							<span>Laporan</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="calendar.html">
							<i class="fas fa-info-circle"></i>
							<span>Identitas</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="calendar.html">
							<i class="fas fa-database"></i>
							<span>Pemeliharaan</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="calendar.html">
							<i class="material-icons">
								credit_card
							</i> 
							<span>Pembayaran Siswa</span>
						</a>
					</li>

					<li class="has-sub">
						<a href="calendar.html">
							<i class="material-icons">date_range</i> 
							<span>Agenda</span>
						</a>
					</li>
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin row -->
			@yield('content')
			<!-- end row -->
		</div>
		<!-- end #content -->
		
		<!-- begin theme-panel -->
		
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/theme/material.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('admin/assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/flot/jquery.flot.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/flot/jquery.flot.time.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/flot/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/flot/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('admin/assets/js/demo/dashboard.js"></script>
	@stack('js')
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>

	<!-- @yeild('footer') -->
</body>

<!-- Mirrored from seantheme.com/color-admin/admin/material/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Feb 2020 11:22:32 GMT -->
</html>