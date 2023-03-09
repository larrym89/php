<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once('autoload.php');
if(User::is_loggedin() !== true)
{
	// daca nu este logat fac redirect
	User::redirect('listacarti.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
    <body>
        <div class="container py-4">
<?php include 'layout/meniu.php';?>
        <div class="card bg-light">
            <h2>Lista utilizatori</h2>
            <table class="table ">
                <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Nume</th>
                        <th>Prenume</th>
                        <th>Email</th>
                        <th>Data inregistrare</th>
                        
                    </tr>
                </thead>
                <tbody>
<?php
require_once 'autoload.php';
$utilizatori = new User();
$res = $utilizatori->read();
$i=1;
while ($r = mysqli_fetch_assoc($res)): ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $r['nume']; ?></td>
                        <td><?php echo $r['prenume']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo date('d-m-Y',strtotime($r['dataadaugare'])); ?></td>
                    </tr>
<?php $i++; endwhile;?>
                </tbody>
            </table>
        </div>
<?php include 'layout/footer.php';?>
        </div>
    </body>
</html>
