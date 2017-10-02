@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li class="active">Barang Masuk</li>
				</ul>
				<div class="panel panel-custom">
					<div class="panel-heading">
						<h2 class="panel-title">Barang Masuk</h2>
					</div>

					<div class="panel-body">
						<p><a class="btn btn-info btn-md" href="{{ route('barangmasuk.create') }}">Tambah</a></p>
						{!! $html->table(['class'=>'table-striped']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	{!! $html->scripts() !!}
@endsection