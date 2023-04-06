<?php
//exceptii
ini_set("display_errors", "E_All");
try {
    // init bootstrapping phase
 
    $config_file_path = "config.php";
    //include($config_file_path);
    if (!file_exists($config_file_path))
    {
     throw new Exception("Fisierul de configurare nu a fost gasit!");
     echo "nu se mai executa codul de dupa throw";
    }
  
    // continue execution of the bootstrapping phase
} catch (Exception $e) {
    echo 'Mesajul de eroare "prins": ' . $e->getMessage();
}
finally{
    echo "finally se executa mereu";
}
?>