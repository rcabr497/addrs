@extends('hello')
@include('header')
@section('content')


<div class="container">
	<div class="row">
		<div class="main">
			<div class="full">
				<ul class="contact-list">
					<?php 
						foreach ($contact as $row) {

							echo '<li class="contact-single">';
							echo '<span class="first-name">' . $row->firstName . ' </span><span>' . $row->lastName . '</span>';
							echo "{{ Form::open(array('route' => array('url', 'contact'), 'method' => 'delete')) }}";
							echo "<button type='submit' href='{{ URL::route('contact', '$contactID') }}' class='delete-contact'>Delete</button>";
							echo '{{ Form::close() }}';
							echo '<a class="view-contact" href="">View</a>';

							echo '</li>';

						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop