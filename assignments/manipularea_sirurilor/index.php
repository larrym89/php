<?php 

$users = array(
    array(1, "Peter", "Andersen", "peter@gmail.com"),
    array(2, "John", "Miller", "john@gmail.com"),
    array(3, "Thomas", "Swift", "thomas@gmail.com")
);

echo "<table border='1'>";
echo "<tr><th>id</th>";
echo "<th>fname</th>";
echo "<th>lname</th>";
echo "<th>email</th></tr>";

for($i=0; $i<count($users); $i++) {

    echo "<tr> <td>";
    echo ($users[$i][0]);
    echo "</td> <td>";
    echo ($users[$i][1]);
    echo "</td> <td>";
    echo ($users[$i][2]);
    echo "</td> <td>";
    echo ($users[$i][3]);
    echo "</td> </tr>";   

};

echo "</table>";

?>