<?php
session_start();
require_once('dbConnection.php');

$text=$_POST['textArea'];
$domeniu=$_POST['inputDomain'];

if(isset($_POST['saveContent'])){

    $dmQuery="SELECT id FROM domain WHERE description='".$domeniu."'";
    $dmRes=mysqli_query($con,$dmQuery);
    if($dmRes){

              $dm=mysqli_fetch_assoc($dmRes);
              $idUser=$_SESSION['id'];
              echo $idUser;
              $idDomain=$dm['id'];
              $contQuery="INSERT INTO continut (descriere,raiting,id_user,id_domain) VALUES ('$text',0,'$idUser','$idDomain')";

              $contRes=mysqli_query($con,$contQuery);

              if($contRes){
                 header('location:index.php');
             }else{
                echo mysqli_errno($con); 
              }
    }else{
        echo "can t insert content now2"; 
    }
}else{
    echo "can t insert content now3"; 
}
?>