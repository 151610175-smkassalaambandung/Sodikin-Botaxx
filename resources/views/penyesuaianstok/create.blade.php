@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/admin/penyesuaianstok') }}">Penyesuaian Stok</a></li>
					<li class="active">Tambah Penyesuaian Stok</li>
				</ul>
				<div class="panel panel-custom">
					<div class="panel-heading">
						<h2 class="panel-title">Tambah Penyesuaian Stok</h2>
					</div>

					<div class="panel-body">
					<table class="table">
						{!! Form::open(['url'=>route('penyesuaianstok.store'),
						'method'=>'post','class'=>'form-horizontal']) !!}
						@include('penyesuaianstok._form')
						{!! Form::close() !!}
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection