<?php ob_start();?>
        <form action="" method="post" enctype="multipart/form-data" class="full-page">
            <p>Prénom:</p>
            <input type="text" name="first_name_util" required/>
            <p>Nom:</p>
            <input type="text" name="name_util" required/>
            <p>Avatar:</p>
            <input type="file" name="img_util" accept="image/*"/>
            <p>Email:</p>
            <input type="email" name="mail_util" required/>
            <p>Password:</p>
            <input type="password" name="pwd_util" required/>
            <input type="submit" value="Valider" name="submit_util" id="submit"/>
        </form>