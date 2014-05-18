<?php

class Personal extends Eloquent {
	protected $table = "personal";
	protected $primaryKey = 'personalID';


	protected $fillable = array('contactID',
			'birthday',
			'email',
			'street',
			'city',
			'state',
			'zipcode',
			'homePhone',
			'cellPhone');

}