<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>History</title>
	<script src=".View/js/search.js"></script>
	<script src=".View/js/populate.js"></script>
	<style>
		table,th,tr,td{
			border: 1px solid black;
		}


	</style>
</head>
<body>
	<h1>Page 2 [Transaction History]</h1>
	<h2>Digital wallet</h2>
	1.<a href="http://localhost/digital-wallet/digital-wallet.php">Home</a>  2.<a href="http://localhost/digital-wallet/digital-wallet2.php">Transaction History</a>
	<h3>Total Records:</h3>
	<form action="../controller/dqControl.php" method="GET" name="mForm" onsubmit="getData(this);return false ;">
	
	</form>
	<table>
		<tr>
			<th>Transaction Catagory</th>
			<th>To</th>
			<th>Amount</th>
			<th>Transferred On</th>
		
		</tr>
			


		</tr>


	</table>


</body>
</html>