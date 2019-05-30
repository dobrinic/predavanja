<?php

$fp = fopen('data.txt', 'a');
fwrite($fp, "\nIvo,Ivić");
fwrite($fp, "\nDada,Dadić");
fclose($fp);

?>