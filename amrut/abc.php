<!DOCTYPE html>
<html>
    <body style = "
    
    text-align: center;
    font-size: 25px;
    color: black;
    background-color: #1b3d63;">

<?PHP

/*
$data =$_POST['cust_id'];


$benki=shell_exec("python xyz.py $data");

echo $benki;
*/
?>


<?php

require_once ("db1.php");
//require_once ("component.php");

$con = Createdb();

// create button click


    $data = $_REQUEST['cust_id']; 
    $sql1="SELECT cust_id from customers where cust_id='$data'";
    $result=mysqli_query($con,$sql1);
    if(mysqli_num_rows($result) == 1)
    {
        $benki=shell_exec("python xyz.py $data");
        echo "<pre style='background-color:white; margin-left:213px; margin-top:157px; margin-right:184px;'>";
        print_r($benki);
        echo "</pre>";

    }
    else{
        echo "Entered Customer Id doesnt Exists in database";
    }

?>
</body>
</html>
