<?php 
	require_once('./../../config/dbconfig.php');
	require_once('./../../functions.php');
?>

<?php
	$sql = "SELECT * FROM $postType";
	$result = $conn->query($sql);

	if ($result) {
		while ($row = $result->fetch_object()) {
			$id = $row->id; 
			$title = $row->title;
			$content = $row->content;
?>
				<tr>
					<td> <?php echo $row->title ?> </td>
					<td> Will Specified Soon </td>
					<td> <?php echo $row->created ?> </td>
					<td> <?php echo $row->updated ?> </td>
					<td>
                        <?php 
                        	showUpdateButton($id, 'update-backend.php', $title, $content, $postType);
                        	showDeleteButton($id, 'delete-backend.php', $postType); 
                        ?>
					</td>
				</tr>

<?php	
		}
	}
	else {
		echo "No Entry Found!";
	}

?>