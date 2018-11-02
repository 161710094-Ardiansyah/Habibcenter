@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<center><h1>P r o f i l</h1></center>
				<div class="panel-heading">
					<div class="panel-title pull-right"><a href="{{ route('biografi.create') }}"><i class="fa fa-plus"></i>Add Data</a>
				</div>
			</div>
<div class="panel-body">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	@include('sweet::alert')
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Foto</th>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($biografi as $data)
	<tr>
		<td> {{ $no++ }} </td>
		
		<td><img src="{{asset('assets/images/fotobiografi/'.$data->foto)}}"width="100" height="100"></td>
		<td> {{ $data->nama }} </td>
		@php 
			$desk_2 = preg_replace('/<[^>]+>/i', '', $data->deskripsi); 
		@endphp
		<td> {{ str_limit($desk_2, 500, '...') }} </td>
		
	<td>
		<a class="btn btn-primary" href=" {{ route('biografi.edit',$data->id)}} "><i class="fa fa-edit"></i>Edit </a>
	</td>
	
	<td>
							<form method="post" action="{{ route('biografi.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus </button>
								
							</form>
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
</div>
@endsection