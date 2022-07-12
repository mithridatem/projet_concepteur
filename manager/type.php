<?php
class TypeManager extends Type{
    public function create($bdd){
        try{
            $req = $bdd->prepare('INSERT INTO type (name_type) values (:name_type)');
            $req->execute(
                [
                    'name_type' => $this->name
                ]
        );
    
        }
        catch(Exception $e){
            echo $e;
        }
    }
}
?>