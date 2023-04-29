<?php
include 'config.php';


if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO comments_table (name, comment) VALUES ('$name', '$comment')";
}
if (isset($sql) && $conn->query($sql) === TRUE) {
  echo "";
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
</head>

<body>
  <!-- Contenedor Principal -->
  <div class="comments-container">
    <h2 id="comment-title">Comments</h2>

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
              <i class="fa fa-reply"></i>
              <i class="fa fa-heart"></i>
            </div>
            <div class="comment-content">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit
              omnis animi et iure laudantium vitae, praesentium optio,
              sapiente distinctio illo?
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
                <i class="fa fa-reply"></i>
                <i class="fa fa-heart"></i>
              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Velit omnis animi et iure laudantium vitae, praesentium optio,
                sapiente distinctio illo?
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
                <i class="fa fa-reply"></i>
                <i class="fa fa-heart"></i>
              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Velit omnis animi et iure laudantium vitae, praesentium optio,
                sapiente distinctio illo?
              </div>
            </div>
          </li>
        </ul>
      </li>
      <!-- add comment -->
      <?php

      $sql = "SELECT name, comment, date FROM comments_table";
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
                    <a href="http://creaticode.com/blog"><?php echo $row['name'] ?></a>
                  </h6>

                  <span><?php $current_time = time();
                        $post_time = strtotime($row['date']);

                        // Calculate the difference in seconds
                        $time_elapsed = $current_time - $post_time;

                        // Convert seconds to minutes
                        $time_elapsed = round($time_elapsed / 60) - 60;

                        // Display the time elapsed

                        echo $time_elapsed . " minutes ago"; ?></span>
                  <i class="fa fa-reply"></i>
                  <i class="fa fa-heart"></i>
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
          <form action="#" method="post">
            <input type="text" name="comment" class="commentsend" placeholder="Write your comment here" />
            <input type="text" class="name" name="name" placeholder="Write your name">

            <button type="submit" class="send-btn" name="send">
              Post
            </button>
          </form>
        </div>
  </div>
</body>

</html>