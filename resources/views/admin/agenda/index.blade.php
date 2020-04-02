@extends('layout.main')
@section('title','Halaman Siswa')
@push('css')
<link href="{{asset('admin/assets/plugins/fullcalendar/dist/fullcalendar.print.css')}}" rel="stylesheet" media='print' />
<link href="{{asset('admin/assets/plugins/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->
@endpush

@section('content')
@parent
<!-- begin #content -->
<div class="col-xl-12 ui-sortable">
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item active">Calendar</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Calendar <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	<hr />
	<!-- begin vertical-box -->
	<div class="vertical-box">
		<!-- begin event-list -->
		<div class="vertical-box-column p-r-30 d-none d-lg-table-cell" style="width: 215px">
			<div id="external-events" class="fc-event-list">
				<h5 class="m-t-0 m-b-15">Draggable Events</h5>
				<div class="fc-event" data-color="#00acac">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-success"></i></div>
					Meeting with Client
				</div>
				<div class="fc-event" data-color="#348fe2">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-blue"></i></div>
					IOS App Development
				</div>
				<div class="fc-event" data-color="#f59c1a">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-warning"></i></div>
					Group Discussion
				</div>
				<div class="fc-event" data-color="#ff5b57">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-danger"></i></div>
					New System Briefing
				</div>
				<div class="fc-event">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-inverse"></i></div>
					Brainstorming
				</div>
				<hr class="bg-grey-lighter m-b-15" />
				<h5 class="m-t-0 m-b-15">Other Events</h5>
				<div class="fc-event" data-color="#b6c2c9">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-grey"></i></div>
					Other Event 1
				</div>
				<div class="fc-event" data-color="#b6c2c9">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-grey"></i></div>
					Other Event 2
				</div>
				<div class="fc-event" data-color="#b6c2c9">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-grey"></i></div>
					Other Event 3
				</div>
				<div class="fc-event" data-color="#b6c2c9">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-grey"></i></div>
					Other Event 4
				</div>
				<div class="fc-event" data-color="#b6c2c9">
					<div class="fc-event-icon"><i class="fas fa-circle fa-fw f-s-9 text-grey"></i></div>
					Other Event 5
				</div>
			</div>
		</div>
		<!-- end event-list -->

		<!-- begin calendar -->
		<div id="calendar" class="vertical-box-column calendar"></div>
		<!-- end calendar -->
	</div>
	<!-- end vertical-box -->
</div>
<!-- end #content -->

<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->
@endsection

@push('js')
<script src="{{asset('admin/assets/plugins/moment/min/moment.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/demo/calendar.demo.js')}}"></script>
@endpush

