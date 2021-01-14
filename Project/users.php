<?php
 require_once('header.php');
require_once('dbConnection.php');

$userQ="SELECT * FROM users";
$userR=mysqli_query($con,$userQ);

?>

<!DOCTYPE html>
<html>
<body>
    <form class style="margin-left:50px; margin-right:150px; background-color:dark">
        <table class="table">
            <thead>
                <tr>                   
                    <th scope="col">Nume</th>
                    <th scope="col">Prenume</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Tip Cont</th>
                    <th scope="col">Drepturi</th>
                    <th scope="col">Denumire drept administrator</th>
                    <th scope="col">Eliminare drept administrator</th>
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

            $perQ= "SELECT * FROM permissions WHERE id_user='".$id."'";
            $perR=mysqli_query($con,$perQ);

            if(!$perR){
                echo mysqli_error($con);
            }

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
                    <td><a href="creareAdmin.php?admID=<?php echo $id?>">Fa administrator</td>"
                    <td><a href="stergereAdmin.php?delAdmID=<?php echo $id?>">Ia administrator</td>"
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </form>
</body>

</html>