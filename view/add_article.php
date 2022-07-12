<?php ob_start();?>
        <form action="" method="post">
            <p>Titre:</p>
            <input type="text" name="name_art" required/>
            <p>Sujet:</p>
            <select name="id_type">
            <?php
                    include_once './utils/bdd.php';
                    $bdd = BDD::getBDD();
                    include_once "./model/type.php";
                    
                    $data = getAll($bdd, 'type');
                    foreach($data as $k){
                        $type = $k->name_type;
                        $id = $k->id_type;
                        echo"<option value='$id'>$type</option>";
                    }
                ?>
            </select>
            <p>Contenu:</p>
            <textarea name="content_art" required></textarea>
            <p>Date:</p>
            <input type="date" name="date_art"/>
            <input type="submit" value="Valider" name="submit_util" id="submit" />
        </form>
