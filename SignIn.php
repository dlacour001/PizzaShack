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
			$error="No";
			$sql= "SELECT First_Name, CustomerID, Email FROM Customer_Account WHERE Username='$user' AND Password= '$pass'";
		
			$result = $conn->query($sql);
			$data=$result->fetch_assoc();
			if(!$data)
				$error="yes";
			$name=$data["First_Name"];
			
			$userID=$data["CustomerID"];
			$email=$data["Email"];
			echo $address;
			$date = date("Y-m-d");
			$sql2= "INSERT INTO `Order`( Date, CustomerID) VALUES ('$date','$userID')";
			if ($conn->query($sql2) === TRUE) 
			{
			    echo "New record created successfully <br>";
			} 
			else 
			{
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql3="SELECT MAX(OrderID) FROM `Order` WHERE CustomerID='$userID' AND Date='$date'";
			$result = $conn->query($sql3);
			$data=$result->fetch_assoc();
			$orderID=$data["MAX(OrderID)"];
			echo $error;
					
			$conn->close();
		?>
		<script>
			var name="<?php echo $name ?>";
			var id = "<?php echo $userID ?>";
			var check="<?php echo $error ?>";
			if(check=="yes")
				location.replace("http://pizzashack.x10host.com/SignIn2");
			else
			{
				var orderID=parseInt("<?php echo $orderID ?>");
				var email = "<?php echo $email ?>";
				if (typeof(Storage) !== "undefined") 
				{	
					sessionStorage.setItem("name", name);
					sessionStorage.setItem("id", id);
					sessionStorage.setItem("loggedIn", "true");
					sessionStorage.setItem("orderID", orderID);
					sessionStorage.setItem("userEmail", email);
					sessionStorage.setItem("finalCart", 0);
				}
				location.replace("http://pizzashack.x10host.com/Home2");
			}
		</script>
		
	
		</body>
</html>
