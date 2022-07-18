<?php
    #Concatenantion
    $text = "ma chaine ";
    $nbr = 123;

    echo "Le contenu de ma variable est égale à l'envers :  $text <br/>";

    echo 'Le contenu de ma variable est égale à l\'envers :  '.$text  ;

    #Parcontre pour faire du calcule c'est un peu plus embettant

    echo "ici je veut incrementer ma varianble nrb $nbr++ "; #pas interpreter

    echo "ici je le refait mais ducoup je concatene pour simplifier" . $nbr++;

    # Les super globale

    #function un peu plus loin
    $cpt = 0;

    affiche($nbr, $cpt);

    
    
    function affiche($var, $cpt):void{
        echo "ici je veut incrementer ma varianble nrb $var <br/>"; #pas interpreter
         $cpt++;
        echo $cpt . "à l'interieur";
    }
    $cpt2 = 0;
    global_count();
    global_count();

    function global_count():void{
        global $cpt2;
        $cpt2++;
    }

    echo $cpt2 . "à l'exterieur <br.>";