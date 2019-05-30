<?php

function pp($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$ucenik = array();

$ucenik[1]['ime'] = 'Ivo';
$ucenik[1]['prezime'] = 'Ivić';
$ucenik[1]['email'] = 'ivo@ivo';

$ucenik[2]['ime'] = 'Ivana';
$ucenik[2]['prezime'] = 'Ivanić';
$ucenik[2]['email'] = 'ivana@ivo';

$ucenik[3]['ime'] = 'Marija';
$ucenik[3]['prezime'] = 'Ivić';
$ucenik[3]['email'] = 'marija@ivo';

$ucenik[4]['ime'] = 'Zorica';
$ucenik[4]['prezime'] = 'Zorić';
$ucenik[4]['email'] = 'zora@ivo';

$ucenik[5]['ime'] = 'Gorana';
$ucenik[5]['prezime'] = 'Gorski';
$ucenik[5]['email'] = 'goga@ivo';

pp($ucenik);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <?php
            echo "<th>Rbr.</th>";
            foreach ($ucenik[1] as $key => $value) {
                echo "<th>$key</th>";
            }            
            ?>
        </tr>

        <?php
            foreach ($ucenik as $key => $value) {
                echo "<tr><td>$key.</td>";
                foreach ($value as $k => $v) {
                    echo "<td>$v</td>";
                }
            }
        ?>
        </tr>

        
    
    </table>

</body>
</html>