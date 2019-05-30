<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analizator riječi</title>
</head>
<body>
    <table style="max-width:600px;" cellpadding="5" cellspacing="1" bgcolor="#555555" align="center">
        <tr bgcolor="#ffffff">
            <th><h2>Analizator riječi</h2></th>
        </tr>
        <tr bgcolor="#ffffff">
            <td>
                <?php
                    include 'validation.php';
                ?>
            </td>
        </tr>
        <tr bgcolor="#ffffff">
            <td>
                <form action="" method="post">
                    <table width="100%" cellpadding="10" cellspacing="0">
                        <tr>
                            <td align="center">U polje upišite riječ koju želite analizirati</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="text" name="word" id="word" size="40">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" name="analyze" id="analyze" value="Analiziraj!">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
        <tr bgcolor="#ffffff">
            <td>
                <?php
                    include 'view.php';
                ?>
            </td>
        </tr>
    </table>
</body>
</html>