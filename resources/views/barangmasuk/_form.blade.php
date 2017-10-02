<div class="form-group{{ $errors->has('jumlah') ? 'has-error' : '' }}">
	<label>Jumlah Barang</label>
	<div class="form-line">
		{!! Form::text('jumlah',null,['class'=>'form-control']) !!}
		{!! $errors->first('jumlah','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('harga') ? 'has-error' : '' }}">
	<label>Harga Barang</label>
	<div class="form-line">
		{!! Form::text('harga',null,['class'=>'form-control']) !!}
		{!! $errors->first('harga','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('merk') ? 'has-error' : '' }}">
	<label>Merk Barang</label>
	<div class="form-line">
		{!! Form::text('merk',null,['class'=>'form-control']) !!}
		{!! $errors->first('merk','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('kondisi') ? 'has-error' : '' }}">
	<label>Kondisi Barang</label>
	<div class="form-line">
		{!! Form::text('kondisi',null,['class'=>'form-control']) !!}
		{!! $errors->first('kondisi','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('suppliyer') ? 'has-error' : '' }}">
	<label>Suppliyer Barang</label>
	<div class="form-line">
		{!! Form::text('suppliyer',null,['class'=>'form-control']) !!}
		{!! $errors->first('suppliyer','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('tanggal') ? 'has-error' : '' }}">
	<label>Tanggal Masuk</label>
	<div class="form-line">
		{!! Form::date('tanggal',null,['class'=>'form-control']) !!}
		{!! $errors->first('tanggal','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('barang_id') ? 'has-error' : '' }}">
	<label>Nama Barang</label>
	<div class="form-line">
		{!! Form::select('barang_id', App\Barang::pluck('nama','id')->all(),null,['class'=>'form-control','placeholder'=>'Pilih Barang']) !!}
		{!! $errors->first('barang_id','<p class="help-block">:message</p>') !!}
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
	<div class="col-md-4 col-md-offset-2">
		{!! Form::button('<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Simpan', ['class'=>'btn btn-primary waves-effect','type'=>'submit']) !!}
	</div>
</div>