<body bgcolor="orange">
	<?php
	$u=$_GET['u'];
	?>
	<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000; background-color: white; box-shadow: 1px 1px 10px 1px;">
		<h3 align="center">Add New Record Here</h3>
<form action="" method="post">
	<fieldset>
		<div style="padding: 10px; text-align: center;">
			<input type="Hidden" name="id" value="<?php echo $u ?>" placeholder="">
			<input type="text" name="pnm" placeholder="Enter Product Name" style="padding: 5px; width: 90%">
		</div>

		<div style="padding: 10px; text-align: center;">
			<input type="text" name="pr" placeholder="Enter Product Price" style="padding: 5px; width: 90%">
		</div>
		<div style="padding: 10px; text-align: center;">
		<textarea name="detail" value="" cols="5" placeholder="Enter Product Detail" style="padding: 5px; width: 90%"></textarea>
		</div>

		<div style="padding: 10px; text-align: center;">
			<input type="submit" name="sb" value="Update" style="padding: 5px; width: 90%">
		</div>

		

	</fieldset>
</form>	
<?php
if(isset($_POST['sb']))
{
	$id=$_POST['id'];
	$pnm=$_POST['pnm'];
	$pr=$_POST['pr'];
	$pd=$_POST['detail'];

	$con=mysqli_connect("localhost","root","","ninjadb");
	mysqli_query($con,"Update product set name='$pnm',price='$pr',detail='$pd' where id='$id'");

	header("location:fetch.php");
}
?>
</div>
