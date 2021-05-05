<?php
    extract($_REQUEST);
    $file=fopen("db_pasien.txt","a");

    fwrite($file,"Wilayah :");
    fwrite($file, $wilayah ."\n");
    fwrite($file,"positif :");
    fwrite($file, $positif ."\n");
    fwrite($file,"dirawat :");
    fwrite($file, $dirawat ."\n");
	fwrite($file,"sembuh :");
    fwrite($file, $sembuh ."\n");
	fwrite($file,"meninggal :");
    fwrite($file, $meninggal ."\n");
    fclose($file);
    header("location: tambah_pasien.php");
 ?>