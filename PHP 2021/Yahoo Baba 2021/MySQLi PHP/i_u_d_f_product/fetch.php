<table border="1" align="center">
	<tr>
		<th>Id</th>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Product Detail</th>
		<th>Add Product</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
<?php
$con=mysqli_connect("Localhost","root","","ninjadb");
$n=mysqli_query($con,"select * from product");
while($i=mysqli_fetch_array($n))
{
?>

<tr>
	<td><?php echo $i['id']; ?></td>
	<td><?php echo $i['name']; ?></td>
	<td><?php echo $i['price'] ?></td>
	<td><?php echo $i['detail'] ?></td>
	<td><a href="index.php">Add Product</a></td>
	<td><a href="delete.php ?d=<?php echo $i['id'] ?>">Delete</a></td>
	<td><a href="update.php ?u=<?php echo $i['id'] ?>">Update</a></td>
</tr>



<?php	
}
?>	
	
</table>