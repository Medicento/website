<?php require_once("includes/session.php");?>
<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>
<?php
if (isset($_POST['submit'])){

	$name = $_POST['name_1'];
	$mobile = $_POST['mob_name'];
	$mail1 = $_POST['mail'];
	$query_submit = "INSERT INTO add_products (product, cost, pharma) VALUES ('{$name}', '{$mobile}', '{$mail1}')";
	$result_hello = mysqli_query($conn, $query_submit);
    confirm_query($result_hello);
}
$query_show = "SELECT * FROM add_products";
$result_show = mysqli_query($conn,$query_show);
confirm_query($result_show);

?>

<html>
	<head>
		<title>form1</title>
	</head>
	<body>
		<form method="post" action="test1.php">
			<h3>Name</h3>
			<input type="text" name="name_1">
			<h3>Mobile Number</h3>
			<input type="text"  name="mob_name">
			<h3>email</h3>
			<input type="text" name="mail">
			<input type="submit" name="submit" value="submit">
		</form>
		<table>
			<?php 
				while ($list=mysqli_fetch_assoc($result_show)) { ?>
					<tr>
						<td>
							<?php echo $list['product']; ?>	
						</td>
						<td>
							<?php echo $list['cost']; ?>	
						</td>
						<td>
							<?php echo $list['pharma']; ?>	
						</td>
					</tr>
					<?php
				}
			?>

		</table>
	</body>
</html>

<?php
if (isset ($conn)){
  mysqli_close($conn);
}
?>