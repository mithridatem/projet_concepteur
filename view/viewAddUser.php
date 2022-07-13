<html>
  <?php
      include './view/components/head.php';
    ?>
  <body>
    <?php
      include './view/components/navbar.php';
    ?>
    <div class="d-flex justify-content-center">
    <form class="col-6 bg-dark text-white p-4" action="" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name_util" class="form-label">Name</label>
        <input type="text" class="form-control" id="name_util" name="name_util" >
      </div>
      <div class="mb-3">
        <label for="first_name_util" class="form-label">First name</label>
        <input type="text" class="form-control" id="first_name_util" name="first_name_util"></input>
      </div>
      <div class="mb-3">
        <label class="form-label" for="mail_util">Mail</label> 
        <input type="email" class="form-control" id="mail_util " name="mail_util">
      </div>
      <div class="mb-3">
        <label class="form-label" for="mdp_util">Password</label>
        <input type="password" class="form-control" id=" mdp_util" name="mdp_util">
      </div>
      <div class="mb-3">
        <label for="img_util" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="img_util" name="img_util">
      </div>
      <button type="submit" name="submit" class="btn btn-light">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>