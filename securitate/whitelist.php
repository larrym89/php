<?php

$whitelist = array("home", "page1", "page2", "page3", "page4");

if(isset($_GET['page'])) {
    
    if(in_array($_GET['page'], $whitelist)) {

        include($_GET['page'] . ".php");        

    } else {

        include("home.php");        

    }

}