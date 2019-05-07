<html>
	<body>
		<?php
			$servername = "localhost";
			$username = "pizzash3_user1";
			$password = "775009sp";
			$dbname = "pizzash3_Database";
			$max;
			$imageName;
			$productID;
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn)
			{
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql="SELECT MAX(OrderFreq) FROM Products";
			$result = $conn->query($sql);
			$data=$result->fetch_assoc();
			$max=$data["MAX(OrderFreq)"];
			$sql2="SELECT ProductID, ImageName FROM Products WHERE OrderFreq= '$max'";
			$result2 = $conn->query($sql2);
			$data2=$result2->fetch_assoc();
			$reqProductID=$data2["ProductID"];
			$reqImageName=$data2["ImageName"];
			$sql3="SELECT MAX(Discount) FROM Products";
			$result3 = $conn->query($sql3);
			$data3=$result3->fetch_assoc();
			$max=$data3["MAX(Discount)"];
			$sql4= "SELECT ProductID, ImageName FROM Products WHERE Discount= '$max'";
			$result4 = $conn->query($sql4);
			$data4=$result4->fetch_assoc();
			$dealImage=$data4["ImageName"];
			$dealID=$data4["ProductID"];
			
			$conn->close();
		?>
		<script>
			var reqImageName="<?php echo $reqImageName ?>";
			var reqProductID = "<?php echo $reqProductID ?>";
			var dealImageName="<?php echo $dealImage ?>";
			var dealProductID = "<?php echo $dealID ?>";			
			if (typeof(Storage) !== "undefined") 
			{	
				sessionStorage.setItem("reqImageName", reqImageName);	
				sessionStorage.setItem("reqProductID", reqProductID);	
				sessionStorage.setItem("dealImageName", dealImageName);	
				sessionStorage.setItem("dealProductID", dealProductID);			
			}		
			
			location.replace("http://pizzashack.x10host.com/Home"); 
		</script>
	</body>
</html>
