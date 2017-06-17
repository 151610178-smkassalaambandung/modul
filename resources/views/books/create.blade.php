@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
	<ul class="breadcrumb">
		<li><a href="{{ url('/home') }}">Dashboard</a></li>
		<li><a href="{{ url('/admin/authors') }}">Buku</a></li>
		<li class="active">tambah Buku</li>
	</ul>
	<div class="panel panel-default">
	<div class="panel-heading">
	<h2 class="panel-title">tambah Buku</h2>
	</div>

	<div clas="panel-body">
	{!! Form::open(['url' => route('books.store'),'method' => 'post', 'class'=>'form-horizontal']) !!}
	@include('books._form')
	{!! Form::close() !!}
	</div>
	</div>
	</div>
	</div>
	</div>
	@endsection