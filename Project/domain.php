<?php
 require_once('header.php');
require_once('dbConnection.php');
$domQ="SELECT * FROM domain";
$domR=mysqli_query($con,$domQ);

?>

<!DOCTYPE html>
<html>

<body>
    <form class="form-inline" action="adaugareDomeniu.php" method="POST">
        <div class="form-group">
            <label >New Domain</label>
            <input name="dom"  class="form-control" id="domain">
        </div>

        <button name="addDomain" type="submit" class="btn btn-default">Add</button>
    </form>
    <form class style="margin-left:150px; margin-right:150px; background-color:dark">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Denumire</th>
                    <th scope="col">Editare</th>
                    <th scope="col">Stergere</th>
                </tr>
            </thead>
            <tbody>

<?php
       while($dom=mysqli_fetch_assoc($domR)){

           $id=$dom['id'];
           $den=$dom['description'];

?>
                <tr>
                    <td><?php echo $id?></td>
                    <td><?php echo $den?></td>
                    <td><a href="editareDomeniu.php?getID=<?php echo $id?>">Edit</td>
                    <td><a href="stergereDomeniu.php?delID=<?php echo $id?>">Delete</td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </form>
</body>

</html>