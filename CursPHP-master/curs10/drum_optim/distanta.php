<?php

/*
 * Original Files: https://github.com/DonVictor/PHP-Dijkstra
 * Modified for guide to show how to implement a user form - https://ncjsvr.co.uk/shortest-path-dijkstra-algorithm-with-user-input-in-php-html/
 * https://www.freecodecamp.org/news/dijkstras-shortest-path-algorithm-visual-introduction/
   */

$a = isset($_GET["from"])?$_GET["from"]:'';
$b = isset($_GET["to"])?$_GET["to"]:'';

require("Dijkstra.php");

	$g = new Graph();

$g->addedge("Bucuresti", "Constanta", 225);
$g->addedge("Constanta", "Bucuresti", 225);

$g->addedge("Bucuresti", "Craiova", 230);
$g->addedge("Craiova", "Bucuresti", 230);

$g->addedge("Constanta", "Galati", 190);
$g->addedge("Galati", "Constanta", 190);

$g->addedge("Brasov", "Craiova", 259);
$g->addedge("Craiova", "Brasov", 259);

	list($distances, $prev) = $g->paths_from("$a");
	
	$path = $g->paths_to($prev, "$b");


?>

<html>
<head>

</head>

<body>

<form method="GET"><div ><h2>Selectati ruta: Start si Stop</h2></div>
	<div><label></label><div>
	<select id="from" name="from">
<option value="" disabled selected>Select Start</option>
  <option value="Bucuresti">Bucuresti</option>
  <option value="Constanta">Constanta</option>
  <option value="Craiova">Craiova</option>
  <option value="Galati">Galati</option>
  <option value="Brasov">Brasov</option>
  <option value="Iasi">Iasi</option>
  <option value="Cluj">Cluj</option>
  <option value="Timisoara">Timisoara</option>
  </select>
	<div><label></label><div>
	<select id="to" name="to">
	<option value="" disabled selected>Select Stop</option>
  <option value="Bucuresti">Bucuresti</option>
  <option value="Constanta">Constanta</option>
  <option value="Craiova">Craiova</option>
  <option value="Galati">Galati</option>
  <option value="Brasov">Brasov</option>
  <option value="Iasi">Iasi</option>
  <option value="Cluj">Cluj</option>
  <option value="Timisoara">Timisoara</option>
</select>
	<p>Drumul cel mai scurt dintre <?php echo $a; ?> si <?php echo $b; ?> este:<br><?php echo implode(" <br>▼<br> ",$path); ?></p>
<div><input type="submit" value="Submit"/></div></form>



  
</body>
</html>