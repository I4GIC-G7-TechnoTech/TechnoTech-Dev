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
?>
				<tr>
					<td> <?php echo $row->title ?> </td>
					<td> Will Specified Soon </td>
					<td> <?php echo $row->updated ?> </td>
					<td>
						<button type='button' class='btn btn-warning btn-xs' id='btn-update' data-toggle='modal' data-target= <?php echo '#update-'.$id ?>>
                            <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                        </button>

                        <?php showDeleteButton($id, 'newsDelete-backend.php'); ?>
					</td>
				</tr>

<?php	
		}
	}
	else {
		echo "No News Found!";
	}

?>