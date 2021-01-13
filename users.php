<?php
 require_once('header.php');
require_once('dbConnection.php');
$userQ="SELECT * FROM users";
$userR=mysqli_query($con,$userQ);
?>




<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
    <form class="form-inline" style="margin-left:450px;margin-right:1320px;border: 1px solid ;" action="registerAdmin.php" method="POST">
        <div class="form-group">
            <label >Register New Admin</label>
        </div>

        <button name="addDomain" type="submit" class="btn btn-default">Add</button>
    </form>
    <form class style="margin-left:150px; margin-right:150px; background-color:dark">


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nume</th>
                    <th scope="col">Prenume</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">Username</th>
                    <th scope="col">Tip Cont</th>
                    <th scope="col">Fa administrator</th>
                    <th scope="col">Ia administrator</th>
                </tr>
            </thead>
            <tbody>
                <?php
       while($user=mysqli_fetch_assoc($userR)){

           $id=$user['id'];
           $username=$user['username'];
           $pQ="SELECT * FROM date_utilizator WHERE id_user='".$id."'";
           $pR=mysqli_query($con,$pQ);
           $p=mysqli_fetch_assoc($pR);
           $nume=$p['nume'];
           $prenume=$p['prenume'];
           $email=$p['mail'];
            $perQ= "SELECT * FROM permissions WHERE id_users='".$id."'";
            $perR=mysqli_query($con,$perQ);
            $per=mysqli_fetch_assoc($perR);
            $tip=$per['permission'];
    
    
    
    ?>
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $nume?></td>
                    <td><?php echo $prenume?></td>
                    <td><?php echo $email?></td>
                    <td><?php echo $username?></td>
                    <td><?php echo $tip?></td>
                    <td><a href="makeAdmin.php?admID=<?php echo $id?>">Fa administrator</td>"
                    <td><a href="delAdmin.php?delAdmID=<?php echo $id?>">Ia administrator</td>"
                </tr>
                <?php
    }
    
    ?>
            </tbody>
        </table>
    </form>
</body>

</html>