<?php ob_start();?>
<form action="" method="post" class="full-page">
            <p>Utilisateur:</p>
            <select name="id_util">
            <?php
                    
                    $data = getAll($bdd, 'utilisateur');
                    foreach($data as $k){
                        $user = $k->name_util;
                        $id = $k->id_util;
                        echo"<option value='$id'>$user</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Supprimer" name="submit_util" id="submit" />
        </form>
