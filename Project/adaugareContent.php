<?php

require_once('header.php');
require_once('dbConnection.php');
$query="SELECT * FROM domain";
$domainResult=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>

<body>
    <form class style="margin-left:50px; margin-right:50px; background-color:dark" action="adaugareContentDB.php"
        method='POST'>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Inserati povestea aici</label>
            <textarea name="textArea" class="form-control" id="textArea" rows="10"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Domeniu</label>
            </div>
            <select name="domeniu" class="custom-select" id="inputDomain" >
                <option selected>Alegeti categegoria din care face parte</option>
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
            <label for="exampleFormControlInput1">Inserati categoria povesti</label>
            <input name="inputDomain" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <button class="btn btn-info btn-md" style="margin-left:50px" name="saveContent">Save content</button>
        </div>

    </form>

</body>

</html>