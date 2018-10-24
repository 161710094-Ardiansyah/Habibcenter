@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<center><h1>C o n t e n t</h1></center>
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
					<th>Background</th>
					<th>Foto Profil</th>
					<th>Title Header</th>
					<th>Title 1</th>
					<th>Deskripsi 1</th>
					<th>Title 2</th>
					<th>Deskripsi 2</th>
					<th>URL</th>
					<th>Footer</th>
					
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($content as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td><img src="{{asset('/img/'.$data->background)}}" height="50px"></td>
		<td><img src="{{asset('/img/'.$data->foto_profil)}}" height="50px"></td>
		<td> {{ $data->title_header }} </td>
		<td> {{ $data->title_1 }} </td>
		<td> {!! substr($data->deskripsi_1,0,100) !!}... </td>
		<td> {{ $data->title_2 }} </td>
		@php 
			$desk_2 = preg_replace('/<[^>]+>/i', '', $data->deskripsi_2); 
		@endphp
		<td> {{ str_limit($desk_2, 100, '...') }} </td>
		<td> {{ $data->linkvideo }} </td>
		<td> {!!$data->footer !!} </td>
		
		
	<td>
		<a class="btn btn-primary" href=" {{ route('content.edit',$data->id)}} "><i class="fa fa-edit"></i>Edit </a>
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