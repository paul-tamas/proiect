<?php 

require_once('dbConnection.php');
if(isset($_GET['admID'])){
    $id=$_GET['admID'];
    echo $id;
    $tip='administrator';
    $queryu="UPDATE permissions SET permission='".$tip."' WHERE id_users='".$id."'";
    $resultp=mysqli_query($con,$queryu);
    if($resultp){
        header("location:users.php");
    }else{
        echo" can not make it now try again later";
        echo mysqli_error($con);
    }
    
    }else{
        echo 'can t make it now';
    }




?>