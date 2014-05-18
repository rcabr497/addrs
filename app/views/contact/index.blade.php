@extends('hello')
@include('header')
@section('content')


<div class="container">
	<div class="row">
		<div class="main">
			<div class="full">
				<ul class="contact-list">
					<?php foreach ($contact as $row): ?>
						<li class="contact-single">
							<span class="first-name">{{ $row->firstName }}</span><span class="last-name">{{ $row->lastName }}</span>
							{{ Form::open(array('action' => array('ContactController@destroy', $row->contactID), 'method' => 'delete')) }}
							{{ Form::submit('Delete', array('class' => 'delete-contact')) }}
							{{ Form::close() }}
							<a class="view-contact" href="{{ URL::to('/') }}/contact/{{ $row->contactID }}">View</a>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop