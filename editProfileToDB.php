<?php
session_start();
require_once('dbConnection.php');
$nume=$_POST['first_name'];
$prenume=$_POST['last_name'];
$email=$_POST['email'];
$userName=$_POST['username'];
$id=$_SESSION['id'];
echo $nume;

if(isset($_POST['updateProfile'])){

          $updateProfileQuery="UPDATE date_utilizator SET nume='".$nume."',prenume='".$prenume."',mail='".$email."'
           WHERE id_user='".$id."'";
          $updateProfileRes=mysqli_query($con,$updateProfileQuery);
          if($updateProfileQuery){
                            $upQuery="UPDATE users SET username='".$userName."'WHERE id='".$_SESSION['id']."'";
                            $upRes=mysqli_query($con,$upQuery);
                            if($upRes){
                                if(strcmp($_SESSION['username'],$userName) == 0){
                                    header('location:profile.php');

                                }else{
                                    header('location:logout.php');
                                }
                            }else{
                                header('location:editProfile.php');
                            }
                            
          }else{
              header('location:editProfile.php');
          }







}else{
    header('location:editProfile.php');
}

?>