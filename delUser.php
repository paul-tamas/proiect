<?php 

require_once('dbConnection.php');
if(isset($_GET['delUserID'])){
    $id=$_GET['delUserID'];
    echo $id;
    $query="DELETE FROM date_utilizator WHERE id_user='".$id."'";
    $result=mysqli_query($con,$query);
    if($result){
        $delQ2="DELETE FROM permissions WHERE id_user='".$id."'";
        $delR2=mysqli_query($con,$delQ2);
         
            if($delR2){
                $delQ1="DELETE FROM continut WHERE id_user='".$id."'";
                $delR1=mysqli_query($con,$delQ1);
                if($delR1){
                    $delQ="DELETE FROM users WHERE id='".$id."'";
                    $delR=mysqli_query($con,$delQ);
                    if($delR){
                        header("location:users.php");
                    } else{
                        echo "can not delete now try again later";
                    }
                } else{
                    echo "can not delete now try again later";
                }

            }else{
                echo "can not delete now try again later";
            }
       // 
    }else{
        echo" can not delete now try again later";
    }
    
    }else{
        echo 'can t delete now';
    }




?>