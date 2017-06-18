<!-- Query Fuctions -->
<?php 
    function list2Posts($postType, $page, $conn) {
        $num_post = 3;
        $sql = "SELECT * FROM $postType ORDER BY updated DESC LIMIT $num_post";
        $result = $conn->query($sql);

        $num_rows = $result->num_rows;
        $row = array();
        while ($row[] = $result->fetch_object());
        ?>

        <div class="line sub-<?php echo $postType ?>">
        <?php
            for($i=1; $i<$num_post; $i++) { 
                    $postUrl = 'single.php?postType='.$postType.'&page='.$page.'&id='.$row[$i]->id;
                ?>
                <div class="col-xs-12 col-md-6 sub-post">
                    <div class="col-xs-4 col-md-12">
                        <a href="<?php echo $postUrl ?>">
                            <img class="img-thumbnail img-feature" src="<?php echo $row[$i]->featureImage ?>">
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-12">
                        <a href="<?php echo $postUrl ?>">
                            <h4 class="post-tilte"><?php echo $row[$i]->title ?></h4>
                        </a>
                    </div>
                </div>
        <?php
            }
        ?>
        <div class="clearfix"></div>
        </div>
<?php    
    }
?>

<?php 
    function list4Posts($postType, $page, $conn) {
        $num_post = 5;
        $sql = "SELECT * FROM $postType ORDER BY created DESC LIMIT $num_post";
        $result = $conn->query($sql);

        $num_rows = $result->num_rows;
        $row = array();
        while ($row[] = $result->fetch_object());
        ?>

        <div class="line sub-<?php echo $postType ?>">
        <?php
            for($i=1; $i<$num_post; $i++) { 
            $postUrl = 'single.php?postType='.$postType.'&page='.$page.'&id='.$row[$i]->id;
        ?>
                <div class="col-xs-12 col-md-3 sub-post">
                    <div class="col-xs-4 col-md-12">
                        <a href="<?php echo $postUrl ?>">
                            <img class="img-thumbnail img-feature" src="<?php echo $row[$i]->featureImage ?>">
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-12">
                        <a href="<?php echo $postUrl ?>">
                            <h4 class="post-tilte"><?php echo $row[$i]->title ?></h4>
                        </a>
                    </div>
                </div>
        <?php
            }
        ?>
        <div class="clearfix"></div>
        </div>
<?php    
    }
?>

<?php 
    function showLatestPost($postType, $page, $conn) {
        $sql = "SELECT * FROM $postType ORDER BY updated DESC LIMIT 1";
        $result = $conn->query($sql);
        return $row = $result->fetch_object();
    }
?>

<?php 
    function getPostById($postType, $page, $id, $conn) {
        $sql = "SELECT * FROM $postType WHERE id = $id";
        $result = $conn->query($sql);
        return $row = $result->fetch_object();
    }
?>

<?php 
    function listRelatedPosts($postType, $page, $id, $conn) {
        $num_post = 5;
        $sql = "SELECT * FROM $postType WHERE id <> $id LIMIT $num_post";
        $result = $conn->query($sql);

        $num_rows = $result->num_rows;
        $row = array();
        while ($row[] = $result->fetch_object());
        ?>

        <div class="line sub-<?php echo $postType ?>">
        <?php
            for($i=1; $i<$num_post; $i++) { 
                $postUrl = 'single.php?postType='.$postType.'&page='.$page.'&id='.$row[$i]->id;
        ?>
                <div class="col-xs-12 col-md-3 sub-post">
                    <div class="col-xs-4 col-md-12">
                        <a href="<?php echo $postUrl ?>">
                            <img class="img-thumbnail img-feature" src="<?php echo $row[$i]->featureImage ?>">
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-12">
                        <a href="<?php echo $postUrl ?>">
                            <h4 class="post-tilte"><?php echo $row[$i]->title ?></h4>
                        </a>
                    </div>
                </div>
        <?php
            }
        ?>
        <div class="clearfix"></div>
        </div>
<?php    
    }
?>

<?php  
    function searchEachPostType($postTypes, $pages, $keyword, $conn) {
        $havePost = false;
        for ($i=0; $i<sizeof($postTypes); $i++) {
            $sql = "SELECT * FROM $postTypes[$i] WHERE title LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword ."%'";
            $result = $conn->query($sql);

            if (!$result) {
                continue;
            }
            else {
                while ($row = $result->fetch_object()) {
                    $id = $row->id;
                    $title = $row->title;
                    $content = $row->content;
                    $featureImage = $row->featureImage;
                    
                    $postUrl = 'single.php?postType='.$postTypes[$i].'&page='.$pages[$i].'&id='.$row->id;
                ?>
                    <div class="col-xs-12 col-md-4 sub-post">
                        <div class="col-xs-12 col-md-12">
                            <a href="<?php echo $postUrl ?>">
                                <h4 class="post-tilte"><?php echo '<span class="tags '.$postTypes[$i].'">'.$postTypes[$i].'</span>'." ".$row->title ?></h4>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <a href="<?php echo $postUrl ?>">
                                <img class="img-thumbnail img-feature" src="<?php echo $row->featureImage ?>">
                            </a>
                        </div>
                    </div>
    <?php
                     $havePost = true;
                }
            }
        }
        return $havePost;
    }
?>