<?php 
    require_once('./../config/dbconfig.php');
    require_once('./../functions.php');

    $row = getPostById($postType, $page, $id, $conn);
?>

    <!-- Title -->
    <div class="single-title">
        <h2><?php echo $row->title ?></h2>
        <hr>
    </div>

    <div class="content phone-content">
        <div class="col-xs-12 col-md-12">
            <?php echo $row->content ?>
        </div>
        <div class="col-xs-12 col-md-6">
            <img class="img-thumbnail" src="<?php echo $row->featureImage ?>" alt="featureImage">
        </div>
        <div class="col-xs-12 col-md-6">
            <img class="img-thumbnail" src="<?php echo $row->postImage ?>" alt="postImage">
        </div>
        
    <?php 
        if ($row->youtubeLink) { 
    ?>
            <br>
            <div class="embed-responsive embed-responsive-16by9 video-post">
                <?php echo $row->youtubeLink ?>
            </div>
    <?php 
        } 
    ?>
        <div class="clearfix"></div>
    </div>

    <!-- related-post -->
    <div class="related-post">
        <?php listRelatedPosts($postType, $page, $id, $conn); ?>
    </div>

    <section class="comment">
        <h2>Comments</h2>
        <hr>
        <div class="form-group">
            <form action="insertcomment.php" method="post">
                <label><h3>Leave a comment:</h3></label>
                <textarea class="form-control" name="comment"></textarea>
                <input class="form-control" type="hidden" name="postid" value="<?php //your posts id ?>" />
                <!-- <input class="form-contorl" type="submit" /> -->
                <br>
                <button class="btn btn-default" type="submit" name="leaveComment">Leave Comment</button>
            </form>
        </div>
    </section>
            