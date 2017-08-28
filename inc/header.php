<!DOCTYPE html>
<html>
	<head>
		<meta lang="en">
		<meta charset="utf-8">
		<link rel="stylesheet"  href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<meta name="viewport" content="width-device-width. initial-scale=1.0">
		<title><?php echo $PageTitle?></title>
	</head>
	<body>
		<header>
			<h1>Heritage Place Account Book</h1>
			<nav>
				<ul>
					<li><a href="index.php" class="<?php echo $ind?>">Home</a></li>
					<li><a href="custreg.php" class="<?php echo $cust?>">Customer Register</a></li>
					<li><a href="goodsreg.php" class="<?php echo $good?>">Goods Register</a></li>
					<li><a href="inventory.php" class="<?php echo $inv?>">Inventory</a></li>
					<li><a href="account.php" class="<?php echo $acc?>">Transactions</a></li>
				</ul>
			</nav>
		</header>
