@extends('hello')
@include('header')
@section('content')


<div class="container">
	<div class="row">
		<div class="main">
			<div class="full">
				<ul>
					<?php 
						foreach ($contact as $row) {

							echo '<li class="contact-single">';
							echo '<span class="first-name">' . $row->firstName . ' </span><span>' . $row->lastName . '</span>';
							echo '</li>';
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

@stop