<?php
///////////////////////////////////////////////////////////////////
//////////////////////// Menu Generator V 1.0  ////////////////////
//                                                               //
//  Copyright 2015 by Dhruv Gramopadhye. All Rights Reserved.    //
//  Do not copy in any form without an explicit written permit   //
//  allowing you to do so from Dhruv Gramopadhye                 //
//                                                               //
///////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////
?>
<html>
	<head>
		<title>MenuGen</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
		console.log("///////////////////////////////////////////////////////////////////\n//////////////////////// Menu Generator V 1.0  ///////////////////\n///                                                               //\n//  Copyright 2015 by Dhruv Gramopadhye. All Rights Reserved.    //\n//  Do not copy in any form without an explicit written permit   //\n//  allowing you to do so from Dhruv Gramopadhye                 //\n// ///////////////////////////////////////////////////////////// //\n//////////////////////////////////////////////////////////////////");
		</script>
		
		<script>
		function addnew()
		{ 
			var number = parseInt(document.getElementById("total").innerHTML)+1;
			document.getElementById("total").innerHTML = number;
			var pre=document.getElementById("formnewstuff").innerHTML;
			var numberuknow=number+1;
			document.getElementById("formnewstuff").innerHTML = pre+"Option "+numberuknow+" title: <input type='text' name='option"+number+"title' /><br/><br/>";
		document.getElementById("numberofoptions").value = numberuknow;
		}
		
		
		</script>
	</head>
	<body>
		<form action="menugen.php">
<div class="jumbotron">
  <h1>Title<input type="text" name="title"/></h1>    
</div>
	<div class="container">
		Number of Options: <div id="total" style="display:none;">
			3
		</div><br/>
			Number Of Options:<input type="text" id="numberofoptions" value="4" name="numberofoptions" /><br/>
			<div id="formnewstuff">
			Option 1 title: <input type="text" name="option0title" /><br/><br/>
			Option 2 title: <input type="text" name="option1title" /><br/><br/>
			Option 3 title: <input type="text" name="option2title" /><br/><br/>
			Option 4 title: <input type="text" name="option3title" /><br/><br/>
				
		</div>
		<p onclick="javascript:addnew()">
					More Options (WARNING - CLEARS EXISTING TEXT)
				</p><br/>
			<br/><hr/><input class="btn btn-success" type="submit" value="Submit Website"/>
				</form>
</body>
</html>
