<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev 2</title>
</head>
<body>
<h1>3 ile Bölünebilirlik Kontrolü</h1>
    <form method="post" action="">
        Sayıyı girin: <input type="text" name="sayi"><br>
        <input type="submit" name="submit" value="Kontrol Et">
    </form>

    <?php
    function kontrolEt($sayi) {
        if (empty($sayi)) {
            echo "Değer boş olamaz.";
        } else {
            $sayi = intval($sayi); // Sayıyı tamsayıya çevir
            if ($sayi % 3 === 0) {
                echo "$sayi, 3 ile tam olarak bölünebilir.";
            } else {
                $bolen = ceil($sayi / 3) * 3;
                echo "$sayi, 3 ile tam olarak bölünemiyor. En yakın bölünebilir değer: $bolen";
            }
        }
    }

    if (isset($_POST['submit'])) {
        $sayi = $_POST['sayi'];
        kontrolEt($sayi);
    }
    ?>
</body>
</html>