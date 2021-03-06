@extends('layouts.index')
@section('content')
<br>
<br>
<br>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Kategori Makanan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Batal</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('kategori_makanan.update',$kategori_makanan->id)}}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		
			  		<div class="form-group {{ $errors->has('kategori_makanan') ? ' has-error' : '' }}">
			  			<label class="control-label">kategori makanan</label>	
			  			<input type="text" name="kategori_makanan" class="form-control" value="{{ $kategori_makanan->kategori_makanan }}"  required> 
			  			@if ($errors->has('kategori_makanan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_makanan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Perbarui</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection