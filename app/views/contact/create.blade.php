@extends('hello')

@include('header')

@section('content')


<div class="container">
	<div class="row">
		<div class="main cf">
		<h2 class="page-title">Create new contact</h2>
		{{ Form::open(array('url' => 'contact')) }}
			<div class="half">

				<div class="single-form">{{ Form::label('firstname', 'First Name') }}
				{{ Form::text('firstName') }}</div>

				<div class="single-form">{{ Form::label('middlename', 'Middle Name') }}
				{{ Form::text('middleName') }}</div>

				<div class="single-form">{{ Form::label('Last name', 'Last Name') }}
				{{ Form::text('lastName') }}</div>

				<div class="single-form">{{ Form::label('birthday', 'Birthday') }}
				{{ Form::text('birthday') }}</div>

				<div class="single-form">{{ Form::label('street', 'Street Address') }}
				{{ Form::text('street') }}</div>

				<div class="single-form">{{ Form::label('city', 'City') }}
				{{ Form::text('city') }}</div>

				<div class="single-form">{{ Form::label('state', 'State') }}
				{{ Form::text('state') }}</div>

				<div class="single-form">{{ Form::label('zipcode', 'Your Zip Code') }}
				{{ Form::text('zipcode') }}</div>

				<div class="single-form">{{ Form::label('homePhone', 'Home Phone') }}
				{{ Form::text('homePhone') }}</div>

				<div class="single-form">{{ Form::label('cellPhone', 'Cell Phone') }}
				{{ Form::text('cellPhone') }}</div>

				<div class="single-form">{{ Form::label('email', 'Email') }}
				{{ Form::text('email') }}</div>
			</div>
			<div class="half last">
				<div class="single-form">{{ Form::label('facebook', 'Facebook') }}
				{{ Form::text('facebook') }}</div>

				<div class="single-form">{{ Form::label('twitter', 'Twitter') }}
				{{ Form::text('twitter') }}</div>

				<div class="single-form">{{ Form::label('instagram', 'Instagram') }}
				{{ Form::text('instagram') }}</div>

				<div class="single-form">{{ Form::label('linkedin', 'LinkedIn') }}
				{{ Form::text('linkedin') }}</div>

				<div class="single-form">{{ Form::label('pinterest', 'Pinterest') }}
				{{ Form::text('pinterest') }}</div>

				<div class="single-form">{{ Form::label('googleplus', 'Google Plus') }}
				{{ Form::text('googleplus') }}</div>
			</div>
			{{ Form::submit('Create') }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>

<script>
  $(function() {
    $( "#birthday" ).datepicker();
  });
  </script>

@stop