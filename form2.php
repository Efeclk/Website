<?php

    $baglan = mysqli_connect("localhost","root","","deneme");

    if(!$baglan)
    {
        die("connection failed:".mysqli_connect_error());
    }
    else
    {
        echo "Bağlantı Başarılı";
    }

?>