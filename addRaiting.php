<?php
require_once('header.php');
require_once('dbConnection.php');
$id=$_GET['GetID'];


?>

<!DOCTYPE html>
<html>
<head>
<title>Raiting</title>
</head>
<body>

<form  class="form" action="addRaitingtoDB.php?id=<?php echo $id?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Insert your raiting here (0-5)</label>
    <input name="inputRaiting" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
  </div>
  <button name="update" class="btn btn-primary">Post Raiting</button>
</form>

</body>
</html>