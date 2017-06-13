<?php 
	require_once('./../../config/dbconfig.php');
	require_once('./../../functions.php');
?>

<?php
	$postType = "news";
	$listType = "newsList";

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
                        	showUpdateButton($id, 'newsUpdate-backend.php', $title, $content);
                        	showDeleteButton($id, 'newsDelete-backend.php'); 
                        ?>
					</td>
				</tr>

<?php	
		}
	}
	else {
		echo "No News Found!";
	}

?>