<?php

$rows = file('data.txt');

print_r($rows);

foreach ($rows as $key => $value) {
   echo "$key --> $value <br>";
}

?>