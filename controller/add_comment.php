<?php 
include_once './utils/bdd.php';
$bdd = BDD::getBDD();
include_once './utils/utils.php';
include_once './view/see_article.php';
$nav=true;
$content = ob_get_clean();
include_once './view/template.php';
include_once './model/article.php';
include_once './manager/article.php';
include_once './model/comment.php';
include_once './manager/comment.php';


function validate_post(){
    
    if(!isset($_GET['id'])) {echo"idpb";return false;}
    if(!isset($_POST['submit'])) {echo"submitpb";return false;}
    if(!has_all_args(
        [
            'comment'
        ],
        $_POST
        )
    ){echo"argpb";return false;}
    if(!isset($_SESSION['user'])){echo"userpb";return false;}
    return true;
}


if(validate_post()){
    echo"success";
    $_POST['date'] = !empty($_POST['date'])? 
        $_POST['date'] : 
        date('Y-m-d');
    $comment = new CommentManager($_SESSION['user']->id_util, $_POST['comment'], $_GET['id'], $_POST['date']);
    $comment->create($bdd);
}

?>