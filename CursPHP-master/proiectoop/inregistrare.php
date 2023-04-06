<?php
if (!isset($_SESSION)) {
    session_start();
}
$length = 32;
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
}
$hash = $_SESSION['token'];
require_once 'autoload.php';
$time = date('d-M-Y');
$log = new Logwriter('logs/log-' . $time . '.txt');
$user_ip = User::getUserIP();
$log->info('Ip utilizator: ' . $user_ip);
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
<body>
    <div class="container py-4">
<?php include 'layout/meniu.php';?>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
			<h4 class="card-title mt-3 text-center">Inregistreaza Uusers -  MyApp - Carti</h4>
				<form  class="needs-validation" method="post" action="<?php echo $base; ?>post_inregistrare.php" data-toggle="validator" novalidate="true">
<?php if (isset($_SESSION['errors_msg']) && !empty($_SESSION['errors_msg'])): ?>
					<div class="alert alert-danger display-error">
						<?php echo $_SESSION['errors_msg']; ?>
					 </div>
<?php endif;?>
                     <div class="form-group">
						<label for="nume" class=" control-label">Nume </label>
						<div >
						  <input type="text" name="nume"  class="form-control" id="nume" placeholder="Nume" required/>
						  	<div class="invalid-feedback">
								Campul Nume trebuie completat!
        					</div>
						</div>
                    </div>
                    <div class="form-group">
						<label for="prenume" class=" control-label">Prenume </label>
						<div >
						  <input type="text" name="prenume"  class="form-control" id="prenume" placeholder="Prenume" required/>
						  	<div class="invalid-feedback">
								Campul Prenume trebuie completat!
        					</div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class=" control-label">Email </label>
						<div >
						  <input type="email" name="email"  class="form-control" id="email" placeholder="Adresa de email" required/>
						  <div class="invalid-feedback">
								Campul Email trebuie completat!
        					</div>
						</div>
					</div>

					<div class="form-group">
						<label for="parola" class=" control-label">Parola</label>
						<div id=display_box class=msg></div>
						<div>
						  <input type="password" name="parola" class="form-control pwds" id="parola" value="" required/>
						  <div class="invalid-feedback">
								Campul Parola trebuie completat!
        					</div>
						</div>
  						
						<ul  id="d1" class="list-group">
							<li class="list-group-item list-group-item-success">Password Conditions</li>
							<li class="list-group-item" id=d12><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin o <b>litera MARE</b></li>
							<li class="list-group-item" id=d13 ><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin o <b>litera mica</b> </li>
							<!-- <li class="list-group-item" id=d14><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin un <b>caracter special</b> </li> -->
							<li class="list-group-item" id=d15><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin o <b>cifra</b></li>
							<li class="list-group-item" id=d16><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Minim <b>5 caractere</b></li>
						</ul>

                    </div>
                    <div class="form-group">
						<label for="parola2" class=" control-label">Confirma Parola</label>
						<div>
						  <input type="password" name="parola2"  class="form-control" id="parola2" value="" required/>
						  <div id="cPwdInvalid" class="invalid-feedback">
								Campul Confirma Parola trebuie completat!
						  </div>


						</div>
					</div>
					<input type="hidden" name="hash" value="<?php echo $hash; ?>">
					<input id="submit" type="submit" class="btn btn-primary" value="Inregistreaza-te" />
					</form>
            </article>
        </div>
        <!-- card.// -->
        <?php include 'layout/footer.php';?>
    </div>
	<!--container end.//-->
	<style>
		.list-group{
    z-index:10;display:none;
	position:absolute;
    color:red;
}
.msg
{
	position:relative;
	color:red;
	float: right;
}
	</style>
	<script>
		(function() {
			'use strict'; //https://www.w3schools.com/js/js_strict.asp
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	
  // Basic Example
//   bootstrapValidate(['#nume','#prenume','#email'],'required:Acest camp trebuie completat!');
	bootstrapValidate(
		'#nume', 
		'required:Acest camp trebuie completat!|contains:Popescu:Trebuie sa contina "Popescu"|min:7:Minim 7 caractere!|max:40:Cel mult 40 de caractere!',
		function (isValid) {
			if (isValid) {
					document.querySelector('#nume+.invalid-feedback').style.display="none";
				//alert('Element is valid');
			} else {
				//alert('Element is invalid');
			}
		}
	);
	bootstrapValidate('#prenume', 'contains:Vasile:Trebuie sa contina "Vasile"|min:6:Minim 6 caractere!|max:40:Cel mult 40 de caractere!');
	bootstrapValidate('#email', 'email:Adresa de email invalida');
	bootstrapValidate('#parola', 'regex:^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{5,}$:Parola aleasa nu este sigura!',
		function (isValid) {
			if (isValid) {
					document.querySelector('#parola+.invalid-feedback').style.display="none";
				//alert('Element is valid');
			} else {
				//alert(222);
			}
		}
	);
	bootstrapValidate('#parola2', 'matches:#parola:Campul Confirmare parola trebuie sa coincida cu Parola|regex:^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{5,}$:Parola aleasa nu este sigura!')


$(document).ready(function() {
////////////////////
$('#parola').keyup(function(){
var str=$('#parola').val();
var upper_text= new RegExp('[A-Z]');
var lower_text= new RegExp('[a-z]');
var number_check=new RegExp('[0-9]');
//var special_char= new RegExp('[!/\'^�$%&*()}{@#~?><>,|=_+�-\]');

var flag='T';

if(str.match(upper_text)){
$('#d12').html("<span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Cel putin o <b>litera MARE</b> ");
$('#d12').css("color", "green");
}else{$('#d12').css("color", "red");
$('#d12').html("<span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin o <b>litera MARE</b> ");
flag='F';}

if(str.match(lower_text)){
$('#d13').html("<span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Cel putin o <b>litera mica</b> ");
$('#d13').css("color", "green");
}else{$('#d13').css("color", "red");
$('#d13').html("<span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin o <b>litera mica</b> ");
flag='F';}

// if(str.match(special_char)){
// $('#d14').html("<span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Cel putin un <b>caracter special</b> ");
// $('#d14').css("color", "green");
// }else{
// $('#d14').css("color", "red");
// $('#d14').html("<span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin un <b>caracter special</b> ");
// flag='F';}

if(str.match(number_check)){
$('#d15').html("<span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Cel putin o <b>cifra</b> ");
$('#d15').css("color", "green");
}else{
$('#d15').css("color", "red");
$('#d15').html("<span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Cel putin o <b>cifra</b> ");
flag='F';}


if(str.length>=5){
$('#d16').html("<span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Minim <b>5 caractere</b> ");

$('#d16').css("color", "green");
}else{
$('#d16').css("color", "red");
$('#d16').html("<span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Minim <b>5 caractere</b> ");

flag='F';}


if(flag=='T'){
$("#d1").fadeOut("slow");
$('#display_box').css("color","green");
$('#display_box').html("<span class='glyphicon glyphicon-ok' aria-hidden='true'></span> "+str);
}else{
$("#d1").show();
$('#display_box').css("color","red");
$('#display_box').html("<span class='glyphicon glyphicon-remove' aria-hidden='true'></span> "+str);
}
});
///////////////////
$('#parola').blur(function(){
$("#d1").fadeOut("slow");
});
///////////
$('#parola').focus(function(){
$("#d1").show();
});
////////////

})

	</script>
</body>
</html>