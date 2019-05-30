<?php
/* 
echo '<pre>';
print_r($_POST);
echo '</pre>';
 */
if(isset($_POST['submit'])){
    if(!empty($_POST['ime']) && !empty($_POST['prezime'])){
        echo $_POST['ime'] . ' ' . $_POST['prezime'];
    }else{
        echo 'Molimo vas da popunite sva polja!';
    }    
}else{
    header('Location:forma2_obrazac.html');
}

?>