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

<div class="form-group{{ $errors->has('penempatanbarang_id') ? 'has-error' : '' }}">
	<label>Penempatan Barang</label>
	<div class="form-line">
		{!! Form::select('penempatanbarang_id', App\PenempatanBarang::pluck('jumlah','id')->all(),null,['class'=>'form-control','placeholder'=>'Pilih Penempatan Barang']) !!}
		{!! $errors->first('penempatanbarang_id','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('stok_penggunaan') ? 'has-error' : '' }}">
	<label>Stok Penggunaan</label>
	<div class="form-line">
		{!! Form::text('stok_penggunaan',null,['class'=>'form-control']) !!}
		{!! $errors->first('stok_penggunaan','<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group">
	<div class="col-md-4 col-md-offset-2 pull-right">
		{!! Form::button('<span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Simpan', ['class'=>'btn btn-primary btn-md waves-effect','type'=>'submit']) !!}
		{!! Form::button('<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reset', ['class'=>'btn btn-danger btn-md waves-effect','type'=>'reset']) !!}
	</div>
</div>