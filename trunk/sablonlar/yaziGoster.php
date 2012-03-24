<?php include "sablonlar/cek/ust.php" ?>

<h1 style="width: 75%;"><?php echo htmlspecialchars($sonuclar['yazi']->baslik) ?></h1>
<div style="width: 75%; font-style: italic;"><?php echo htmlspecialchars($sonuclar['yazi']->ozet) ?></div>
<div style="width: 75%;"><br><?php echo $sonuclar['yazi']->icerik ?></div>
<p class="pubDate">Yayinlanma Tarihi <?php echo date('j F Y', $sonuclar['yazi']->yayinTarihi) ?></p>

<p><a class="linkRengi" href="./">Anasayfaya git</a></p>

<?php include "sablonlar/cek/alt.php" ?>

