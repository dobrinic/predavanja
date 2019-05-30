<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $user = array();
    $user['ime'] = 'Pero';
    $user['prezime'] = 'Perić';
    $user['spol'] = 'M';
    $user['godine'] = 80;

    function pp($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    pp($user);
    

    ?>
</body>
</html>