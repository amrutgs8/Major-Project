<!DOCTYPE html>
<html>
    <body style="
    text-align: center;
    margin-top: 200px;
    font-size: 25px;
    background-image: url(login-img1.jpg); 
">
<style>
    .box{
        background-color:blue;
    }
    </style>
<?php

require_once ("db1.php");
//require_once ("component.php");

$con = Createdb();

// create button click


    $cust_id = $_REQUEST['cust_id'];
    $amount= $_REQUEST['amount'];
    $date=date('Y-m-d'); 
    $sql1="SELECT cust_id from customers where cust_id='$cust_id'";
    $result=mysqli_query($con,$sql1);
    
    if(mysqli_num_rows($result) == 1)
    {

         $sql = "INSERT INTO collections VALUES ('$date','$cust_id','$amount')";
         if(mysqli_query($con, $sql)){
         echo "<p style= 'font-size: 30px;color: black;background-color: #dae1e7;margin-right: 41px;text-align: center;border-radius: 7px;margin-left: 366px;margin-right: 414px;height: 60px;font-size: :30px;text-shadow: 139 134 pink;padding: 2px;'>
         Pigmy Collected for id:".$cust_id."<h3 style = 'font-size: 30px;color: black;background-color: #dae1e7;margin-right: 41px;text-align: center;border-radius: 7px;margin-left: 366px;margin-right: 414px;height: 60px;font-size: :30px;text-shadow: 139 134 pink;padding: 2px;'>Rupees = $amount</h3></p>";
         echo "<p style= 'font-size: 30px;color: black;background-color: #dae1e7;margin-right: 41px;text-align: center;border-radius: 7px;margin-left: 366px;margin-right: 414px;height: 60px;font-size: :30px;text-shadow: 139 134 pink;padding: 2px;'>You are safe to go back now or logout</p>";
         }
         else{
             echo"<p style= 'font-size: 30px;color: black;background-color: #dae1e7;margin-right: 41px;text-align: center;border-radius: 7px;margin-left: 186px;margin-right: 201px;height: 60px;font-size: :30px;text-shadow: 139 134 pink;padding: 2px;'>You have already entered todays collection......Come tomorrow</p>";
         }
    }
    else{
        echo "<p style= 'font-size: 30px;color: black;background-color: #dae1e7;margin-right: 41px;text-align: center;border-radius: 7px;margin-left: 186px;margin-right: 201px;height: 60px;font-size: :30px;text-shadow: 139 134 pink;padding: 2px;'>Entered Customer Id doesnt Exists in database</p>";
    }

    ?>
    </body>
        </html>