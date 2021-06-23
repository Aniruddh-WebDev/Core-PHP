<form action="" method="post">
	<input type="number" name="no" placeholder="Enter number"><br><br>
	<input type="submit" name="sb" value="Array"><br><br><hr>
</form>
<?php
$n=array("aniruddh","Divyeh","Viral","Parv","Nikunj","Raj","Jay","Harsh",7600526667,7048888184,7600209055,9033339598,"Yash","Jaymin","Chirag");


if(isset($_POST['sb']))
{
	$a=$_POST['no'];
	for($i=0;$i<=$a;$i++)
	{
		echo $n[$i]."<br>";
	}
}
echo "<hr>";	
?>
