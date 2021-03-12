<?php
	$query="select*from watches where status=1 ";
	$result=$connect->query($query);
?>
<?php echo mysqli_num_rows($result);?>