<?php 

require_once('dbConnection.php');

    if(isset($_POST['delID'])){
        $id=$_GET['delID'];

        $query="DELETE FROM continut WHERE id='".$id."'";
        $result=mysqli_query($con, $query);
        
        if($result){
            header("location:dashboard.php");
        }else{
            echo "Nu se poate sterge";
        }
    }else{
        echo "Nu se poate sterge in acest moment";
    }

?>