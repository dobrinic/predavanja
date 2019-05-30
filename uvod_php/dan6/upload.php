

<form action="" method="post" enctype="multipart/form-data">
    <h3>Upload</h3>
    <input type="file" name="datoteka" id="datoteka">
    <br><br>
    <input type="submit" name="upload" value="Prenesi">
</form>

<?php

$upload_folder = 'uploads';

/* echo '<pre>';
print_r($_FILES);
echo '</pre>'; */

if (isset($_POST['upload'])) {
    
    $filename = $_FILES['datoteka']['name'];
    $tmpname = $_FILES['datoteka']['tmp_name'];
    $error = $_FILES['datoteka']['error'];
    $size = $_FILES['datoteka']['size'];


    if ($error == 0 && $size != 0) {
        
        $path = pathinfo($filename);
       // print_r($path);
        $ext = $path['extension'];
        $new_name = time().rand(1000, 100000). '.' . $ext;
        $destfile = $upload_folder . '/' . $new_name;

        if (move_uploaded_file($tmpname, $destfile)) {
            echo 'Upload je bio uspješan! <br>';
            echo '<a href="' . $destfile . '" >Prikaži original sliku</a>';
            echo "<p><img src=$destfile width=300 /></p>";
        } else {
            echo 'Došlo je do pogreške prilikom prijenosa datoteke!';
        }        
    }else{
        echo 'Došlo je do pogreške prilikom uploada!';
    }
}

?>

// MultiUpload
// 1. Korisnik odabire koliko datoteka želi uplodati, max 5 kom.
// 2. Nakon odabira pojavljuje se obrazac s onoliko polja za odabir
    datoteke koliko je korisnik odabrao.
// 3. Nakon pritiska na gumb upload sve datoteke se moraju uplodati.
// 4. Provjeriti da li mapa za upload postoji i ako ne postoji
    stvoriti ju dinamički (koristeći php ugrađene funkcije)