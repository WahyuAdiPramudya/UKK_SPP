@extends('layout.main')
@section('title','Edit Kelas')
@push('css')
<link href="{{asset('admin/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('admin/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@endpush

@section('content')
@parent
<div class="col-xl-12 ui-sortable">
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Managemen Data</a></li>
		<li class="breadcrumb-item active">Kelas</li>
	</ol>
	<h2 class="page-header">Data Kelas</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<form action="{{route('kelas.update',$kelas->id_kelas)}}" method="POST">
			{{@csrf_field()}}
			{{@method_field('PUT')}}
			<div class="form-group">
				<label for="">Kelas</label>
				<input type="text" name="nama_kelas" class="form-control {{$errors->has('kelas') ? 'is_invalid' : ''}} form-control-lg" type="text" name="kelas" placeholder="Masukan Nama Kelas" value="{{ $kelas->nama_kelas}}"/>
			</div>
			<div class="form-group">
				<label class="control-label">Kompetensi Keahlian<span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<select class="form-control" name="id_kompetensi">
									<option selected="" value=" ">Pilih Kompetensi Keahlian</option>
									@foreach($kompetensi as $kompetensi_keahlian)
										<option value="{{$kompetensi_keahlian->id_kompetensi}}">{{$kompetensi_keahlian->kompetensi_keahlian}}</option>
									@endforeach
								</select>
							</div>
						</div>			
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
	<!-- end panel-body -->
</div>


	@endsection

	@push('js')	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('admin/assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/demo/table-manage-combine.demo.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	@endpush