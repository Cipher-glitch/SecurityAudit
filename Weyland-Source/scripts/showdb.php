<?php
require_once("conn.php");
require_once("sanitize.php");
//Display data from a Database in a table


if (isset($_GET["searchControl"])){
    $input = $_GET["searchControl"];
    $cleaninput = stripAllTags($input);
    $qry = "select * from hashuser WHERE firstname LIKE '%".$cleaninput."%' OR lastname LIKE '%".$cleaninput."%'  ;";
    //$qry = "select * from hashuser  email ".$cleaninput.";";
}
else {
    $qry = "select * from hashuser;";
}

//echo $qry;
$result = $conn -> query($qry) or die(mysqli_error($conn));


if ($result -> num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["firstname"]."</td>";
        echo "<td>".$row["lastname"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";   
    }
}
    
?>
