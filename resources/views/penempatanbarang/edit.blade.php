@extends('layouts.index')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/admin/penempatanbarang') }}">Penempatan Barang</a></li>
					<li class="active">Ubah Penempatan Barang</li>
				</ul>
				<div class="panel panel-custom">
					<div class="panel-heading">
						<h2 class="panel-title">Ubah Penempatan Barang</h2>
					</div>

					<div class="panel-body">
					<table class="table">
						{!! Form::model($penempatanbarang,['url' => route('penempatanbarang.update',$penempatanbarang->id),
						'method'=>'put','class'=>'form-horizontal']) !!}
						@include('penempatanbarang._form')
						{!! Form::close() !!}
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection