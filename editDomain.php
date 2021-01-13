<?php
require_once('header.php');
require_once('dbConnection.php');
$id=$_GET['getID'];
$q="SELECT description FROM domain WHERE id='".$id."'";
$r=mysqli_query($con,$q);
$desc=mysqli_fetch_assoc($r);
$descDen=$desc['description'];
// echo $desc['description'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Domain</title>
</head>
<body>

<form class="form-inline" style="margin-left:450px;margin-right:1215px;border: 1px solid ;" action="updateDomain.php?id=<?php echo $id?>" method="POST">
        <div class="form-group">
            
            <input name="dom" type="txt" class="form-control"  id="domain" value=<?php echo $descDen?>>
        </div>

        <button name="update" type="submit" class="btn btn-default">Edit</button>
    </form>
</body>
</html>