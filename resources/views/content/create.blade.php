@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>C o n t e n t</h1></center>
			  <div class="panel-heading"> 
			  	<div class="panel-title pull-right"><a href="{{ route('content.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('content.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
						<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Background</label>
                                <input name="background" type="file" required>
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto Profil</label>
                                <input name="foto_profil" type="file" required>
                            </div>
                            <div class="form-group {{ $errors->has('title_header') ? ' has-error' : '' }}">
			  			<label class="control-label">Title Header</label>	
			  			<input type="text" name="title_header" class="form-control"  required>
			  			@if ($errors->has('title_header'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title_header') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('title_1') ? ' has-error' : '' }}">
			  			<label class="control-label">Title 1</label>	
			  			<input type="text" name="title_1" class="form-control"  required>
			  			@if ($errors->has('title_1'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title_1') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	
			  		<div class="form-group {{ $errors->has('deskripsi_1') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi 1</label>	
			  			<input type="text" name="deskripsi_1" class="form-control"  required>
			  			@if ($errors->has('deskripsi_1'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi_1') }}</strong>
                            </span>
                        @endif
			  		</div>
			  					  		<div class="form-group {{ $errors->has('title_2') ? ' has-error' : '' }}">
			  			<label class="control-label">Title 2</label>	
			  			<input type="text" name="title_2" class="form-control"  required>
			  			@if ($errors->has('title_2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title_2') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	
			  		<div class="form-group {{ $errors->has('deskripsi_2') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi 2</label>	
			  			<textarea id="text" type="ckeditor" name="deskripsi_2" class="ckeditor" required=""></textarea>
			  			@if ($errors->has('deskripsi_2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi_2') }}</strong>
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