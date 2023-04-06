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
            <h2>Rezultatele din baza de date sunt:</h2>
            <table class="table ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titlu</th>
                        <th>Autor</th>
                        <th>Editura</th>
                        <th>Tip carte</th>
                        <th>An</th>
                        <th>Pagini</th>
                        <th>Pret</th>
                        <th>Poza</th>
                        <th>Operatii</th>
                    </tr>
                </thead>
                <tbody>
<?php
require_once 'autoload.php';
$carte = new Carti();
$res = $carte->read();
while ($r = mysqli_fetch_assoc($res)): ?>
                    <tr>
                        <td><?php echo $r['id']; ?></td>
                        <td><?php echo $r['titlu']; ?></td>
                        <td><?php echo $r['autor']; ?></td>
                        <td><?php echo $r['editura']; ?></td>
                        <td><?php echo $r['tip_carte']; ?></td>
                        <td><?php echo $r['an']; ?></td>
                        <td><?php echo $r['pagini']; ?></td>
                        <td><?php echo $r['pret']; ?></td>
                        <td> <img src="assets/images/<?php echo $r['poza']; ?>" style ="max-width:50px"></td>
                        <td><a class ="btn btn-primary" href="update.php?id=<?php echo $r['id']; ?>">Edit</a> <a class="btn btn-danger" href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
                    </tr>
<?php endwhile;?>
                </tbody>
            </table>
        </div>
<?php include 'layout/footer.php';?>
        </div>
    </body>
</html>
