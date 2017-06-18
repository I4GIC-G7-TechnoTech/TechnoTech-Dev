<?php  
	require_once('./../config/dbconfig.php');
	require_once('header.php');

	$keyword = $_POST['keyword'];
	
	if (isset($keyword)) {
		$sql = "
					(SELECT * FROM news WHERE title LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword ."%') 
		           	UNION
		           	(SELECT * FROM computer WHERE title LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword ."%') 
		           	UNION
		           	(SELECT * FROM phone WHERE title LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword ."%')
		           	UNION
		           	(SELECT * FROM camera WHERE title LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword ."%')
		           	UNION
		           	(SELECT * FROM wiki WHERE title LIKE '%" . $keyword . "%' OR content LIKE '%" . $keyword ."%')
		       ";

		$result = $conn->query($sql);
?>



		<!-- Title -->
        <div class="archive-title">
            <h2>Search</h2>
            <hr>
        </div>

        aklfjlskdfjlaksfjlsdjflasjfldsajf

        <div class = "line">
        	<div class="col-xs-12 col-md-4 sub-post">
	                <div class="col-xs-4 col-md-12">
	                    <a href="Hello">
	                        <img class="img-thumbnail img-feature" src="Hello">
	                    </a>
	                </div>
	                <div class="col-xs-8 col-md-12">
	                    <a href="Hello">
	                        <h4 class="post-tilte">Hello</h4>
	                    </a>
	                </div>
	            </div>
        </div>
        

		
<?php
		}
	require_once('footer.php');
?>

