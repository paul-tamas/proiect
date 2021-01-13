<?php
require_once('dbConnection.php');
$desc=$_POST['dom'];
if(isset($_POST['addDomain'])){
 $decQuery="INSERT INTO domain (description) VALUES ('$desc')";
 $decRes= mysqli_query($con,$decQuery);
 if($decRes){
     header('location:domain.php');
 }
 else{
     echo"can t add new domain";
 }
}else{
    echo "can not add new domain";
}


?>