<?php
session_start();
$username= $_POST['loginUsername'];
$loginPass= $_POST['loginPassword'];
 

require_once("dbConnection.php");
if(isset($_POST['submit'])){
    if(empty($username) || empty($loginPass)){
        $alertMessage="Fill all fields";
        
        header("location:login.php");
        echo ("<script>alert('".$alertMessage."');</script>");
    
    
}else{echo ("<script>alert('".$username."');</script>");
        $query = "SELECT parola FROM users WHERE username='".$username."'";
        $result = mysqli_query($con,$query);
        if($result){
            $alertMessage="read from db";
            $row= mysqli_fetch_assoc($result);
            echo ("<script>alert('".$alertMessage."');</script>");
            
               if(strcmp($loginPass,$row['parola']) == 0){
                
                $_SESSION['username']=$username;
                echo $_SESSION ['username'];
                $queryid = "SELECT id FROM users WHERE username='".$username."'";
        $result2 = mysqli_query($con,$queryid);
        $row1= mysqli_fetch_assoc($result2);
                $_SESSION['id']=$row1['id'];
                 echo $_SESSION['id'];
                   
                  header("location:index.php");
               
               } else {
                   header("location:login.php");
               }
            

        }
        else{
            $alertMessage="Can t read from database";
        
            echo ("<script>alert('".$alertMessage."');</script>");
        }
    }





}








?>