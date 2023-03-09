<?php
include_once("connect.php");
if(isset($_POST['email']) && !empty($_POST['email'])){
     echo $sql = "SELECT id, prenume, nume , email,data_nastere, sex, telefon
            FROM utilizatori WHERE email = '".mysqli_real_escape_string($con,$_POST['email'])."' and parola ='".sha1($_POST['parola'])."'";
    $result = mysqli_query($con, $sql);
    if(isset($result) && !empty($result)){
        $row = mysqli_fetch_assoc($result);
        
        if(isset($row)){
            echo "Salut $row[prenume]. Logarea s-a efectuat cu succes";
        }
        else{
            echo "email si parola gresite";
            
        }
        
    }
    else{
        echo "nu area cont !";
    }


}
else{


    $sql = "SELECT id, prenume, nume , email,data_nastere, sex, telefon FROM utilizatori";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) :?>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Prenume</th>
                    <th>Nume</th>
                    <th>Email</th>
                    <th>Data nastere</th>
                    <th>Sex</th>
                    <th>Telefon</th>
                </tr>
            </thead>
    <?php
        while($row = mysqli_fetch_assoc($result)):?>
            <tr>
                <td><?php echo htmlentities($row["id"]);?></td>
                <td><?php echo htmlentities($row["prenume"]);?></td>
                <td><?php echo htmlentities($row["nume"]);?></td>
                <td><?php echo htmlentities($row["email"]);?></td>
                <td><?php echo htmlentities($row["data_nastere"]);?></td>
                <td><?php echo htmlentities($row["sex"]);?></td>
                <td><?php echo htmlentities($row["telefon"]);?></td>
            </tr>
        <?php endwhile;?>
        </table>
    <?php else:?>
        echo "0 results";
    <?php endif;?>
    <?php
}
mysqli_close($con);
 ?>


 <!-- <a href="atac3.php">Senzational click aici</a> -->
