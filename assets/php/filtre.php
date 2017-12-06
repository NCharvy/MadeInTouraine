<?php
    $id_f = null;
    if(isset($_POST['id']) && !empty($_POST['id'])){
        if($_POST['id'] != 42){
            $id_f = $_POST['id'];
            header('Location: ../../exposants.php?id='.$id_f);
        }
        else{
        header('Location: ../../exposants.php');
        }
    }
    else{
        header('Location: ../../exposants.php?etat=err');
    }
?>