<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        
   <title>net main hostel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
      
  
    </head>
    <body>
        <?php
        include'dbcon.php';
        if(isset($_POST['submit']))
        {
            $username= mysqli_real_escape_string($con, $_POST['username']);
              $email=mysqli_real_escape_string($con,$_POST['email']);
               $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
                $password=mysqli_real_escape_string($con,$_POST['password']);
                 $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
                 
            $pass=password_hash($password,PASSWORD_BCRYPT);
            $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
            $emailquery="select * from registration where email='$email'";
            $query=mysqli_query($con,$emailquery);
            $emailcount=mysqli_num_rows($query);
            if($emailcount>0){
                echo"email already exist";
                
            }
            else{
                if($password===$cpassword){
                    $insertquery="insert into registration(username,email,mobile,password,cpassword)values('$username','$email','$mobile','$pass','$cpass')";
                   $iquery=mysqli_query($con,$insertquery);
                   if($iquery)
                  {
                    ?>
                   <script>
                    alert("inserted successful");
                    </script>
                    <?php

                    }
                   else {
                       ?>
                      <script>
                      alert(" not inserted");
                       </script>
                       <?php
    
                      }
                            
                    
                       }else{
                     ?>
                     <script>
                      alert(" password are not matching");
                   </script>
                    <?php
                    }
                    }
                 }
                  ?>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width:400px">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input name="username" class="form-control" placeholder="Full name" type="text" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
                    </div>
                    <p class="text-center">Have an account?<a href="index.php">Log In</a></p>
                </form>
            </article>
                
         
               
            
        </div> 
   

    
        
        
        
        
        
        
        
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
</html>