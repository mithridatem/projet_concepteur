<?php

include './utils/connectBdd.php';
include './model/article.php';
include './model/comment.php';
include './manager/ManageArticle.php';
include './manager/ManageComment.php';


if( !isset($_SESSION) || !isset($_SESSION['connected']) || !$_SESSION['connected'] ){
  header('location:/projet_concepteur/connection');
}

if(!isset($_GET['id'])){

  echo 'Provide Id';
  die;
}else{
  $articleBean = new ManagerArticle();
  $article = $articleBean->getArticleById($bdd,$_GET['id']);
  if(!count($article)){
    echo 'Article not found';
    die;
  }else{
    $art=$article[0];
    ob_start();
    ?>
    <div class=".container-fluid">
      <?php
      echo "<h2>$art->name_art</h2>";
      echo "<p>$art->content_art</p>";
      echo "<p>Date: $art->date_art</p>";
      echo "<button data-bs-toggle='modal' data-bs-target='#exampleModal' class='btn btn-dark' id='addcomment'> Add comment</button>";
      echo "
      <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Add comment</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <form method='POST' action='/projet_concepteur/addComment?id=$art->id_art'>
              <div class='mb-3'>
                <label for='comment' class='form-label'>Comment</label>
                <textarea class='form-control' id='comment' name='comment' aria-describedby='emailHelp'></textarea>
              </div>
              <button type='submit' name='submit' class='btn btn-dark'>Submit</button>
            </form>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            <button type='button' class='btn btn-dark'>Save changes</button>
          </div>
        </div>
      </div>
    </div>
      ";
    $content = ob_get_clean();
    $commentBean = new ManagerComment($art->id_art, null, null, null);
    $comments = $commentBean->getCommentByArticle($bdd);

    ?>
    </div>
    <!-- <script>
      let
    </script> -->
    <?php
  }
}
include './view/viewArticle.php';
?>