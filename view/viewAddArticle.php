
<!DOCTYPE html>
<html>
<?php
      include './view/components/head.php';
    ?>
  <body>
    <?php
      include './view/components/navbar.php';
    ?>
  <div class="d-flex justify-content-center">
      <form class="col-6 bg-dark p-4 text-white" action="" method="POST">
      <div class="mb-3">
        <label for="name_art" class="form-label">Name</label>
        <input type="text" class="form-control" id="name_art" name="name_art" >
      </div>
      <div class="mb-3">
        <label for="content_art" class="form-label">Content</label>
        <textarea class="form-control" id="content_art" name="content_art"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-light">Submit</button>
    </form>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>