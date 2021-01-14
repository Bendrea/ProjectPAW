<!DOCTYPE html>
<html>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">
<body>

<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>INREGISTRARE</p>
                </div>

				<form role="form" action="registerToDB.php" method="POST">

                    <div class="form-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address"/>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value=""/>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value=""/>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" value=""/>
                                </div>

                            </div>
                        </div>
						<button class="btn btn-info btn-block" name="submit">Register</button>
                    </div>
				
                </form>  
            </div>
        </div>
</body>
</html>