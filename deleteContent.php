<?php 



require_once('dbConnection.php');
if(isset($_GET['DelID'])){
    $id=$_GET['DelID'];
    
    $query="DELETE FROM continut WHERE id='".$id."'";
    $result=mysqli_query($con,$query);
    if($result){
        header("location:dashboard.php");
    }else{
        echo" can not delete now try again later";
    }
    
    }else{
        echo 'can t delete now';
    }




?>