<html>
	
	<?php
		
  		$admin_email = "testemail@pizzashack.x10host.com";
		$userEmail = $_POST['email'];
		$total=$_POST['totalCost'];
		$option = $_POST['orderOption'];
		
		$headers = "From:" . $admin_email;
		$subject= "Order";
  		$comment = "Thank you for your order, the total cost is $";
  		$comment .=$total;
  		$comment .= ".";
  		echo $comment;
		$send=mail($userEmail, $subject, $comment, $headers);
	?>
	<script>
		var opt="<?php echo $option ?>";
		var cart = parseInt(sessionStorage.getItem("itemsInCart"));
		sessionStorage.setItem("finalCart", cart);
		sessionStorage.setItem("delOpt", opt);
			
		sessionStorage.setItem("product1", 0);
		sessionStorage.setItem("price1", 0);
		sessionStorage.setItem("product2", 0);
		sessionStorage.setItem("price2", 0);
		sessionStorage.setItem("product3", 0);
		sessionStorage.setItem("price3", 0);
		sessionStorage.setItem("product4", 0);
		sessionStorage.setItem("price4", 0);
		sessionStorage.setItem("product5", 0);
		sessionStorage.setItem("price5", 0);
		sessionStorage.setItem("product6", 0);
		sessionStorage.setItem("price6", 0);
		sessionStorage.setItem("product7", 0);
		sessionStorage.setItem("price7", 0);
		sessionStorage.setItem("itemsInCart", 0);
		
		location.replace("http://pizzashack.x10host.com/DeliveryTrack2");
	</script>
</html>
