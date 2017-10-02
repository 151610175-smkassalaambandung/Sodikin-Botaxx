<div class="form-group{{ $errors->has('nama') ? 'has-error' : '' }}">
	<label>Nama Staff</label>
	<div class="form-line">
		{!! Form::text('nama',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::button('<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Simpan', ['class'=>'btn btn-primary waves-effect','type'=>'submit']) !!}
	</div>
</div>