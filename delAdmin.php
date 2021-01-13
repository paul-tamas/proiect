<?php 

require_once('dbConnection.php');
if(isset($_GET['delAdmID'])){
    $id=$_GET['delAdmID'];
    $tip='utilizator';
    $query="UPDATE permissions SET permission ='".$tip."' WHERE id_users='".$id."'";
    $result=mysqli_query($con,$query);
    if($result){  
                header("location:users.php");
    }else{
        echo 'can not delete now';
    }
    
    }else{
        echo 'can t delete now';
    }




?>