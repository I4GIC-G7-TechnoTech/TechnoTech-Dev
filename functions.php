<!-- Query Fuctions -->
<?php 
    function list2Posts($postType, $conn) {
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
                $postUrl = 'single.php?postType='.$postType.'&id='.$row[$i]->id; 
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
    function list4Posts($postType, $conn) {
        $num_post = 5;
        $sql = "SELECT * FROM $postType ORDER BY updated DESC LIMIT $num_post";
        $result = $conn->query($sql);

        $num_rows = $result->num_rows;
        $row = array();
        while ($row[] = $result->fetch_object());
        ?>

        <div class="line sub-<?php echo $postType ?>">
        <?php
            for($i=1; $i<$num_post; $i++) { 
            $postUrl = 'single.php?postType='.$postType.'&id='.$row[$i]->id; 
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
    function showLatestPost($postType, $conn) {
        $sql = "SELECT * FROM $postType ORDER BY updated DESC LIMIT 1";
        $result = $conn->query($sql);
        return $row = $result->fetch_object();
    }
?>

<?php 
    function getPostById($postType, $id, $conn) {
        $sql = "SELECT * FROM $postType WHERE id = $id";
        $result = $conn->query($sql);
        return $row = $result->fetch_object();
    }
?>

<?php 
    function listRelatedPosts($postType, $id, $conn) {
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
                $postUrl = 'single.php?postType='.$postType.'&id='.$row[$i]->id;
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