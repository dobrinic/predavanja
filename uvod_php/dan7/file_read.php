<?php

$fpath = fopen('data.txt', 'r');
$fsize = filesize('data.txt');

$read = fread($fpath, $fsize);

$array = explode(';', $read);
array_pop($array);

print_r($array);

?>

<table border="1" width="80%" cellspacing="0" cellpadding="5">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Rbr.</th>
    </tr>
    
    <?php
        foreach ($array as $key => $value) {
            $data = explode(',', $value);
            $key++;
            echo "<tr><td>$data[0]</td>
                    <td>$data[1]</td>
                    <td>$key</td></tr>";
        }
        fclose($fpath);
    ?>
</table>