<?php 
$pageTitle = 'Home';
?>

<!-- Site header -->

<?php include 'header.php'; ?>
  <!-- Content goes here -->
  
<!-- Our site's hero area -->
<div class="hero">
  <div class="row clearfix">
  <?php if(empty ($userName)) : ?>
          <h1>Who you be? <a href="login.php">Login here</a></h1>
  <?php else : ?>
    <h1>Good morning <?php echo $userName; ?></h1>
    <?php endif; ?>
  </div>
</div>

<!-- A row of two 1/2 width columns -->
<div class="row clearfix">
  <div class="column one-half">
    <h3>Wishing you safe driving</h3>
    <p>
    Traveling is a brutality. <br>
   It forces you to trust strangers <br>
    and to lose sight of all that familiar <br>
    comfort of home and friends. <br>
    You are constantly off balance. <br>
    Nothing is yours except the essential things <br>
     air, sleep, dreams, the sea, the sky <br>
     all things <br>
     tending towards the eternal <br>
     or what we imagine of it.

</p>
  </div>

  <div class="column one-half">
    <h3>Wishing you fair weather</h3>
<p>When trouble comes your soul to try, <br>
You love the friend who just "stands by."<br>
Perhaps there's nothing she can do <br>
The thing is strictly up to you;<br>
For there are troubles all your own,<br>
And paths the soul must tread alone;<br>
Times when love cannot smooth the road<br>
Nor friendship lift the heavy load,<br>
But just to know you have a friend<br>
Who will "stand by" until the end,<br>
Whose sympathy through all endures,<br>
Whose warm handclasp is always yours<br>
It helps, someway, to pull you through,<br>
Although there's nothing she can do.
</p>
  </div>
</div>

<!-- Site footer -->
<?php include 'footer.php'; ?>