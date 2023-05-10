<?php
include 'config.php';
$alert = "";
if (isset($_SESSION['user'])) {
  $username = $_SESSION['user'];
}

if (isset($_POST['send'])) {
    $comment = trim($_POST['comment']);
    if ($comment != "") {
      if (isset($username)) {
        $sql = "INSERT INTO reviews (name, comment,country) VALUES ('$username','$comment','$name')";
        $conn->query($sql);
      } else {
        $alert = "You cannot post a review without logging in";
      }
    } else {
      $alert = "You cannot post an empty review";
    
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>comment</title>
  <link rel="stylesheet" href="comment.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-V5iRUfPioN0J0gSBb39keETMx72x1dO/G/jljoNpB35op9rJAJm6FqUfYmz6Q8Urk4V7GqjjyCmxV7kW8PhCtw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!-- Contenedor Principal -->
  <div class="comments-container">
    <h2 id="comment-title">Reviews</h2>

    <ul id="comments-list" class="comments-list">
      <li>
        <div class="comment-main-level">
          <!-- Avatar -->
          <div class="comment-avatar">
            <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="" />
          </div>
          <!-- Contenedor del Comentario -->
          <div class="comment-box">
            <div class="comment-head">
              <h6 class="comment-name by-author">
                <a href="http://creaticode.com/blog">Agustin Ortiz</a>
              </h6>
              <span>53 minutes ago</span>
              <div style="
              right: 10px;
              position: absolute;"><i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i></div>
              
            </div>
            <div class="comment-content">
              I recently visited <?= $name ?> and it was an incredible experience! The culture, the food, and the people were all amazing. I would highly recommend anyone to visit this beautiful country.
            </div>
          </div>
        </div>
        <!-- Respuestas de los comentarios -->
        <ul class="comments-list reply-list">
          <li>
            <!-- Avatar -->
            <div class="comment-avatar">
              <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt="" />
            </div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name">
                  <a href="http://creaticode.com/blog">Lorena Rojero</a>
                </h6>
                <span>35 minutes ago</span>
                <div style="
              right: 10px;
              position: absolute;"><i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i></div>
              </div>
              <div class="comment-content">
                I completely agree! I went to <?= $name ?> a few years ago and it was one of the best trips of my life. The architecture, the natural scenery, and the technology were all so fascinating. I would love to go back someday.
              </div>
            </div>
          </li>

          <li>
            <!-- Avatar -->
            <div class="comment-avatar">
              <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="" />
            </div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name by-author">
                  <a href="http://creaticode.com/blog">Agustin Ortiz</a>
                </h6>
                <span>21 minutes ago</span>
                <div style="
              right: 10px;
              position: absolute;"><i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i></div>
              </div>
              <div class="comment-content">
                Yes, <?= $name ?> is truly a unique and wonderful place. I was particularly impressed by how clean and organized everything was, even in the bustling cities like <?= $titlePlace3 ?> . The attention to detail and the respect for tradition are also very admirable. I'm already planning my next trip back!
              </div>
            </div>
          </li>
        </ul>
      </li>
      <!-- add comment -->
      <?php


      $sql = "SELECT name , comment, date FROM reviews WHERE country='$name'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
      ?>

          <li>
            <div class="comment-main-level">
              <!-- Avatar -->
              <div class="comment-avatar">
                <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="" />
              </div>
              <!-- Contenedor del Comentario -->
              <div class="comment-box">
                <div class="comment-head">
                  <h6 class="comment-name">
                    <a href="#"><?php echo $row['name'] ?></a>
                  </h6>

                  <span><?php $current_time = time();
                        $post_time = strtotime($row['date']);

                        // Calculate the difference in seconds
                        $time_elapsed = $current_time - $post_time;

                        // Convert seconds to minutes
                        $time_elapsed = round($time_elapsed / 60) - 60;

                        // Display the time elapsed

                        echo $time_elapsed . " minutes ago"; ?></span>
                  <div style="
              right: 10px;
              position: absolute;"><i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i></div>
                </div>
                <div class="comment-content">
                  <?php echo $row['comment'] ?>
                </div>
              </div>
            </div>

        <?php }
      } ?>
        <!-- Comment to send -->
        <div style="margin: 14px;
    margin-right: -15px; ">
          <form action="#" method="post" onsubmit="return redirectToLoginPage()">
            <input type="text" id="comment" name="comment" class="commentsend" placeholder="Write your comment here" />

            <button type="submit" class="send-btn" name="send">
              Post
            </button>
          </form>
          <p style="
          color: red;
          margin-left: 15px;
          margin-top: 8px;">
            <?php echo $alert ?>
          </p>
        </div>
  </div>
  <script>
function redirectToLoginPage() {
      <?php
         if (isset($_POST['send']) && isset($_SESSION['user']) ) {
          $comment = trim($_POST['comment']);
          if ($comment != "") {
            if (isset($username)) {
              $sql = "INSERT INTO reviews (name, comment) VALUES ('$username','$comment')";
              $conn->query($sql);
            } else {
              $alert = "You cannot post a review without logging in";
            }
          } else {
            $alert = "You cannot post an empty review";
          
        }
      } else {
         ?>
      // Check if the user is logged in
      if ( <?php echo !isset($_SESSION['user']) ? 'true' : 'false'; ?> ) {
        // Redirect the user to the login page
        <?php $_SESSION['precedent']='location:../pays/pays.php?name='.$name.'&demande=false' ; ?>
    
        window.location.href = "../Login.php";
        return false;
      } else 
      {
        return true;} // Allow the form to be submitted normally
    
  <?php } ?>}
  </script>

</body>

</html>