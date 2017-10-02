@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<ul class="breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li class="active">Staff</li>
				</ul>
				<div class="panel panel-custom">
					<div class="panel-heading">
						<h2 class="panel-title">Staff</h2>
					</div>

					<div class="panel-body">
						<p><a class="btn btn-info btn-md" href="{{ route('staff.create') }}">Tambah</a></p>
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