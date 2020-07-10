<?php
$konu = $_POST['konu'];
$name = $_POST['isim'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];
$formcontent=" MÜŞTERİ BİLGİLERİ \n Konu: $konu \n Müşteri Adı: $name \n Mail Adresi: $email \n Mesajı: $mesaj ";
$recipient = "makmaygroup@gmail.com";
$subject = "Iletisim Mail Kismi";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Teşekkürler En Kısa Sürede Size Dönüş Yapılacaktır." . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> GERİ DÖN </a>";
?>
