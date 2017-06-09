<?php require_once('./../../config/dbconfig.php') ?>

<?php

	$sql = "SELECT * FROM news";
	$result = $conn->query($sql);

	if ($result) {
		while ($row = $result->fetch_object()) {
			$id = $row->id; 
?>
			<div class="news" id="<?php echo 'news'.$id ?>">
				<tr>
					<td> <?php echo $row->title ?> </td>
					<td> Will Specified Soon </td>
					<td> <?php echo $row->updated ?> </td>
				</tr>
			</div>

<?php	
		}
	}
	else {
		echo "No News Found!";
	}

?>