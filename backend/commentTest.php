<!-- Post content here -->

<!-- Then cmments below -->
<h1>Comments</h1>
<?php
$result = mysql_query("SELECT * FROM comments WHERE postid=0");
//0 should be the current post's id
while($row = mysql_fetch_object($result))
{
?>
<div class="comment">
By: <?php echo $row->author; //Or similar in your table ?>
<p>
<?php echo;$row->body; ?>
</p>
</div>
<?php
}
?>
<h1>Leave a comment:</h1>
<form action="insertcomment.php" method="post">
<!-- Here the shit they must fill out -->
<input type="hidden" name="postid" value="<?php //your posts id ?>" />
<input type="submit" />
</form>


<!-- Add comment -->
<?php
//First check if everything is filled in
if(/*some statements*/)
{
//Do a mysql_real_escape_string() to all fields

//Then insert comment
mysql_query("INSERT INTO comments VALUES ($author,$postid,$body,$etc)");
}
else
{
die("Fill out everything please. Mkay.");
}
?>