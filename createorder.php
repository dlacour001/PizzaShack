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
			echo 'Connected';
			$size=$_POST['size'];
			$quantity=$_POST['quantity'];
			$quantity2=$quantity;
			$productID=$_POST['productID'];
			$orderID=$_POST['orderID'];
			$sql4 = "SELECT QTY FROM OrderProducts WHERE OrderID='$orderID' AND ProductID = '$productID'";
			$result = $conn->query($sql4);
			if(mysqli_num_rows($result) > 0)
			{
				$data=$result->fetch_assoc();
				$qty = $data["QTY"];
				$quantity2=$qty + $quantity2;
				echo $quantity;
				$sql5="	UPDATE OrderProducts SET QTY = '$quantity2' WHERE OrderID='$orderID' AND ProductID = '$productID'";
				if ($conn->query($sql5) === TRUE) 
				{
				    echo "New record created successfully <br>";
				} 
				else 
				{
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			else
			{
				$sql= "INSERT INTO OrderProducts(OrderID, ProductID, Size, QTY) VALUES('$orderID','$productID','$size','$quantity') ";	
				if ($conn->query($sql) === TRUE) 
				{
				    echo "New record created successfully <br>";
				} 
				else 
				{
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}			
			$sql2 ="SELECT Price FROM Products WHERE ProductID='$productID'";
			$result = $conn->query($sql2);
			$data=$result->fetch_assoc();
			$price = $data["Price"];
			$sql3 ="SELECT Discount FROM Products WHERE ProductID='$productID'";
			$result = $conn->query($sql3);
			$data=$result->fetch_assoc();
			$dis = $data["Discount"];
			
			mysqli_close($conn);
		?>
		
    		<script>		
			var num=parseInt(sessionStorage.getItem("itemsInCart"));
			var quantity= parseInt("<?php echo $quantity ?>");
			var itemID =parseInt("<?php echo $productID ?>");	
			var size="<?php echo $size ?>";	
			var quantity2 = parseInt("<?php echo $quantity2 ?>");
			document.writeln(quantity2);
			var cost =  parseInt("<?php echo $price ?>");
			var discount=  parseInt("<?php echo $dis ?>");
			var priceMod;
			if(size=="Large")
				priceMod=5;
			else
				priceMod=0;
			document.writeln(quantity);
			if(discount>0)
				discount=discount/100;
			cost=cost-(cost*discount);
			cost=cost+priceMod;
			document.writeln(num);	
			num=num+quantity;
			sessionStorage.setItem("itemsInCart", num);			
			if(itemID==1)
			{
				sessionStorage.setItem("product1", quantity2);
				sessionStorage.setItem("price1", cost);
			}
			else if(itemID== 2)
			{
				sessionStorage.setItem("product2", quantity2);
				sessionStorage.setItem("price2", cost);
			}
			else if(itemID== 3)
			{
				sessionStorage.setItem("product3", quantity2);
				sessionStorage.setItem("price3", cost);
			}
			else if(itemID== 4)
			{
				sessionStorage.setItem("product4", quantity2);
				sessionStorage.setItem("price4", cost);
			}
			else if(itemID== 5)
			{
				sessionStorage.setItem("product5", quantity2);
				sessionStorage.setItem("price5", cost);
			}
			else if(itemID== 6)
			{	
				sessionStorage.setItem("product6", quantity2);
				sessionStorage.setItem("price6", cost);
			}
			else if(itemID== 7)
			{
				sessionStorage.setItem("product7", quantity2);
				sessionStorage.setItem("price7", cost);
			}
			location.replace("http://pizzashack.x10host.com/Menu2");
		</script>
	</body>
</html>
