<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "pigmydb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		//$date = $_REQUEST['date'];
		$a1 = $_REQUEST['a1'];
		$a2 = $_REQUEST['a2'];
		$a3 = $_REQUEST['a3'];
		$a4 = $_REQUEST['a4'];
		$a5 = $_REQUEST['a5'];
		$a6 = $_REQUEST['a6'];
        $a7 = $_REQUEST['a7'];
		$a8 = $_REQUEST['a8'];
		$a9 = $_REQUEST['a9'];
		$a10 = $_REQUEST['a10'];
		$total=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10;
		
		
		// Performing insert query execution
		// here our table name is college
		$date=date('Y-m-d');
		$sql = "INSERT INTO collection VALUES ('$date',
			'$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$total')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";
            echo "<h3>Today's Report</h3>";
			echo" <h3>Account holder--------today's collection</h3>";
			echo "<h4> a1-------------------------------------- ".$a1."</h4>";
			echo "<h4> a2-------------------------------------- ".$a2."</h4>";
			echo "<h4> a3-------------------------------------- ".$a3."</h4>";
			echo "<h4> a4-------------------------------------- ".$a4."</h4>";
			echo "<h4> a5-------------------------------------- ".$a5."</h4>";
			echo "<h4> a6-------------------------------------- ".$a6."</h4>";
			echo "<h4> a7-------------------------------------- ".$a7."</h4>";
			echo "<h4> a8-------------------------------------- ".$a8."</h4>";
			echo "<h4> a9-------------------------------------- ".$a9."</h4>";
			echo "<h4> a10------------------------------------- ".$a10."</h4>";
			echo "<h2>Today's total collection is ". ($a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10)."</h2>";

		} else{
			echo " You have already entered today's collection please come tommorow..!!";
		}
		
		// Close connection
		mysqli_close($conn);
		?>