<?php

class Social extends Eloquent {
	protected $table = "social";
	protected $primaryKey = 'socialID';


	protected $fillable = array('contactID',
			'facebook',
			'twitter',
			'instagram',
			'linkedin',
			'pinterest',
			'googleplus');
}