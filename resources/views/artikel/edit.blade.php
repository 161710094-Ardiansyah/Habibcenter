@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>A r t i k e l</h1></center>
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('artikel.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('artikel.update',$artikel->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		  
			  	
			  		<div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                @if (isset($artikel) && $artikel->foto)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/images/fotoartikel/'.$artikel->foto) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="foto" type="file" value="{{ $artikel->foto }}">
                            </div>
                            	<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $artikel->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor"   required="">{{$artikel->deskripsi}}</textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<select name="kategori_id" class="form-control">
			  				@foreach($kategori as $data)
			  				<option value="{{ $data->id }}" {{ $selectedKategori == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tag') ? ' has-error' : '' }}">
			  			<label class="control-label">Tag</label>	
			  			<select name="tag[]" class="form-control" id="select2" multiple="multiple" value="@php $artikel->tag @endphp">
			  				@foreach(App\Tag::all() as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('tag'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tag') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
		<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
	</div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {

		let tag = <?php echo $artikel->tag ?>;

	    $('#select2').select2();
	    $("#select2").val(tag);
	    $('#select2').select2('val', tag);
	});
</script>
@endpush