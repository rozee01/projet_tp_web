<!DOCTYPE html>
<html lang="en">

<head>
<?php $path="./";
	
	?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TourBuddy</title>
  <!-- including general dependancies -->
  <?php include_once('dependancies.php'); ?>
  <link rel="stylesheet" href="styles/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <!--navbar start-->
  <?php include_once('header.php'); ?>
  <!--navbar end-->

  <!--HOME SECTION starts -->


  <div class="home">
    <div class="content">
      <h2 id="welcome">Welcome dear <?php if (!isset($_SESSION['user'])){echo 'TourBuddy';} else {echo $_SESSION['user'];} ?> to our travel social network,</h2>
      <p><br> where we share our passion for exploring the world and discovering new cultures,
        foods, and adventures.Whether you're a seasoned traveler or just starting out,
        we've got something for you. Our blog is filled with travel tips, insider insights,
        and personal stories to inspire you to pack your bags and set off on your own adventure.
      <h2> So come along with us and let's explore the world together!</h2></p>


    </div>
  </div>

  <!--Home section ends-->


  <!--Section continent starts-->

  <?php include_once('continent_map.php') ?>
  <!--section continent ends -->

  <!--footer section-->
  <?php include_once('footer.php'); ?>

  <script type="text/javascript" src="index.js">
  </script>

</body>
