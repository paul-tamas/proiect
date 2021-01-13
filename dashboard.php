<?php
require_once('header.php');
require_once('dbConnection.php');
$idUser=$_SESSION['id'];
// $countQuery="SELECT Count(*) FROM continut WHERE id_user='".$idUser."'";
// $countRes=mysqli_query($con,$countQuery);


$read="SELECT * FROM continut WHERE id_user='".$idUser."'";
$readRes=mysqli_query($con,$read);
$count= mysqli_num_rows($readRes);
//echo $count;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h3 class="text-sm-left">Postari: <?php echo $count ?> <br>
                   
                </h3>
                <?php
  while($row = mysqli_fetch_assoc($readRes)){
      $text = $row['descriere'];
      $raiting=$row['raiting'];
      $selectAutor="SELECT username FROM users WHERE id='".$row['id_user']."'";
     // echo $row['id_user'];
      $autorResult = mysqli_query($con,$selectAutor);
      $queryDomain= "SELECT description FROM domain WHERE id='".$row['id_domain']."'";
      $domainRes = mysqli_query($con,$queryDomain);
      $autor=mysqli_fetch_assoc($autorResult);
     // echo $autor['username'];
      $domain=mysqli_fetch_assoc($domainRes);
  
    ?>
                <!-- <textarea class="form-control form-control-lg mb-3" rows="10">Adaugat de:<?php echo $autor['username'] ?> Domeniu: <?php echo $domain['description'] ?> Raiting:<?php echo $raiting ?></textarea> -->
                <strong class="text-sm-left">
                    Domeniu: <?php echo $domain['description'] ?><br>
                    Raiting:<?php echo $raiting ?>  <a href="deleteContent.php?DelID=<?php echo $row['id']?>">Delete Content</a>
                </strong>
                <p class="text-sm-left"><?php echo $text ?></p>
                <!-- <textarea class="form-control form-control-lg mb-3" rows="10"><?php echo $text ?></textarea> -->

                <?php
      }
      ?>

            </div>
        </div>
    </div>

</body>

</html>