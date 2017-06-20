<!-- Display Functions -->

<!-- Function: List All Records of $postType -->
<?php 
function listRecords($postType, $page, $conn) {
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
                    <div class="action-button">
                        <form method="post" action="edit-backend.php">
                            <button class="btn btn-warning btn-xs" type="submit" name="submit">
                                <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                            </button>
                            <input type="hidden" name="postType" value="<?php echo $postType ?>">
                            <input type="hidden" name="page" value="<?php echo $page ?>">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                        </form>
                        
                        <?php 
                            showDeleteButton($id, 'delete-backend.php', $postType); 
                        ?>
                    </div>
                </td>
            </tr>
    <?php
        }
    }
    else {
        echo "No Entry Found!";
    }
}
?>

<!-- Function: Prepare PATH for Upload Image -->
<?php 
function prepareUploadedImage($imageType, $postType, $page) {
    if (isset($imageType)) {
        if ($imageType == $_FILES['featureImage']) {
            $type = "f";
        }
        else if ($imageType == $_FILES['postImage']) {
            $type = "p";
        }

        $imgGallary = './../public/img/imgGallery/';
        $fileTmpName = $imageType['tmp_name'];
        $fileExtension = pathinfo($imageType['name'])['extension'];
        $fileName = $type.time().".$fileExtension";
        $target = $imgGallary.$fileName;
        $fileSize = $imageType['size'];

        // Check uploaded file size
        if ($fileSize <= 5242880) {
            if (in_array($fileExtension, ['jpg', 'png'])) {
                if (move_uploaded_file($fileTmpName, $target)) {
                    return $target;
                }
                else {
                    header('location:add-backend.php?status=fail&postType='.$postType.'&page='.$page);
                }
            }
            else {
                header('location: add-backend.php?status=fail&postType='.$postType.'&page='.$page);
            }
        }
        else {
            header('location: add-backend.php?status=fail&postType='.$postType.'&page='.$page);
        }
    }
} 
?>


<?php  
    function updateUploadImage($id, $imageType, $imagePath, $postType, $page, $conn) {
        if (file_exists($imageType['tmp_name']) || is_uploaded_file($imageType['tmp_name'])) {
            if ($imageType == $_FILES['featureImage']) {
                $type = "f";
            }
            else if ($imageType == $_FILES['postImage']) {
                $type = "p";
            }

            $imgGallary = './../public/img/imgGallery/';
            $fileTmpName = $imageType['tmp_name'];
            $fileExtension = pathinfo($imageType['name'])['extension'];
            $fileName = $type.time().".$fileExtension";
            $target = $imgGallary.$fileName;
            $fileSize = $imageType['size'];

            // Check uploaded file size
            if ($fileSize <= 5242880) {
                if (in_array($fileExtension, ['jpg', 'png'])) {
                    if (move_uploaded_file($fileTmpName, $target)) {
                        return $target;
                    }
                    else {
                        header('location:edit-backend.php?status=fail&postType='.$postType.'&page='.$page.'&id='.$id);
                    }
                }
                else {
                    header('location: edit-backend.php?status=fail&postType='.$postType.'&page='.$page.'&id='.$id);
                }
            }
            else {
                header('location: edit-backend.php?status=fail&postType='.$postType.'&page='.$page.'&id='.$id);
            }

            //Remove old file

            $sql1 = "SELECT * FROM $postType WHERE id = $id";
            $result = $conn->query($sql1);
            while ($row = $result->fetch_object()){
                if ($row->$imageType != null) {
                    //Remove old profile photo
                    unlink($row->$imageType);
                }
            }
        }
        else {
            return $imagePath;
        }
    }

?>


<!-- Fuction: Show Alert Message of a Query -->
<?php   
	function showAlertMessage() {
		if (isset($_GET['status'])) {
	        $status = $_GET['status'];
	        if ($status == "success") {
	            echo '
	                <div class="alert alert-success fade in">
	                    <a href="#" class="close" data-dismiss="alert">&times;</a>
	                    <strong>Request Success!</strong>
	                </div>
	            ';
	        }
	        else if ($status == "fail") {
	            echo '
	                <div class="alert alert-danger fade in">
	                    <a href="#" class="close" data-dismiss="alert">&times;</a>
	                    <strong>Request Failed!</strong>
	                </div>
	            ';
	        }
	    }
	}
?>

<!-- Function: Show Delete Button and Delete Modal -->
<?php 
	function showDeleteButton($id, $action, $postType) { ?>
		<!-- Delete Button -->
		<button type='button' class='btn btn-danger btn-xs' id='btn-delete' data-toggle='modal' data-target=<?php echo '#delete-'.$id ?>>
            <i class='fa fa-trash' aria-hidden='true'></i>
        </button>

        <!-- Delete Modal -->
		<div class='modal fade' id=<?php echo 'delete-'.$id ?> tabindex='-1' role='dialog' aria-labelledby='update-post'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Are you sure you want to delete this post?</h4>
                    </div>
                    <form method='POST' action=<?php echo $action ?>>
                        <div class='modal-footer'>
                            <div class='form-group'>
                                <input class='form-control' type='hidden' value=<?php echo $id ?> name='id'>
                                <input class='form-control' type='hidden' value=<?php echo $postType ?> name='postType'>
                                <button class='btn btn-success' type='submit' name='deletePost'>Confirm</button>
                                <button class='btn btn-danger' type='button' data-dismiss='modal' aria-hidden='true'>Cancel</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
	<?php
	}
?>

<!-- Function: Show Update Button and Update Modal -->
<?php 
	function displayUpdateButton($id, $action, $title, $content, $postType) { ?>
		<!-- Update Button -->
		<button type='button' class='btn btn-warning btn-xs' id='btn-update' data-toggle='modal' data-target=<?php echo '#update-'.$id ?>>
            <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
        </button>

        <!-- Update Modal -->
		<div class='modal fade' id=<?php echo 'update-'.$id ?> tabindex='-1' role='dialog' aria-labelledby='update-post'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>Update Post</h4>
                    </div>
                    <form method='POST' action=<?php echo $action ?>>
                    	<div class='modal-body'>
                    		<div class="form-group">
		                        <label><h3>Title</h3></label>
		                        <input class="form-control" type="text" name="title" placeholder="Title Here" value="<?php echo $title ?>">
		                    </div>

		                    <div class="form-group">
		                        <label><h3>Content</h3></label>
		                        <textarea id="wysiwyg" name="content"><?php echo $content ?></textarea>
		                    </div>
                    	</div> 
                        <div class='modal-footer'>
                            <div class='form-group'>
                                <input class='form-control' type='hidden' value=<?php echo $id ?> name='id'>
                                <input class='form-control' type='hidden' value=<?php echo $postType ?> name='postType'>
                                <button class='btn btn-success' type='submit' name='updatePost'>Update</button>
                                <button class='btn btn-danger' type='button' data-dismiss='modal' aria-hidden='true'>Cancel</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
	<?php
	}
?>