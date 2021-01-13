<?php
require_once('dbConnection.php');
if(isset($_POST['update'])){
$id=$_GET['id'];
$userRaiting=$_POST['inputRaiting'];

$oldRaitingQuery="SELECT raiting FROM continut WHERE id='".$id."'";
$oldRaitingRes=mysqli_query($con,$oldRaitingQuery);
$oldRaitingDB=mysqli_fetch_assoc($oldRaitingRes);
$oldRaiting=$oldRaitingDB['raiting'];
echo ($oldRaiting+$userRaiting)/2;
$newRaiting=($oldRaiting+$userRaiting)/2;
$updateQuery="UPDATE continut SET raiting='".$newRaiting."' WHERE id='".$id."";
$updateRes=mysqli_query($con,$updateQuery);
if($updateRes){
    header('location:index.php');

}
else{
    echo "Can t give raiting now, try again later";
}


}



?>