<form action="" method="post">
	<input type="number" name="no" placeholder="Enter number"><br><br>
	<input type="submit" name="sb" value="For Loop">
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	for($i=0;$i<=$n;$i++)
	{
		for($j=0;$j<=$i;$j++)
		{
			echo "Aniruddh";
		}
		echo "<br>";
	}
}
?>
<!--
Aniruddh
AniruddhAniruddh
AniruddhAniruddhAniruddh
AniruddhAniruddhAniruddhAniruddh
AniruddhAniruddhAniruddhAniruddhAniruddh
AniruddhAniruddhAniruddhAniruddhAniruddhAniruddh
-->