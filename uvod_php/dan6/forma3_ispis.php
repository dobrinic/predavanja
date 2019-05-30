<?php

if (isset($_POST['submit'])) {
    echo $_POST['ime'] . ' ' . $_POST['prezime'];
} else {
    header('Location:forma3.php');
}


?>