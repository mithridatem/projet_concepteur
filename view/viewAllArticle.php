<html>
<?php
      include './view/components/head.php';
    ?>
  <body>
    <?php
      include './view/components/navbar.php';
    ?>

    <div class="d-flex justify-content-center">
      <div class="col-10 ">
      <a class="btn btn-dark w-100 my-4" href="/projet_concepteur/addArticle" role="button">Add article</a>
        <table class="table" >
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Content</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include './model/article.php';
              include './manager/ManageArticle.php';
              include './utils/connectBdd.php';

              $articleBean = new ManagerArticle();

              $articles = $articleBean->getAllArticle($bdd);

              if($articles){
                foreach($articles as $key=>$article){
                  $key++;
                  echo(
                    "<tr>
                      <th scope='row'>$key</th>
                      <td>$article->name_art</td>
                      <td>$article->content_art</td>
                      <td>$article->date_art</td>
                      <td><a href='/projet_concepteur/showArticle?id=$article->id_art' class='btn btn-dark'>Voir article</a></td>
                    </tr>"
                  );
                }
              }
            ?>
          </tbody>
        </table>
        
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>