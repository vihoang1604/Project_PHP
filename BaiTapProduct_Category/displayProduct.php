<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<?php 
include('connect.php');
$sql = "SELECT * FROM products";
$result = mysqli_query($mysqli,$sql);
if($result)
{
	while($row = mysqli_fetch_assoc($result))
	{
		?>	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>category_id</th>
					<th>Comments</th>
					<th>imported_date</th>
					<th>img</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['prod_name']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['quantity']; ?></td>
				<td><?php echo $row['category_id']; ?></td>
				<td><?php echo $row['comments']; ?></td>
				<td><?php echo $row['imported_date']; ?></td>
				<td><img src="<?php echo $row['img']; ?>" style ="width: 100px; height: 100px;"></td>
				<td><?php 
				echo "<p><a href='formUpdateProduct.php?id=". $row['id'] ."'>Update</a></p>";
				?>	
				</td>
			</tbody>
		</table>

	<?php }} ?>
	<body>

	</body>
	</html>

