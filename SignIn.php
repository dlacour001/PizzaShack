<html>
	<body>
		<?php
			$servername = "localhost";
			$username = "pizzash3_user1";
			$password = "775009sp";
			$dbname = "pizzash3_Database";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn)
			{
			    die("Connection failed: " . mysqli_connect_error());
			}
			$user=$_POST['username'];
			$pass=$_POST['password'];
			
			$sql= "SELECT First_Name, CustomerID FROM Customer_Account WHERE Username='$user' AND Password= '$pass'";
			$result = $conn->query($sql);
			$data=$result->fetch_assoc();
			echo $data["First_Name"];
			$name=$data["First_Name"];
			$userID=$data["CustomerID"];
			echo $userID;
			echo "TEST3";
			$conn->close();
		?>
		<script>
			var name="<?php echo $name ?>";
			var id = "<?php echo $userID ?>";
			if (typeof(Storage) !== "undefined") 
			{	
				localStorage.setItem("name", name);
				localStorage.setItem("id", id);
			} 
			location.replace("http://pizzashack.x10host.com/")	
		</script>
		
	
		</body>
</html>
