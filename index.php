
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
        include 'dbcon.php';
        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $email_search="select * from registration where email='$email'";
            $query=mysqli_query($con,$email_search);
            $email_count=mysqli_num_rows($query);
            if($email_count){
                $email_pass=mysqli_fetch_assoc($query);
                $db_pass=$email_pass['password'];
                
                
                $pass_decode=password_verify($password,$db_pass);
                if($pass_decode){
                    echo"login successful";
                    $_SESSION['logedin']=true;
                    ?>
        <script>
            location.replace("login.php");
            </script>
            <?php
                }else{
                    echo"password incorrect";
                }
            }else{
                echo"invalid email";
            }
            
        }
        ?>
        
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width:400px">
                <h4 class="card-title mt-3 text-center">Create Account</h4>

                <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Full name" type="email" >
                    </div>
                    
                   
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password" name="password" value="" >
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Log In</button>
                    </div>
                    <p class="text-center"> not Have an account?<a href="registration.php">Sign Up</a></p>
                </form>
            </article>
                
         
               
            
        </div> 
   