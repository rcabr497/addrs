<?php 

class Contact extends Eloquent {
	protected $table = "contact";
	protected $primaryKey = 'contactID';

	protected $fillable = array('firstName', 'middleName', 'lastName');

}

?>