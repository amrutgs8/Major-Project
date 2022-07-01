<?php

function Createdb2(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pigmynew";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
        CREATE TABLE IF NOT EXISTS customers(
            cust_id INT NOT NULL AUTO INCREMENT,
            dateoj DATE,
            firstName VARCHAR(10),
            lastName VARCHAR(10),
            email VARCHAR(20),
            phone INT,
            PRIMARY KEY(cust_id)
        ); ";
        
        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Cannot Create table...!";
        }



    }else{
        echo "Error while creating database ". mysqli_error($con);
    }

    
	

}
