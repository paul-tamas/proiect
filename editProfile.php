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







<!DOCTYPE html>
<html>
<head>
<title>MyApp edit profile</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="editProfileToDB.php" method="POST">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" value =<?php echo $user['nume']; ?>>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" value=<?php echo $user['prenume']; ?>>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
                            
			    				<input type="email" name="email" id="email" class="form-control input-sm" value=<?php echo $user['mail']; ?>>
			    			</div>
                            <div class="form-group">
			    				<input type="username" name="username" id="username" class="form-control input-sm" value=<?php echo $_SESSION['username']; ?>>
			    			</div>
			    			<button class="btn btn-info btn-block" name="updateProfile">Edit</button>
			    		
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>

</body>
</html>