<html>
<?php
      include './view/components/head.php';
    ?>
  <body>
    <?php
      include './view/components/navbar.php';
      if(isset($content)){
        echo $content;
      }
    ?>

    <div>
      <h2>Comments</h2>
      <?php
      if(count($comments)){
        echo '<ul class="list-group">';
        foreach($comments as $value ){
          echo "<li class='list-group-item'>$value->commentaire</li>";
        }
        echo '<ul/>';
      }else{
        echo 'No comments';
      }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>