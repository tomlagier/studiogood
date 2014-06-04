@extends('desktop.layouts.login')

@section('page-title')
Create a new user
@stop

@section('page-styles')
<link rel="stylesheet" href="/css/login.css">
@stop

@section('page-content')
	<section class="login-window pad-large">
	<h1 class="text-center">Create a new user</h1>
	<div class="messages">
	@if(isset($messages))
		@foreach($messages as $message)
			<div class="message">{{$message}}</div>
		@endforeach
	@endif
	</div>
	<div class="form text-center">
		{{Form::open(array('url' => '/user/create'))}}
		<div class="username form-field">
			<h4>{{Form::label('username', 'Username')}}</h4>
			<div>{{Form::text('username')}}</div>
		</div>
		<div class="email form-field">
			<h4>{{Form::label('email', 'E-Mail Address')}}</h4>
			<div>{{Form::text('email')}}</div>
		</div>
		<div class="password form-field">
			<h4>{{Form::label('password', 'Password')}}</h4>
			<div>{{Form::password('password')}}</div>
		</div>
		<div class="authcode form-field">
			<h4>{{Form::label('authcode', 'Authorization Code')}}</h4>
			<div>{{Form::password('authcode')}}</div>
		</div>
		{{Form::submit('Create user', array('class' => 'btn submit'))}}
		{{Form::close()}} 
	</div>
@stop
