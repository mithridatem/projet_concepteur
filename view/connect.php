<?php ob_start();?>
    <nav>
        <a href="/projet/">
            Tous les articles
        </a>
    </nav>
    <form action="" method="post" enctype="multipart/form-data" class="full-page">
        <p>Email:</p>
        <input type="email" name="mail_util" required/>
        <p>Password:</p>
        <input type="password" name="pwd_util" required/>
        <input type="submit" value="Connexion" name="submit_util" id="submit"/>
    </form>