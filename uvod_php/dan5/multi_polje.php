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
    
    function pp($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

    $user = array();
    $user['ime'] = 'Pero';
    $user['prezime'] = 'Perić';
    $user['spol'] = 'M';
    $user['godine'] = 80;

    $user2 = array();
    $user2['ime'] = 'Marko';
    $user2['prezime'] = 'Markić';
    $user2['spol'] = 'M';
    $user2['godine'] = 25;

    $user3 = array();
    $user3['ime'] = 'Iva';
    $user3['prezime'] = 'Perić';
    $user3['spol'] = 'Ž';
    $user3['godine'] = 74;
    $user3['adresa'] = array(
                            'ulica' => 'Zagrebačka',
                            'kčbr' => 13
                        );

    $korisnici = array('user' => $user, 'user2' => $user2, 'user3' => $user3);

    //echo $korisnici['user3']['ime'];
    //echo $korisnici['user']['ime'].'<br>';

    //pp($korisnici);
    
    foreach ($korisnici as $key => $value) {
        echo $key .'<br>';
        foreach ($value as $k => $v) {
            if (!is_array($v)) {
                echo '  ---'.$k .' - '.$v.'<br>';                
            }else{
                foreach ($v as $kljuc => $vrijednost) {
                    echo '  ---****'.$kljuc .' - '.$vrijednost.'<br>';
                }
            }
        }
        
    }

    ?>
</body>
</html>
