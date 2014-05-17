@extends('hello')
@section('content')


<div class="container">
	<div class="row">
		<div class="main">
			<div class="full">
				<pre>
					<?php 
						foreach ($contact as $row) {
							echo $row->firstName;
							echo $row['lastName'];
						}
					?>
				</pre>
			</div>
		</div>
	</div>
</div>

@stop