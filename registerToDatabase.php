<?php 

$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confPassword=$_POST['password_confirmation'];


require_once("dbConnection.php");
if(isset($_POST['submit'])){
    if(empty($username) || empty($password) || empty($confPassword)|| empty($email)||empty($last_name)||empty($first_name)){
        
        header("location:register.php");
           
    }else{ $userQuery="SELECT username FROM users WHERE username='".$username."'";
            $userResult=mysqli_query($con,$userQuery);
            $user=mysqli_fetch_assoc($userResult);
            if(empty($user)){
                if(strcmp($password,$confPassword) == 0){
            
                 $query = "SELECT * FROM users";
                    $result = mysqli_query($con,$query);
                    if($result){
    
                         $id;
                        while($row=mysqli_fetch_assoc($result)){
                        $id= $row['id'];

                    }
       
                        $id=$id+1;
 
                        $insert="INSERT INTO date_utilizator (nume,prenume,mail,id_user) VALUES ('$first_name','$last_name','$email','$id')";
                     $insertUser = "INSERT INTO users(username,parola) VALUES('$username','$password')";
                     $insertPermission="INSERT INTO permissions (id_users) VALUES ('$id')";
                     $resultUser=mysqli_query($con,$insertUser);
                    if($resultUser){
    
                        $resultIns=mysqli_query($con,$insert);
                        if($resultIns){
                            $resultPermission=mysqli_query($con,$insertPermission);
                            if($resultPermission){
                                header('location:login.php');

                            }
                            else{

                                header('location:register.php');
                            }

                          
                         }else{
                                header('locatio:register.php');
                            }
 
                        }else{
                                 header('location:register.php');
                            }

                    }else{
                             echo ("Can t register");
                        }


                 }else {
                    header('location:register.php');
                    }
            }else{
                header('location:register.php');
            }
           
         }

    }
    else{
        echo 'plm';
   
}



?>