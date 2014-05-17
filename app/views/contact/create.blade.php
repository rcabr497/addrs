@extends('hello')
@section('content')

{{ Form::open(array('url' => 'contact')) }}

{{ Form::label('firstname', 'First Name') }}
{{ Form::text('firstName') }}

{{ Form::label('middlename', 'Middle Name') }}
{{ Form::text('middleName') }}

{{ Form::label('Last name', 'Last Name') }}
{{ Form::text('lastName') }}

{{ Form::label('street', 'Street Address') }}
{{ Form::text('street') }}

{{ Form::label('city', 'Your City') }}
{{ Form::text('city') }}

{{ Form::label('state', 'Your State') }}
{{ Form::text('state') }}

{{ Form::label('zipcode', 'Your Zip Code') }}
{{ Form::text('zipcode') }}

{{ Form::label('homePhone', 'Home Phone') }}
{{ Form::text('homePhone') }}

{{ Form::label('cellPhone', 'Cell Phone') }}
{{ Form::text('cellPhone') }}

{{ Form::label('email', 'Email') }}
{{ Form::text('email') }}

{{ Form::label('facebook', 'Facebook') }}
{{ Form::text('facebook') }}

{{ Form::label('twitter', 'Twitter') }}
{{ Form::text('twitter') }}

{{ Form::label('instagram', 'Instagram') }}
{{ Form::text('instagram') }}

{{ Form::label('linkedin', 'LinkedIn') }}
{{ Form::text('linkedin') }}

{{ Form::label('pinterest', 'Pinterest') }}
{{ Form::text('pinterest') }}

{{ Form::label('googleplus', 'Google Plus') }}
{{ Form::text('googleplus') }}




{{ Form::submit('Create') }}
{{ Form::close() }}

@stop