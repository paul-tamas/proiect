<?php
//session_start();
require_once('header.php');
require_once('dbConnection.php');
$idUser= $_SESSION['id'];
$userQuery1="SELECT * from date_utilizator WHERE id_user='".$idUser."'";
$usRes=mysqli_query($con,$userQuery1);
$user=mysqli_fetch_assoc($usRes);
//echo $_SESSION['username'];

?>

<DOCTYPE>
    <html>

    <body>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="box box-widget widget-user">
                            <div class="widget-user-header bg-aqua-active">
                                <h3 class="widget-user-username"><?php echo $user['nume'] ?> <?php echo $user['prenume']?>  
                                <small>
                                <a href="editProfile.php?>">Edit profile</a>
                                </small>
                                </h3>
                                
                            </div>
                            <!-- <div class="widget-user-image"> <img class="img-circle"
                                    src="https://img.icons8.com/color/36/000000/administrator-male.png"
                                    alt="User Avatar"> </div>
                            <div class="box-footer"> -->
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">eMail</h5> <span
                                                class="description-text"><?php echo $user['mail']; ?></span>
                                        </div>
                                    </div>
                                    <p class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">Username</h5> <span
                                                class="description-text"><?php echo $_SESSION['username']; ?></span>
                                        </p>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>