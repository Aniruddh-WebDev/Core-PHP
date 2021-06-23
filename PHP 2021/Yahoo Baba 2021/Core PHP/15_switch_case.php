<font color="red"><h1>
	<form action="" method="post">
		<input type="number" name="no" placeholder="Enter Day Number"><br><br>
		<input type="submit" name="sb" value="Weekday"><hr>
	</form>

<?php
if(isset($_POST['sb']))
{


$weekday=$_POST['no'];

switch($weekday)
{
	case 1:
	echo "Today is Monday";
	break;

	case 2:
	echo "Today is Tuseday";
	break;

	case 3:
	echo "Today is Wednesday";
	break;

	case 4:
	echo "Today is Thursday";
	break;

	case 5:
	echo "Today is Friday";
	break;

	case 6:
	echo "Today is Saturday";
	break;

	case 7:
	echo "Today is Sunday";
	break;

	default:
	echo "Enter Valid Weekday";
	break;

}
}
?>
</h1></font>