<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select name="broj" id="broj">
        <option value="0">Molimo odaberite svoj broj:</option>
        <?php
        for ($i=1; $i < 11 ; $i++) { 
            //echo '<option value="'.$i.'">Broj - '.$i.'</option>';
            ?>
            <option value="<?php echo $i; ?>">Broj - <?php echo $i; ?></option>
        <?php
        }
        ?>
    </select>

    <section>
        <?php
        
            for ($i=1; $i<=50 ; $i++) {

                if ($i % 3 == 0) {
                    echo $i .' je djeljiv sa 3 <br>';
                }
            }
        ?>
    </section>
</body>
</html>