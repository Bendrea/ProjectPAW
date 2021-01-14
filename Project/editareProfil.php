<?php

require_once('header.php');
require_once('dbConnection.php');

$idUser=$_SESSION['id'];
$userQuery1="SELECT * from date_utilizator WHERE id_user='".$idUser."'";
$usRes=mysqli_query($con,$userQuery1);
$user=mysqli_fetch_assoc($usRes);


$userQuery2 = "SELECT * FROM users WHERE id='".$idUser."'";
$usRes1=mysqli_query($con, $userQuery2);
$user1=mysqli_fetch_assoc($usRes1);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
			  </ul>

            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                               
                    <h5 class="mb-3">Editare profil  </h5>
                    
                    <div class="row">
                        <div class="col-md-6">
                        <div class="tab-pane" id="edit">
                    <form role="form" action="editProfileToDB.php" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">First name</label>
                            <div class="col-lg-9">
							<input type="text" name="first_name" id="first_name" class="form-control input-sm" value =<?php echo $user['nume']; ?>>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                            <div class="col-lg-9">
							<input type="text" name="last_name" id="last_name" class="form-control input-sm" value=<?php echo $user['prenume']; ?>>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email" id="email" value="<?php echo $user['mail']?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="username" id="username" value="<?php echo $user1['username']?>">
                            </div>
                        </div>


			    			<button class="btn btn-info btn-block" name="updateProfile">Edit</button>
			    		
                    </form>
                        </div>

                    </div>
                    <!--/row-->
                </div>
            
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <img src="1.png" class="mx-auto img-fluid img-circle d-block" alt="avatar">

        </div>
    </div>
</div>

</body>
</html>