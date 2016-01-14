<html>
	<head>
		
	</head>
	<body>
		</center><form action="step3.php" method="POST">
			<input type="hidden" value="<?php echo $_POST["studentid"]; ?>"  name="studentid"><br/>
			<input type="hidden" value="<?php echo $_POST["lunchnumber"]; ?>" name="lunchnumber"><br/>
			<br/>
<?php 
$filepre=$_POST["file"];
$file = fopen($filepre, "r"); 
$hash = fread($file, filesize($filepre));
fclose($file);
$filepre ="secure/". $_POST["lunchnumber"]. "id.txt";
$file = fopen($filepre, "r"); 
$id = fread($file, filesize($filepre));
fclose($file);
if(md5($_POST["hash"]) == $hash)
	{
	echo "---The approval process has started---<br/>";
	if($id == $_POST["studentid"])
		{
		echo "Approved<br/>---The approval process has ended---";
	}
	else 
		{
		echo "incorrect studentid <br/> ---The approval process has ended---";
	}
}
elseif(md5($_POST["hash"]) !== $hash)
	{
	echo "Incorrect lunch hash";
}
else
{
	echo "ERROR 500 INTERNAL SERVER ERROR (IN ENGLISH 'BRAIN FART') - PHP - LUNCH HASH NOT WRONG AND NOT CORRECT? I AM AS CONFUSED AS YOU ARE ABOUT THIS.";
}

?>
		</form>
	</body>
</html>
