<?php
    echo "<head><title>Rental Mobil</title></head>";
    $fp = fopen("rentalmobil.txt","r");
    echo "<table border=0>";

    while ($isi = fgets($fp,80)){
        $pisah = explode("|",$isi);
        echo "<tr><td>Nama Lengkap</td><td>: $pisah[0]</td></tr>";
        echo "<tr><td>Nomor HP </td><td>: $pisah[1]</td></tr>";
        echo "<tr><td>Hari </td><td>: $pisah[2]</td></tr>";
        echo "<tr><td>Tipe Mobil </td><td>: $pisah[3]</td></tr>";
        echo "<tr><td>Harga </td><td>: $pisah[4]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
    }

    echo "</table>";
    echo "<a href=form.html> Klik Disini </a> Jika Mau Rental Mobil";