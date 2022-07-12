
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <div class="d-flex justify-content-center">
      <div class="col-10">
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
              include '../model/article.php';
              include '../utils/connectBdd.php';

              $articles = getAllArticle($bdd);

              if($articles){
                foreach($articles as $key=>$article){
                  $key++;
                  echo(
                    "<tr>
                      <th scope='row'>$key</th>
                      <td>$article->name_art</td>
                      <td>$article->content_art</td>
                      <td>$article->date_art</td>
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