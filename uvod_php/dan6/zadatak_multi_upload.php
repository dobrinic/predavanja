
<!--
/******* DOMAĆA ZADAĆA **************/
		MultiUpload
		1. Korisnik odabire koliko datoteka želi uplodati, max 5 kom.
		2. Nakon odabira pojavljuje se obrazac s onoliko polja za odabir datoteke koliko je korisnik odabrao.
		3. Nakon pritiska na gumb upload sve datoteke se moraju uplodati.
		4.
-->
<form method="POST" enctype="multipart/form-data">
	<h3>Upload</h3>
  <label>Upišite broj datoteka koje želite učitati:</label>
  <br><br>
  <input type="text" name="brojUnosa"/>
  <br><br>
  <input type="submit" name="potvrdi" value="Potvrdi">
  <br><br>

  <?php

    if (isset($_REQUEST['potvrdi'])) {

      $brojUnosa = $_REQUEST['brojUnosa'];

      if ($brojUnosa > 0 && $brojUnosa < 6) {

          for ($i=0; $i < $brojUnosa; $i++) {
            echo '<input type="file" name="datoteka[]"><br><br>';
          }

        echo '<input type="submit" name="upload" value="Upload">';

      }else {
        echo "Maksimalan broj prijenosa je 5!<br />";
      }

    }

   ?>
</form>

<?php

  if(isset($_REQUEST['upload'])){

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $upload_folder = 'uploads';

		if(!is_dir($upload_folder)){
			mkdir($upload_folder);
		}

    foreach ($_FILES as $key => $value) {

      $filename = $value['name'];
      $tmpname = $value['tmp_name'];
      $error = $value['error'];
      $size = $value['size'];

      if($error == UPLOAD_ERR_OK && $size != 0){

        $path = pathinfo($filename);
        $ext = $path['extension'];
        $new_name = time().rand(1000,100000).'.'.$ext;
        $destfile = $upload_folder.'/'.$new_name;

        if(move_uploaded_file($tmpname,$destfile)){
          echo 'Upload je uspješan! <br>';
          echo '<a href='.$destfile.'>Prikaži orginal sliku</a>';
          echo '<p><img src='.$destfile.' width=200></p>';
        }
        else{
          echo 'Došlo je do pogreške prilikom prijenosa datoteke!';
        }
      }
    }
  }

?>
