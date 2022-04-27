<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content = "width = device-width, initial-scale = 1.0">
        <title> Biodata Form </title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="cardbio">
    
      <div id="cardbio-title">
<h2>BIODATA</h2>
<div class="underline-title"></div>
<div id="cardbio-content">
<h1>
<?php
echo " Nama                 : Daud Arya Rafa <br>";
echo " Email                : 20082010137@student.upnjatim.ac.id <br>";
echo "Alamat                : Desa Trosobo Rt.02 Rw.07 Kab. Sidoarjo <br>";
echo "Tempat, Tanggal lahir : Surabaya, 26 Januari 2002 <br>";
echo "Hobi                  : Olahraga <br> ";
echo "Social media          : <br> - Instagram : @daudarya  <br>- Whatsapp : 087040051436 <br> ";
date_default_timezone_set('Asia/Jakarta');
echo "<left> Tanggal Sekarang : ";
echo date("l-d-M-Y, g:i:s a");

?>
</h1>
</div>
</div>
</div>
</body>
</html>

