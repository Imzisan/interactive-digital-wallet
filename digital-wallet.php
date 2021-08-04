<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>


<body>
	<h1>Page 1 [Home]</h1>
	<h2>Digital wallet</h2>
	1.<a href="http://localhost/digital-wallet/digital-wallet.php">Home</a>  2.<a href="http://localhost/digital-wallet/digital-wallet2.php">Transaction History</a>
	<h3>Fund Transfer:</h3>
	<?php
	    $To="";
	    $Amount="";
	    $ToErr=$AmountErr="";
	    $successfulMessage=$errorMessage="";
	    $flag =false;
	    if($_SERVER['REQUEST_METHOD']=== "POST"){
	    	$To= $_POST['phone']; 
	    	$Amount= $_POST['money'];

	    	if(empty($To)){
	    		$ToErr="Enter a phone no pls.";
	    	}
	    	else if(empty($Amount)){
	    		$AmountErr="Enter a amount pls";
	    	}
	    	else{
	    		echo "Successful";
	    	}
	    }
	    function test_input($data){
	    	$data = trim($data);
	    	$data = stripslashes($data);
	    	$data = htmlspecialchars($data);
	    	return $data;
	    }
	    
	    
	  ?>

	Select Catagory:
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
	<select>
		<optgroup>
			<option>Select a value</option>
			<option>Mobile recharge</option>
			<option>Send money</option>	
			<option>Merchant pay</option>	

		</optgroup>

	</select>
	<br><br> 
	
	<label for="phone"> To: <span style="color: red;">*</span></label>
		<input type="tel" id="phone" name="phone">
		<span stryle ="color: red;"><?php echo $ToErr ?></span>
		<br><br>
	<label for="money"> Amount: <span style="color: red;">*</span> </label>
		<input type="money" id="money" name="money">
		<span stryle ="color: red;"><?php echo $AmountErr ?></span>
		<br><br>
	<input type="submit" id="submit" name="submit" value="submit">
	</form>

</body>
</html>