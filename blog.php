<?php
 $pageTitle = 'Blog';

 include 'header.php';
 ?>

 <!-- Content here -->
 <div class="row">
 <h1>Blog</h1>
</div>

<div class="row">
<ul class="blog-roll">

<?php
$posts = scandir('posts/');

foreach($posts as $post) {
$postID = substr($post, 0, -4);
if (pathinfo($post, PATHINFO_EXTENSION) == "php") {
$postTitle = '';
$postContent = '';

include ('posts/'.$post);
echo '<li><h2><a href="single.php?post='.$postID.'">'.$postTitle.'</a></h2>
<p>'.substr($postContent, 0, 100).'</p><a class="button" href="single.php?post='.$postID.'">Read more</a></li>';
}
}

?>


</ul>
</div>
 <?php include 'footer.php'; ?>