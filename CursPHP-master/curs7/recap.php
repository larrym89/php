<?php


//1.
$sir1="Popescu Mihaela";
$sir2="Popescu Mihai";
if(strcmp($sir1, $sir2))
echo "Sirurile sunt diferite!";
else
echo "Sirurile sunt egale!";

//2.
$sir1="Popescu Mihaela";
$sir2="Popescu Mihai";
if(strpos($sir1, $sir2))
echo "Subsirurile sunt diferite!";
else
echo "Subsirurile sunt egale!";

//3.
$sir1="popescu mihai";
$sir2="Popescu Mihai";
if(strcasecmp($sir1, $sir2))
echo "Sirurile sunt diferite!";
else
echo "Sirurile sunt egale!";

//4.
$sir1="Popescu Mihaela";
$sir2="Popescu Mihai";
if(strncmp($sir1, $sir2, 12))
echo "Subsirurile sunt diferite!";
else
echo "Subsirurile sunt egale!";

//5.
$sir1="PoPeSCu ioN";
echo ucwords(strtolower($sir1));