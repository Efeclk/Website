<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deneme";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}


$ad = $_POST['isim'];


$sql = "INSERT INTO basvuru (Ad)
VALUES ('$ad')";

if (mysqli_query($conn, $sql)) {
    echo "Yeni kayıt başarıyla eklendi.";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
