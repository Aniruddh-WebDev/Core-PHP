<form action=""> 
	<input type="text" name="id" placeholder="Enter Id"><br><br>
	<input type="text" name="pass" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb" value="Get">
	<hr>
</form>
<?php
	echo $_GET['id'];
	echo "<br>";
	echo $_GET['pass'];
?>