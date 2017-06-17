@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
	<ul class="breadcrumb">
		<li><a href="{{ url('/home') }}">Dashboard</a></li>
		<li><a href="{{ url('/admin/authors') }}">penulis</a></li>
		<li class="active">Ubah penulis</li>
	
	</ul>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h2 class="panel-title">Ubah penulis</h2>
	</div>

	<div clas="panel-body">
	{!! Form::model($author, ['url' => route('authors.update', $author->id),
	'method'=>'put', 'class'=>'form-horizontal']) !!} 
	@include('authors._form')
	{!! Form::close() !!}
	</div>
	</div>
	</div>
	</div>
	</div>
	@endsection