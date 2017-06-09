<?php require_once('config/dbconfig.php') ?>

<?php 
	function showDeleteButton($id, $action) { ?>
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
                        <h4>Are you sure you want to delete this news?</h4>
                    </div>
                    <form method='POST' action=<?php echo $action ?>>
                        <div class='modal-footer'>
                            <div class='form-group'>
                                <input class='form-control' type='hidden' value=<?php echo $id ?> name='id'>
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
