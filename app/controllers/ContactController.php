<?php

class ContactController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $contact = Contact::find(1);
		$contact = DB::select("SELECT * FROM contact");

		return View::make('contact.index')->with('contact', $contact);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('contact.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$firstName = Input::get('firstName');
		$middleName = Input::get('middleName');
		$lastName = Input::get('lastName');
		$birthday = Input::get('birthday');
		$email = Input::get('email');
		$street = Input::get('street');
		$city = Input::get('city');
		$state = Input::get('state');
		$zipcode = Input::get('zipcode');
		$homePhone = Input::get('homePhone');
		$cellPhone = Input::get('cellPhone');
		$facebook = Input::get('facebook');
		$twitter = Input::get('twitter');
		$instagram = Input::get('instagram');
		$linkedin = Input::get('linkedin');
		$pinterest = Input::get('pinterest');
		$googleplus = Input::get('googleplus');

		$contact = Contact::create(array(
			'firstName' => $firstName,
			'middleName' => $middleName,
			'lastName' => $lastName,
		));

		$contactID = $contact->contactID; 

		$social = Social::create(array(
			'birthday' => $birthday,
			'contactID' => $contactID,
			'facebook' => $facebook,
			'twitter' => $twitter,
			'instagram' => $instagram,
			'linkedin' => $linkedin,
			'pinterest' => $pinterest,
			'googleplus' => $googleplus
			));

		$personal = Personal::create(array(
			'contactID' => $contactID,
			'email' => $email,
			'street' => $street,
			'city' => $city,
			'state' => $state,
			'zipcode' => $zipcode,
			'homePhone' => $homePhone,
			'cellPhone' => $cellPhone,
			));

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		


	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($contactID)
	{
		DB::table(array('contact', 'social', 'personal'))->where('contactID', '=', '$contactID')->delete();
		//$query = "DELETE * FROM contact, social, personal WHERE contactID = '$contactID'";

	return View::make('contact.index');

	}


}
