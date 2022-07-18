<?php

    include "./Animal.php";
    include "./manager/Method_animal.php";

    $serpent = new Method_animal("Billy", 2, 110);

    echo $serpent->vitesse();