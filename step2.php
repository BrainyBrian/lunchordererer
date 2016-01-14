<html>
	<head>
		
	</head>
	<body>
		<form action="step3.php" method="POST">
			<input type="hidden" value="<?php echo $_POST["studentid"]; ?>"  name="studentid">
			<input type="hidden" value="<?php echo $_POST["lunchnumber"]; ?>" name="lunchnumber">
			<center>Please awnser your lunch secure hash: <?php $filepre = "secure/". $_POST["lunchnumber"]. rand(0, 5). ".txt"; $file = fopen($filepre, "r"); echo fread($file, filesize($filepre)); fclose($file); ?><br/>
			<input type="password" name="hash"></center>
			<input type="hidden" name="file" value="<?php echo $filepre; ?>">
		</form>
	</body>
</html>
