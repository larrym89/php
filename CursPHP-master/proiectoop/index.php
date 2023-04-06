<?php
require_once 'autoload.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if (!isset($_SESSION['token']) || empty($_SESSION['token'])) {
        $length = 32;
        $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
    }
    $hash = $_SESSION['token'];
}

if (User::is_loggedin() === true) {
    // daca este logat fac redirect
    User::redirect('afisare_carti.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
<body>
    <div class="container py-4">
<?php include 'layout/meniu.php';?>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
			<h4 class="card-title mt-3 text-center">LOGIN MyApp - Carti</h4>
				<form onsubmit="return checkForm(this);"  method="post" action="<?php echo $base; ?>post_login.php" data-toggle="validator" novalidate="true">
<?php if (isset($_SESSION['errors_msg']) && !empty($_SESSION['errors_msg'])): ?>
					<div class="alert alert-danger display-error">
						<?php echo $_SESSION['errors_msg']; ?>
					 </div>
<?php endif;?>
<?php if (isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg'])): ?>
					<div class="alert alert-success">
						<?php echo $_SESSION['success_msg']; ?>
					 </div>
<?php endif;?>
					<div class="form-group">
						<label for="email" class=" control-label">Email </label>
						<div >
						  <input type="email" name="email"  class="form-control" id="email" placeholder="Adresa de email" required/>
						</div>
					</div>

					<div class="form-group">
						<label for="parola" class=" control-label">Parola</label>
						<div>
						  <input type="password" name="parola"  class="form-control" id="parola" >
						</div>
						<div id="message">
							<h5>Parola trebuie sa contina:</h5>
							<span id="letter" class="invalid">Cel putin o <b>litera mica</b></span><br>
							<span id="capital" class="invalid">Cel putin o <b>litera MARE</b> </span><br>
							<span id="number" class="invalid">Cel putin o <b>cifra</b></span><br>
							<span id="length" class="invalid">Minim <b>5 caractere</b></span>
						</div>
					</div>
					<input type="hidden" value="<?php echo $hash; ?>" name="hash">
					<input id="submit" type="submit" class="btn btn-primary" value="Login" />
					</form>
            </article>
        </div>
        <!-- card.// -->
        <?php include 'layout/footer.php';?>
    </div>
    <!--container end.//-->

	<script>
		var attempt = 5; // Variable to count number of attempts.
		var myInput = document.getElementById("parola");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
			document.getElementById("message").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
			document.getElementById("message").style.display = "none";
		}

			// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if(myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if(myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if(myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if(myInput.value.length >= 5) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
		function checkForm(form)
		{
			if( attempt == 0){
				document.getElementById("email").disabled = true;
				document.getElementById("parola").disabled = true;
				document.getElementById("submit").disabled = true;
				return false;
			}
            attempt --;
			if(form.email.value == "") {
				alert("Error: Adresa de email necompletata!");
				form.email.focus();
				return false;
			}
			else{
				if(!checkEmail(form.email.value)) {
				
				alert("Error: Adresa de email invalida!");
				form.email.focus();
				return false;
				}

			}
			
			if(form.parola.value != "" ) {
				if(!checkPassword(form.parola.value)) {
					alert("Error: Parola invalida!");
					form.parola.focus();
					return false;
				}
			} 
			else{
				alert("Error: Parola necompletata!");
					form.parola.focus();
					return false;
			}
			
			return true;
		}
		function checkEmail(uemail)
		{
			
			var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    		return re.test(uemail);
		}
		function checkPassword(inputtxt) 
		{ 
			// at least one number, one lowercase and one uppercase letter
    		// at least 5 characters
    		var re = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{5,}$/;
    		return re.test(inputtxt);
		} 
	</script>
</body>
</html>