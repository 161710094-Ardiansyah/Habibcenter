@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>L i s t  H o m e</h1></center>
			  <div class="panel-heading"> 
			  	<div class="panel-title pull-right"><a href="{{ route('listhome.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('listhome.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required=""></textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  	
			  	
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Add</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
		<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
	</div>
</div>
@endsection