<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        
   <title>net main hostel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head>
    <body class="text-white bg-dark ">
       <?php include('header.php'); ?>
        
       <?php include('contactus_backend.php'); ?>
        
       <div class="conatiner">
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
        <form class="form-horizontal" role="form" method="POST" action="contactus_backend.php">
        <fieldset>

          <!-- Form Name -->
          <legend style="padding-top: 70px;">Personal Information Details </legend>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="firstName" placeholder="First Name" class="form-control">
            </div>
            <div class="col-sm-2">
              <input type="text" name="middleName" placeholder="Middle Name" class="form-control">
            </div>
            <div class="col-sm-4">
              <input type="text" name="lastName" placeholder="Last Name" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="date" placeholder="Date Of Birth" name="date" class="form-control">
            </div>
          </div>
<!-- Address Section -->
          <!-- Form Name -->
          <legend>Address Details</legend>
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" name="addressLine1" placeholder="Address Line 1" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-10">
              <input type="text" name="addressLine2" placeholder="Address Line 2" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="city" placeholder="City" class="form-control">
            </div>
            <div class="col-sm-2">
              <input type="text" name="state" placeholder="State" class="form-control">
            </div>
          </div>
          <!-- Form Name -->
          <legend>Parent/Guadian Information</legend>
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <input type="text" name="pFirstName" placeholder="First Name" class="form-control">
            </div>
            <div class="col-sm-2">
              <input type="text" name="pMiddleName" placeholder="Middle Name" class="form-control">
            </div>
            <div class="col-sm-4">
              <input type="text" name="pLastName" placeholder="Last Name" class="form-control">
            </div>
              <div class="col-md-5">
                  <input type="text" name="pNumber" placeholder="Phone Number" class="form-control">
              </div>
          </div>
          <div class="form-group">
            <div class="col-sm-5 col-sm-offset-1">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="save" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
    </div>


 <?php include 'footer.php'?>
    </body>
</html>