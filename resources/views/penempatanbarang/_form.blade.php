<div class="form-group{{ $errors->has('jumlah') ? 'has-error' : '' }}">
	<label>Jumlah Barang</label>
	<div class="form-line">
		{!! Form::text('jumlah',null,['class'=>'form-control']) !!}
		{!! $errors->first('jumlah','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('tanggal') ? 'has-error' : '' }}">
	<label for="datetimepacker">Tanggal Masuk</label>
	<div class="input-group date" id='datetimepicker1'>
		{!! Form::text('tanggal',null,['class'=>'form-control','id'=>'datetimepicker1']) !!}
		<span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
		{!! $errors->first('tanggal','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('barangmasuk_id') ? 'has-error' : '' }}">
	<label>Barang Masuk</label>
	<div class="form-line">
		{!! Form::select('barangmasuk_id', App\BarangMasuk::pluck('merk','id')->all(),null,['class'=>'form-control','placeholder'=>'Pilih Barang Masuk']) !!}
		{!! $errors->first('barangmasuk_id','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('tempat_id') ? 'has-error' : '' }}">
	<label>Nama Tempat</label>
	<div class="form-line">
		{!! Form::select('tempat_id', App\Tempat::pluck('nama','id')->all(),null,['class'=>'form-control','placeholder'=>'Pilih Tempat']) !!}
		{!! $errors->first('tempat_id','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('staff_id') ? 'has-error' : '' }}">
	<label>Nama Staff</label>
	<div class="form-line">
		{!! Form::select('staff_id', App\Staff::pluck('nama','id')->all(),null,['class'=>'form-control','placeholder'=>'Pilih Staff']) !!}
		{!! $errors->first('staff_id','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2 pull-right">
		{!! Form::button('<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Simpan', ['class'=>'btn btn-primary btn-md waves-effect','type'=>'submit']) !!}
		{!! Form::button('<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reset', ['class'=>'btn btn-danger btn-md waves-effect','type'=>'reset']) !!}
	</div>
</div>