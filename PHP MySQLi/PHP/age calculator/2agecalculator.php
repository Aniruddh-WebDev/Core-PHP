Error this program

<form action="" method="post">
	Choose Birth Date :
	<input type="date" name="d"><br>
	<input type="submit" name="sb" value="Calculater"><br>
</form>
<?php
if(isset($_POST['sb']))
{
	$dateOfBirth = $_POST['d'];
	$today = date("m-d-Y");
	$diff = date_diff(date_create($dateOfBirth), date_create($today));
	echo 'You Are'.$diff->format('%y')."Year Old";

}
?>