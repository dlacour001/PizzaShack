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
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$fname=$_POST['f_name'];
			$lname=$_POST['l_name'];
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$email=$_POST['email'];
			$phone=$_POST['phonenumber'];
			$s_addr=$_POST['s_address'];
			$c_addr=$_POST['c_address'];
			$st_addr=$_POST['st_address'];
			$z_addr=$_POST['z_address'];
			
			$sql = "INSERT INTO Customer_Account(Username, First_Name, Last_Name, Password, Email, Phone, Street_Address, City, State, Zip) VALUES ('$user', '$fname', '$lname', '$pass', '$email', $phone , '$s_addr', '$c_addr', '$st_addr', $z_addr)";
			
			if ($conn->query($sql) === TRUE) 
			{
			    echo "New record created successfully <br>";
			} 
			else 
			{
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$sql= "SELECT First_Name, CustomerID FROM Customer_Account WHERE Username='$user' AND Password= '$pass'";
			$result = $conn->query($sql);
			$data=$result->fetch_assoc();			
			$name=$data["First_Name"];
			$userID=$data["CustomerID"];			
			
			
			echo 'Connected';
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
