@extends('layout.main')
@section('title','Halaman Pos Keuangan')
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
		<li class="breadcrumb-item active">Pos Keuangan</li>
	</ol>
	<h2 class="page-header">Data Pos Keuangan</h2>
	<!-- begin panel-body -->
	<div class="panel-body">
		<div class="panel panel-inverse">
			<!-- begin panel-heading -->
			<div class="panel-heading">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus" aria-hidden="true"> Tambah</i> 
				</button>
			</div>
		</div>
		<table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
			<thead>
				<tr>
					<th class="text-nowrap">No.</th>
					<th class="text-nowrap">Nama Keuangan</th>
					<th class="text-nowrap">Keterangan</th>
					<th class="text-nowrap" colspan="2">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1?>
				@foreach($pos as $pos_keuangan)
				<tr>
					<td>{{$no++}}</td>
					<td>{{$pos_keuangan->nama_pos}}</td>
					<td>{{$pos_keuangan->keterangan}}</td>
					<td width="1%">
						<a href="{{route('pos.edit',$pos_keuangan->id_pos)}}">
							<button class="btn btn-warning"><i class="fa fa-pencil-alt"> Edit</i></button>
						</a>
					</td>
					<td width="1%">
						<form action="{{route('pos.destroy',$pos_keuangan->id_pos)}}" method="post">
							{{@csrf_field()}}
							{{@method_field('DELETE')}}
							<button class="btn btn-danger" type="submit">
								<i class="fa fa-trash-alt"> DELETE</i>
							</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- end panel-body -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Data Pos Keuangan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('pos.store')}}" method="POST">
					{{@csrf_field()}}
					<div class="form-group">
						<label for="">Nama Pos Keuangan</label>
						<input type="text" name="nama_pos" class="form-control {{$errors->has('nama_pos') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Nama Pos Keuangan" value="{{old('nama_pos')}}"/>
					</div>

					<div class="form-group">
						<label for="">Keterangan</label>
						<input type="text" name="keterangan" class="form-control {{$errors->has('keterangan') ? 'is_invalid' : ''}} form-control-lg" type="text" placeholder="Masukan Keterangan" value="{{old('keterangan')}}"/>
					</div>
					
					<div class="modal-footer">
						<button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
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