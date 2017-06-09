<?php 
	require_once('./../../config/dbconfig.php');

	if (isset($_POST['deletePost'])) {
		$id = $_POST['id'];
		echo "$id";

		$sql = "DELETE FROM note WHERE id = $id";
		$result = $conn->query($sql);

		if ($result) {
			echo "success";
		}
		else {
			echo "Error: Post is not deleted.";
		}
	}
	


?>