# php-ile-sql-veri-yazdirma

Bu kod, mysqli_connect() fonksiyonunu kullanarak MySQL veritabanına bağlanır. Daha sonra, $_POST değişkenleri kullanarak form verileri alınır ve şifrelerin eşleşip eşleşmediği kontrol edilir.

Son olarak, INSERT INTO SQL sorgusu kullanılarak form verileri SQL veritabanına eklenir. İşlem başarılı olursa, "Veri başarıyla eklendi" mesajı gösterilir. Aksi takdirde, hata mesajı ve hata kodu gösterilir.

Not: Kodu kopyalarken, "kullanici", "kullanici_adi", "sifre", "eposta", "telefon" ve "adres" gibi isimleri kendi SQL veritabanınıza uygun şekilde değiştirmeyi unutmayın. Ayrıca, güvenlik açısından, şifrelerin hashlenmesi önerilir.
