<?php
require_once('dbConnection.php');
if(isset($_POST['update'])){
         $id=$_GET['id'];
         
         $txt=$_POST['dom'];
         $upQ="UPDATE domain SET description='".$txt."'WHERE id='".$id."'";
         $upR=mysqli_query($con,$upQ);
         if($upR){
                    header('location:domain.php');
         }else{
             echo 'can t update domain';
         }
}else{
    echo 'can not update domain';
}



?>