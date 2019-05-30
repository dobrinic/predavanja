<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['ime']) && !empty($_POST['prezime'])){
        include 'forma3_ispis.php';
    }else{
        echo 'Molimo vas da popunite sva polja!';
    }    
}else{
    header('Location:forma3.php');
}

?>