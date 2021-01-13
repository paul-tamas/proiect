<?php
require_once('header.php');
require_once('dbConnection.php');
$query="SELECT * FROM domain";
$domainResult=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Content</title>
</head>

<body>
    <form class style="margin-left:50px; margin-right:50px; background-color:dark" action="addContentDB.php"
        method='POST'>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Insert your information here</label>
            <textarea name="textArea" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Domain</label>
            </div>
            <select name="domeniu" class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <?php
  while($domain=mysqli_fetch_assoc($domainResult)){
      
  
?>

                <option value=<?php $domain['id']?>><?php echo $domain['description'] ?></option>
                <?php
  }
    ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Insert here content domain</label>
            <input name="inputDomain" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">

            <button class="btn btn-info btn-md" style="margin-left:50px" name="saveContent">Save content</button>
        </div>
    </form>

</body>

</html>