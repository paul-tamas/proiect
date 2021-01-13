<?php
require_once('dbConnection.php');
//require_once('backend.php');
session_start();
if(isset($_SESSION['username'])){
//echo $_SESSION['username'];
$userQuery="SELECT id from users WHERE username='".$_SESSION['username']."'";
$userRes=mysqli_query($con,$userQuery);

if($userRes){
  $userID=mysqli_fetch_assoc($userRes);
 // echo $userID['id'];

}
$permQuery="SELECT permission FROM permissions WHERE id_users='".$userID['id']."'";
$permRes=mysqli_query($con,$permQuery);

?>


<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<body>

    <nav class="navbar navbar-expand-lg navbar-blue bg-blue">
        <a class="navbar-brand" href="index.php">MyApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profile.php">My Profile:<?php echo $_SESSION['username']?> </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Dashboard </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="addContent.php">Add Content </a>
                </li>
               

                <?php
        if($permRes){
          $perm=mysqli_fetch_assoc($permRes);
                    if(strcmp($perm['permission'],'administrator') == 0){

                    

          ?>
                <li class="nav-item active">
                    <a class="nav-link" href="viewAllContent.php">View all content </a>

                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="domain.php">Domain</a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="users.php">Users</a>
                </li>


                <?php
                    }
        }
        
        
        ?>

                       <li class="nav-item active">
                    <a class="nav-link" href="logout.php">Logout </a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0"action="search.php" method="POST">
                <input name="domainSearch"class="form-control mr-sm-2"  placeholder="Search domain" >
                <button name="search" class="btn btn-outline-success my-2 my-sm-0" >Search</button>
            </form>
        </div>
    </nav>
</body>
<?php

      }else{
        header('location:login.php');
      }
?>

</html>