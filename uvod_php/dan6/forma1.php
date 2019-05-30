<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
        <p>
            <label for="ime">Ime:</label>
            <input type="text" name="ime" id="ime" placeholder="Ovdje upišite vaše ime">
        </p>
        <p>
            <label for="prezime">Prezime:</label>
            <input type="text" name="prezime" id="prezime">
        </p>
        <p>
            <input type="submit" name ="submit" value="Pošalji">
        </p>
    </form>

</body>
</html>


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
}

?>