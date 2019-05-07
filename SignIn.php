<html>
		<title>CSCI 440 project page</title>
        
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
html, body {
    width: 100%;
    height: 100%;
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    color: #cccc00;
    -webkit-font-smoothing: antialiased;
    background: #0a1d68;

}/* Basics */
	html, body {
	    width: 100%;
	    height: 100%;
	    font-family: "Helvetica Neue", Helvetica, sans-serif;
	    color: #444;
	    -webkit-font-smoothing: antialiased;
	    background: #0a1d68;
	}
	#container {
	    position: fixed;
	    width: 340px;
	    height: 300px;
	    top: 50%;
	    left: 50%;
	    margin-top: -140px;
	    margin-left: -170px;
		background: #fff;
	    border-radius: 3px;
	    border: 1px solid #ccc;
	    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
	
	}
	form {
	    margin: 0 auto;
	    margin-top: 20px;
	}
	label {
	    color: #555;
	    display: inline-block;
	    margin-left: 18px;
	    padding-top: 10px;
	    font-size: 14px;
	}
	p a {
	    font-size: 11px;
	    color: #aaa;
	    float: right;
	    margin-top: -13px;
	    margin-right: 20px;
	 -webkit-transition: all .4s ease;
	    -moz-transition: all .4s ease;
	    transition: all .4s ease;
	}
	p a:hover {
	    color: #555;
	}
	input {
	    font-family: "Helvetica Neue", Helvetica, sans-serif;
	    font-size: 12px;
	    outline: none;
	}
	input[type=text],
	input[type=password] {
	    color: #777;
	    padding-left: 10px;
	    margin: 10px;
	    margin-top: 12px;
	    margin-left: 18px;
	    width: 290px;
	    height: 35px;
		border: 1px solid #c7d0d2;
	    border-radius: 2px;
	    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
	-webkit-transition: all .4s ease;
	    -moz-transition: all .4s ease;
	    transition: all .4s ease;
		}
	input[type=text]:hover,
	input[type=password]:hover {
	    border: 1px solid #b6bfc0;
	    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
	}
	input[type=text]:focus,
	input[type=password]:focus {
	    border: 1px solid #a8c9e4;
	    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
	}
	#lower {
	    background: #ecf2f5;
	    width: 100%;
	    height: 80px;
	    margin-top: 20px;
		  box-shadow: inset 0 1px 1px #fff;
	    border-top: 1px solid #ccc;
	    border-bottom-right-radius: 3px;
	    border-bottom-left-radius: 3px;
	}
	input[type=checkbox] {
	    margin-left: 20px;
	    margin-top: 30px;
	}
	.check {
	    margin-left: 3px;
		font-size: 11px;
	    color: #444;
	    text-shadow: 0 1px 0 #fff;
	}
	input[type=submit] {
	    float: right;
	    margin-right: 20px;
	    margin-top: 20px;
	    width: 80px;
	    height: 30px;
	font-size: 14px;
	    font-weight: bold;
	    color: #fff;
	    background-color: #acd6ef; /*IE fallback*/
	    background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
	    background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
	    background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
	    border-radius: 30px;
	    border: 1px solid #66add6;
	    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
	    cursor: pointer;
	}
	input[type=submit]:hover {
	    background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2ff), to(#6ec2e8));
	    background-image: -moz-linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
	    background-image: linear-gradient(top left 90deg, #b6e2ff 0%, #6ec2e8 100%);
	}
	input[type=submit]:active {
	    background-image: -webkit-gradient(linear, left top, left bottom, from(#6ec2e8), to(#b6e2ff));
	    background-image: -moz-linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
	    background-image: linear-gradient(top left 90deg, #6ec2e8 0%, #b6e2ff 100%);
	}
</style>
    
	<body>
    
  <!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="http://pizzashack.x10host.com/Home" class="w3-bar-item w3-button">Home</a>
    <a href="http://pizzashack.x10host.com/about" class="w3-bar-item w3-button">About</a>
    <a href="http://pizzashack.x10host.com/Menu" class="w3-bar-item w3-button">Menu</a>
    <a href="http://pizzashack.x10host.com/Checkout" class="w3-bar-item w3-button">Checkout</a>
    <a href="http://pizzashack.x10host.com/DeliveryTrack" class="w3-bar-item w3-button">Delivery Tracker</a>
    <a href="http://pizzashack.x10host.com/Help" class="w3-bar-item w3-button">Help</a>
    <a href="http://pizzashack.x10host.com/SignIn" class="w3-bar-item w3-button">Sign In</a>
    <a href="http://pizzashack.x10host.com/CreateAccount" class="w3-bar-item w3-button">Create Account</a>

  </div>
</div>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style>
	
</style>

</head>

<body>
    <!-- Begin Page Content -->
    <div id="container">
        <form action = "SignIn.php" method = "post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div id="lower">
                <a href="http://pizzashack.x10host.com/Help">   Forgot Username   </a>
            <a href="http://pizzashack.x10host.com/Help">Forgot Password</a><br>
            <a href="http://pizzashack.x10host.com/CreateAccount">   Create Account</a>
                <input type="submit" value="Login">
            </div><!--/ lower-->
        </form>
    </div><!--/ container-->
    <!-- End Page Content -->
</body>
</html>
