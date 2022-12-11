<?php 

	if(isset($_POST['btnRegister'])){

		if(empty($err)){
            $con=openConnection();
		
				$strSql = "
							INSERT INTO tbl_user(name, username, password)
							VALUES (?,?,?)
						";
						
						
				if($stmt = mysqli_prepare($con, $strSql)){
				mysqli_stmt_bind_param($stmt, "sss",
										$name, $username, 
										$password);

					$name= $_POST['txtname'];
					$username= $_POST['txtusername'];
					$password= $_POST['txtpassword'];
					echo 'Record Successfully Added!';	
					mysqli_stmt_execute($stmt);

					header('location:product.php');
				}

				else{
					echo 'ERROR: Failed to insert Record!';
				}
				
				closeConnection($con);

		}	

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="static-login.css">
	<title>Register</title>

</head>
<body>
	<div class="container col-10 mt-5">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<div class="card">
						<header class="card-header">
							<a href="static-login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
							<h4 class="card-title mt-2">Sign up</h4>
						</header>
					<article class="card-body">
						<form method="post">
						<div class="form-row">
							<div class="col form-group">
								<label>Full Name </label>   
							  	<input class="form-control" type="text" name="txtname" id="txtname" placeholder="" required>
							</div> <!-- form-group end.// -->	
						</div> <!-- form-row end.// -->
						<div class="form-group">
								<label>Username</label>
							  	<input class="form-control" type="text" name="txtusername" id="txtusername" placeholder="" required>
						</div> <!-- form-group end.// -->
						<div class="form-group">
							<label>Password</label>
						    <input class="form-control" type="password" name="txtpassword" id="txtpassword" placeholder="" required>
						</div> <!-- form-group end.// -->  
					    <div class="form-group">
					        <button type="submit" class="btn btn-primary btn-block" name="btnRegister" value="Register"> Register  </button>
					    </div> <!-- form-group// -->      
					    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
					    </form>
					</article> <!-- card-body end .// -->
				</div> <!-- card.// -->
			</div> <!-- col.//-->
		</div> <!-- row.//-->
	</div> 
	<!--container end.//-->

	<br><br>
	</article>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>