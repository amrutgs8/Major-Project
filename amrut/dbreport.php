<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $from_date=$_REQUEST['fromdate'];

   $to_date=$_REQUEST['todate'];

   #$sql = "SELECT cust_id, TC FROM collections where date= $date";
   $sql= "SELECT cust_id, TC  FROM collections WHERE created_at BETWEEN '$from_date' AND '$to_date' ";
   mysqli_select_db($conn,"pigmynew");

  
   $retval = mysqli_query($conn,$sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
   while($row = mysqli_fetch_array($retval)) {
    echo $row['cust_id']. " - ". $row['TC'];
    echo "<br />";
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>