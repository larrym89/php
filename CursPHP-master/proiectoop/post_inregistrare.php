<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once 'autoload.php';

$time = date('d-M-Y');
$log = new Logwriter('logs/log-' . $time . '.txt');
$user_ip = User::getUserIP();

if(User::is_loggedin() === true)
{
    // daca este logat fac redirect
    
    User::redirect('afisare_carti.php');
    die;
}

if(isset($_POST))
{
    //var_dump($_POST);die;
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
		
        'nume'          => 'required|min_len,3',
        'prenume'       => 'required|min_len,3',
        'email'         => 'required|valid_email',
        'parola'        => 'required|max_len,100|min_len,5',
        'parola2'       => 'required|equalsfield,parola',
		'hash'		    => 'token'
	));

	$validated_data = $validare->run($_POST,true);
	if($validated_data !== false) {

        $login = new USER();
        $nume = $_POST['nume'];
        //$nume = strip_tags($_POST['nume']);
        $prenume = strip_tags($_POST['prenume']);
        $email = strip_tags($_POST['email']);
        $parola = strip_tags($_POST['parola']);
        
        $inregistrare = $login->register($nume, $prenume,$email,$parola);
        
        if($inregistrare)
        {
            $log->info ('Success inregistrare Ip utilizator: '.$user_ip);
            $_SESSION['success_msg']="V-ati inregistrarecu succes!";
            unset($_SESSION['errors_msg']);
            User::redirect('index.php');
            
            die;
        }
        else
        {
            $log->error('Eroare inregistrare Ip utilizator: '.$user_ip);
            $_SESSION['errors_msg']= "<li>Datele introduse sunt gresite!</li>";
            User::redirect('inregistrare.php');
        }	

    }
    else{
        $errorMSG = "";
		$errors= $validare->get_readable_errors();
		foreach( $errors as $e){
		$errorMSG .= "<li>$e</li>";
		}
		$_SESSION['errors_msg']=$errorMSG;
		User::redirect('inregistrare.php');
    }
    

}
else{
    User::redirect('index.php');
}