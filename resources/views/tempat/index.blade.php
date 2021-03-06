@extends('layouts.index')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<ul class="breadcrumb breadcrumb-custom">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li class="active">Tempat</li>
				</ul>
				<div class="panel panel-custom">
					<div class="panel-heading">
						<h2 class="panel-title">Tempat</h2>
					</div>

					<div class="panel-body">
						<p><a class="btn btn-info btn-md" href="{{ route('tempat.create') }}">Tambah</a></p><br>
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