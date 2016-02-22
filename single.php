<?php
$postID = urldecode($_GET["post"]);

 include ('posts/'.$postID.'.php');

 $pageTitle = $postTitle;

 $posts = scandir('posts/');
 $postCount = '';
 foreach($posts as $post) {
 	if (pathinfo($post, PATHINFO_EXTENSION) == "php") {
 		$postCount++;
 	}
 }

?>

<?php
 include 'header.php';
 ?>

 <!-- Content here -->
 <div class="row">
 
 <h1>
<?php
echo $postTitle;
?>
</h1>
<p>
<?php
echo $postContent;
?>
</p>
<div class="post-navigation">
<?php if($postID -1 > 0) : ?>
<a class="button" href="single.php?post=0<?php echo $postID - 1; ?>">Previous</a>
<?php endif ?>
<?php if($postID < $postCount) : ?>
<a class="button" href="single.php?post=0<?php echo $postID +1; ?>">Next</a>
<?php endif ?>
</div>
</div>
 <?php include 'footer.php'; ?>