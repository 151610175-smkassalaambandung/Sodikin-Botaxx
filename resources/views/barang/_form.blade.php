<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
	<label>Nama Barang</label>
	<div class="form-line">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('kode') ? 'has-error' : '' }}">
	<label>Kode Barang</label>
	<div class="form-line">
		{!! Form::text('kode',null,['class'=>'form-control']) !!}
		{!! $errors->first('kode','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('kategori_id') ? 'has-error' : '' }}">
	<label>Nama Kategori</label>
	<div class="form-line">
		{!! Form::select('kategori_id', App\Kategori::pluck('nama','id')->all(),null,['class'=>'form-control','placeholder'=>'Pilih Kategori']) !!}
		{!! $errors->first('kategori_id','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::button('<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Simpan', ['class'=>'btn btn-primary waves-effect','type'=>'submit']) !!}
	</div>
</div>