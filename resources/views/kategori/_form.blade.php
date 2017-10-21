<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
	<label>Nama Kategori</label>
	<div class="form-line">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2 pull-right">
		{!! Form::button('<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Simpan', ['class'=>'btn btn-primary btn-md waves-effect','type'=>'submit']) !!}
		{!! Form::button('<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reset', ['class'=>'btn btn-danger btn-md waves-effect','type'=>'reset']) !!}
	</div>
</div>