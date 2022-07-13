<html>
<html>
  <?php
      include './view/components/head.php';
    ?>
  <body>
    <?php
      include './view/components/navbar.php';
    ?>
    <div class="d-flex justify-content-center ">
    <form class="col-6 bg-dark p-5 text-white" action="" method="POST">
      <div class="mb-3">
        <label for="email_util" class="form-label">Email</label>
        <input type="email" class="form-control" id="email_util" name="mail_util" >
      </div>
      <div class="mb-3">
        <label class="form-label" for="mdp_util">Password</label>
        <input type="password" class="form-control" id="mdp_util" name="mdp_util">
      </div>
      <button type="submit" name="submit" class="btn btn-light">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>