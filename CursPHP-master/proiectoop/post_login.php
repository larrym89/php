<?php
require_once 'autoload.php';
if (!isset($_SESSION)) {
    session_start();
}
if(User::is_loggedin() === true)
{
	// daca este logat fac redirect
	User::redirect('afisare_carti.php');
}

if(isset($_POST))
{
	unset($_SESSION['errors_msg']);	
	//fac validari la nivel de php
	$validare = new Validation('ro');
	$_POST = $validare->sanitize($_POST);
	// validare custom hash :  CSRF token
	Validation::add_validator(
		'token', 
		function($field, $input, $param = NULL) {
			return $input[$field]===$_SESSION['token'];
		},
		'Date incorecte atentie!'
	);
	$validare->validation_rules(array(
		
		'parola'      => 'required|max_len,100|min_len,5',
		'email'       => 'required|valid_email',
		'hash'		  => 'token'
	));

	$validated_data = $validare->run($_POST,true);
	if($validated_data !== false) {
		// continue
		$login = new USER();
		$umail = strip_tags($_POST['email']);
		$upass = strip_tags($_POST['parola']);
		
		if($login->login($umail,$upass))
		{
			User::redirect('afisare_carti.php');
		}
		else
		{
			$_SESSION['errors_msg'] = "Emailul sau parola sunt gresite!";
			User::redirect('index.php');
		}
	} else {
		unset($_SESSION['success_msg']);
		$errorMSG = "";
		$errors= $validare->get_readable_errors();
		foreach( $errors as $e){
		$errorMSG .= "<li>$e</li>";
		}
		$_SESSION['errors_msg']=$errorMSG;
		User::redirect('index.php');
	}
	die; 	
}
else{
    User::redirect('index.php');
}