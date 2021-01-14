<?php
require_once('header.php');
require_once('dbConnection.php');
$id=$_GET['GetID'];

?>

<!DOCTYPE html>
<html>

<body>

<form  class="form" action="adaugareRaitindDB.php?id=<?php echo $id?>" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Ofera o nota (0 - 5)</label>
    <input name="inputRaiting" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >    
  </div>

  <button name="update" class="btn btn-primary">Postare Raiting</button>
  
</form>

</body>
</html>