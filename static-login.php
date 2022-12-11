<?php require_once("functions.php");?>
<?php
    session_start();
              
    $con = openConnection();
    if(isset($_POST['btnSignInUser'])){
       
 
        $username = htmlspecialchars($_POST['txtusername']);
        $password = htmlspecialchars($_POST['txtpassword']);
  
        $strSql= "
                    SELECT * FROM tbl_user 
                    WHERE   username = '$username'
                    AND password = '$password'
                ";
         
        if($rsUser = mysqli_query($con, $strSql)){
            if(mysqli_num_rows($rsUser) > 0){
                echo "Valid Username/Password!";
                header('location:product.php');
                mysqli_free_result($rsUser);
            }
            else{
               echo "Invalid Username/Password!";
            }
        }
        else{
            echo 'ERROR: Could not execute your request.';
        }
        closeConnection($con);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="static-login.css">
    <title>Static Login</title>
</head>
<body>    
    <div class="container">
         <div class="d-flex justify-content-center my-5 mt-5">
            <div class="card mx-auto col-4 md-3  ">   

                    <img id="profile-img" class="profile-img-card mt-4" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                    <p id="profile-name" class="profile-name-card">Admin Log-In</p>
                    <form class="form-signin" method="post">            
                        <input type="text" name="txtusername" id="txtusername" class="form-control" placeholder="Username" required >
                        <br>
                        <input type="password" name="txtpassword" id="txtpassword" class="form-control" placeholder="Password" required>     
                        <br>           
                        <button type="submit" name="btnSignInUser" class="btn btn-lg btn-primary btn-block btn-signin" >Log in</button>
                    </form>
                        <a href="change-password.php" class="ForgetPwd" value="Login">Change Password?</a>
                        <div class="border-top card-body text-center">Create a Account? <a href="register.php">Sign Up</a></div>
                </div>              
            </div>
         </div>    
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>