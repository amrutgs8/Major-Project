<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css">
    <style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3 pigmy">
        <div class="panel panel-primary " style="width: 487px; height: 196px">
          <div class="panel-heading text-center">
            <h1>Pigmy Collection</h1>
          </div>
          <?php

require_once ("db1.php");
//require_once ("component.php");

$con = Createdb();

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

 
  $date=$_REQUEST['date'];
  $sql = "SELECT cust_id,TC FROM collections where date='$date'";
  $result = mysqli_query($con, $sql);


 
if (mysqli_num_rows($result) > 0) {
echo "<table border='1'>

<tr>

<th>Customer Id</th>

<th>Collection</th>

</tr>";

 

while($row = mysqli_fetch_assoc($result))

  {

  echo "<tr>";

  echo "<td>" . $row['cust_id'] . "</td>";

  echo "<td>" . $row['TC'] . "</td>";

  echo "</tr>";

  }

echo "</table>";
}
else{
  echo "<p style=' color:white;'>No collections are collected on $date<p>";
}
 

mysqli_close($con);

?>

        </div>
      </div>
    </div>
    
  </body>
</html>
