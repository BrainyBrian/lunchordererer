<?php
///////////////////////////////////////////////////////////////////
//////////////////////// Menu Generator V 1.0  ////////////////////
//                                                               //
//  Copyright 2015 by Dhruv Gramopadhye. All Rights Reserved.    //
//  Do not copy in any form without an explicit written permit   //
//  allowing you to do so from Dhruv Gramopadhye                 //
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
?>
<html>
	<head>
		<title><?php echo $_GET["title"] ?></title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
		console.log("///////////////////////////////////////////////////////////////////\n//////////////////////// Menu Generator V 1.0  ///////////////////\n///                                                               //\n//  Copyright 2015 by Dhruv Gramopadhye. All Rights Reserved.    //\n//  Do not copy in any form without an explicit written permit   //\n//  allowing you to do so from Dhruv Gramopadhye                 //\n// ///////////////////////////////////////////////////////////// //\n//////////////////////////////////////////////////////////////////");
		</script>
	</head>
	<body>
<div class="jumbotron">
  <h1><?php echo $_GET["title"] ?></h1>      
</div>
	<div class="container">
		<form method="post" action="ordering.php">
			<?php 
			$n = 0;
			while($n <= $_GET["numberofoptions"]-1)
				{
				echo "<b>". $_GET["option". $n. "title"]. "</b>: <input type='checkbox' name='". $_GET["option". $n. "title"]. "check'/> Other Options: <input type='text' name='". $_GET["option". $n. "title"]. "text'/> <br/><br/>  ";
				$n = $n + 1;
			}
			?>
			<br/><hr/><input class="btn btn-success" type="submit" value="Order"/>
		</form>
		</div>	<script>console.log("Post Data: <?php echo $_POST ?>     Get Data: <?php echo $_GET ?>")</script>
		<div class="jumbotron">
			<small>Generated by Dhruv Gramopadhye's MenuGen</small>
		</div>
</body>
</html>
