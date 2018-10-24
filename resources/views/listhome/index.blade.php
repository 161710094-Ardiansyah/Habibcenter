@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<center><h1>L i s t  H o m e</h1></center>
				<div class="panel-heading">
					<div class="panel-title pull-right">
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
					<th>Deskripsi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($listhome as $data)
	<tr>
		<td> {{ $no++ }} </td>
		@php 
			$desk_2 = preg_replace('/<[^>]+>/i', '', $data->deskripsi); 
		@endphp
		<td> {{ str_limit($desk_2, 100, '...') }} </td>
		
		
	<td>
		<a class="btn btn-primary" href=" {{ route('listhome.edit',$data->id)}} "><i class="fa fa-edit"></i>Edit </a>
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