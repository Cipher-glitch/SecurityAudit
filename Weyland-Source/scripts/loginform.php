<?php
require_once("conn.php");

//Need to get the data
if (isset($_GET["fm-username"])){
     $username = $_GET["fm-username"];
     $password = $_GET["fm-pass"];
     //Input Sanitisation
     
     $cleanname = $username;
     #$cleanpass = $password;  //md5($password)
     $cleanpass = md5($password);
     //Query for the User

     //$qry = "SELECT * FROM user WHERE email='".$cleanname."' AND password='".$cleanpass."';";
     $qry = "SELECT * FROM hashuser WHERE username='".$cleanname."' AND password='".$cleanpass."';";
     
     $result = $conn -> query($qry) or die(mysqli_error($conn));;

     if ($result->num_rows == 1){
         $row = $result->fetch_assoc();         
         echo ("<div class='alert alert-success'>Login as ".$row['firstname']." Success</div>");
         echo ("<div class='alert alert-success'>Have a Flag:  CUEH{Finding_The_Limit}</div>");
     }
     else if ($result->num_rows > 1){
         echo ("<div class='alert alert-warning'>Too Many Matches</div>");
     }
     else {
         echo ("<div class='alert alert-warning'>No such user or password</div>");
     }
         
  }

?>
