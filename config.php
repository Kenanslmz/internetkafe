<?php
$servername = "localhost";
$username = "root";  // Yerel sunucuda kullanıcı adı genellikle "root" olur
$password = "";      // Yerel sunucuda şifre genellikle boş olur
$dbname = "internet_kafe"; // Veritabanı adınız

// Veritabanına bağlantı kurma
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
