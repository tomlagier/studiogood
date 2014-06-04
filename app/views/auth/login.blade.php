@extends('desktop.layouts.login')

@section('page-title')
Log in to StudioGood admin
@stop

@section('page-styles')
<link rel="stylesheet" href="/css/login.css">
@stop

@section('page-content')
	<section class="login-window pad-large">
		<h1 class="text-center">Log in to StudioGood admin</h1>
		<div class="messages">
			{{isset($message) ? $message : ''}}
		</div>
		<div class="form text-center">
			{{Form::open(array('url' => '/user/login'))}}
			<div class="email form-field">
				<h4>{{Form::label('email', 'E-Mail Address')}}</h4>
				<div>{{Form::text('email')}}</div>
			</div>
			<div class="password form-field">
				<h4>{{Form::label('password', 'Password')}}</h4>
				<div>{{Form::password('password')}}</div>
			</div>
			<div class="submit form-field">
				{{Form::submit('Log in', array('class' => 'btn'))}}
				{{Form::close()}}
			</div>
		</div>
	</section>
@stop
