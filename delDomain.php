<?php 

require_once('dbConnection.php');
if(isset($_GET['delID'])){
    $id=$_GET['delID'];
    
    $query="DELETE FROM domain WHERE id='".$id."'";
    $result=mysqli_query($con,$query);
    if($result){
        header("location:domain.php");
    }else{
        echo" can not delete now try again later";
    }
    
    }else{
        echo 'can t delete now';
    }




?>