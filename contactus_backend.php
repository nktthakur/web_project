<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'dbcon.php';

if(isset($_POST['save'])){
            $firstname = $_POST['firstName'];
            $middlename = $_POST['middleName'];
            $lastname = $_POST['lastName'];
            $date = $_POST['date'];
            $address1 = $_POST['addressLine1'];
            $address2 = $_POST['addressLine2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $pfirstname = $_POST['pFirstName'];
            $pmiddlename = $_POST['pMiddleName'];
            $plastname = $_POST['pLastName'];
            $pnumber = $_POST['pNumber'];
           
            $query = "insert into std_reg values('$firstname' , '$middlename' , '$lastname' , '$date' , '$address1' , '$address2' , '$city' , '$state' , '$pnumber' , '$pfirstname' , '$pmiddlename' , '$plastname')";
    $res = mysqli_query($con , $query);
    
    if($res){
        echo '<script>alert("Successful")</script>';
        header('Location: login.php');
    }else{
        echo '<script>alert("Please fill all details properly")</script>';
        header('Location: stdreg.php');
    }
}

?>