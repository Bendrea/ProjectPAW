<?php 

require_once('dbConnection.php');

if(isset($_GET['delID'])){

    $id=$_GET['delID'];
    
    $query="DELETE FROM domain WHERE id='".$id."'";
    $result=mysqli_query($con,$query);
    
    if($result){
        header("location:domain.php");
    }else{
        echo" Eroare, nu se poate sterge";
    }
    
    }else{
        echo 'NU se poate sterge';
    }




?>