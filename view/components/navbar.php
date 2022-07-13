<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
  <a class="navbar-brand" href="/projet_concepteur/">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php
      if(isset($_SESSION) && isset($_SESSION['connected']) && $_SESSION['connected']){
        echo "
          <li class='nav-item active'>
            <p class='nav-link'>Logged in as ".$_SESSION['name']."</p>
          </li>
          <li class='nav-item active'>
            <a href='/projet_concepteur/disconnect' class='nav-link'>Disconnect</a>
          </li>
        ";
      }else{
        echo '
          <li class="nav-item active">
            <a class="nav-link" href="/projet_concepteur/connection">Login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/projet_concepteur/addUser">Create account</a>
          </li>
        ';
      }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="/projet_concepteur/allArticle">Blog</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>