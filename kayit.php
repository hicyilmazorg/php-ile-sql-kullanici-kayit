<?php
// Veritabanı bağlantısı
$conn = mysqli_connect("localhost", "kullanici_adi", "sifre", "veritabani_adi");
if (!$conn) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}

// POST verileri alınır
$kullanici_adi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];
$sifre_onay = $_POST['sifre_onay'];
$eposta = $_POST['eposta'];
$telefon = $_POST['telefon'];
$adres = $_POST['adres'];

// Şifrelerin eşleştiğini kontrol edin
if ($sifre !== $sifre_onay) {
    die("Hata: Şifreler eşleşmiyor.");
}

// Veritabanına veri ekleyin
$sql = "INSERT INTO kullanici (kullanici_adi, sifre, eposta, telefon, adres)
VALUES ('$kullanici_adi', '$sifre', '$eposta', '$telefon', '$adres')";

if (mysqli_query($conn, $sql)) {
    echo "Veri başarıyla eklendi.";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
}

// Veritabanı bağlantısını kapatın
mysqli_close($conn);
?>
