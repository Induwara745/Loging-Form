<?php
		 
		 $host = "localhost";
		 $username = "root";
		 $password = "";
		 $database = "USER";

		 $conn = new mysqli($host, $username, $password, $database);

		 if($conn->connect_error) {
		 	die("Connection failed:" .$conn->connect_error);
		 }

		 $User = $conn->real_escape_string($_POST["UN"]);
		 $Password = $conn->real_escape_string($_POST["PW"]);

		 $sql = "INSERT INTO Loging (UN,PW) VALUES ('$User' , '$Password')";

		 if($conn->query($sql) === TRUE) {
		 	echo "You Have Registered Successfully";
		 }
		 else {
		 	echo "Error" .$sql ."<br>" .$conn->error;
		 }

		 $conn->close();
?>
