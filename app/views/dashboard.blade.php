@extends('hello')
@include('header')


@section('content')

<div class="container">
	<div class="row">
			<div class="third select-box"><a href="contact"><img src="../public/img/contact.png" alt=""><br />View All Contacts</a></div>
			<div class="third select-box"><a href="contact/create"><img src="../public/img/add-contact.png" alt=""><br />Add New Contacts</a></div>
			<div class="third select-box last"><a href=""><img src="../public/img/edit-contact.png" alt=""><br />Edit a Contact</a></div>
			<div class="third select-box"><a href="phonebook"><img src="../public/img/phonebook.png" alt=""><br />View All Phonebooks</a></div>
			<div class="third select-box"><a href=""><img src="../public/img/add-phonebook.png" alt=""><br />Add New Phonebook</a></div>
			<div class="third select-box last"><a href=""><img src="../public/img/edit-phonebook.png" alt=""><br />Edit a Phonebook</a></div>
	</div>
</div>


@stop