<?php
    $nama          = $_POST['nama'];
    $nomor         = $_POST['nomor'];
    $hari          = $_POST['hari'];
    $tipe          = $_POST['tipe'];
    $harga         = $_POST['harga'];

    echo "<head><title>FORM RENTAL MOBIL</head></title>";
    $fp = fopen("rentalmobil.txt","a+");
    fputs($fp,"$nama|$nomor|$hari|$tipe|$harga\n");
    fclose($fp);

    echo "Thank You ! <br>";
    echo "<a href=tampilan.php> Mau Rental Mobil </a><br>";
    echo "<a href=lihat.php> Lihat yang sudah isi form </a><br>";
?>