<?php
session_start();
 require_once('dbConnection.php');

$text=$_POST['textArea'];
$domeniu=$_POST['inputDomain'];
echo $text;
echo '\n';
echo $domeniu;


if(isset($_POST['saveContent'])){

    $dmQuery="SELECT id FROM domain WHERE description='".$domeniu."'";
    $dmRes=mysqli_query($con,$dmQuery);
    if($dmRes){
              $dm=mysqli_fetch_assoc($dmRes);
              $idUser=$_SESSION['id'];
              $idDomain=$dm['id'];
              $contQuery="INSERT INTO continut (descriere, raiting, id_user,id_domain) VALUES ('$text',0,'$idUser','$idDomain')";
              $contRes=mysqli_query($con,$contQuery);
              if($contRes){

header('location:index.php');



              }
              else{
                echo "can t insert content now"; 
              }
    }else{
        echo "can t insert content now"; 
    }






}else{
    echo "can t insert content now"; 
}



?>