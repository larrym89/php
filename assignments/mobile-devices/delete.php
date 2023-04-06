<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    require("class/MobilePhone.php");
    $phone = new MobilePhone();
    $phone ->delete($id);
        
    header("Location: index.php");
}
