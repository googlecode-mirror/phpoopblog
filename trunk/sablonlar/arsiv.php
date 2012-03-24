<?php include "sablonlar/cek/ust.php" ?>

<h1>Yazi Arsivi</h1>

<ul id="headlines" class="archive">

    <?php foreach ($sonuclar['yazilar'] as $yazi) { ?>

        <li>
            <h2>
                <span class="pubDate"><?php echo date('j F Y', $yazi->yayinTarihi) ?></span><a href="index.php?aksiyon=yaziGoster&amp;yaziId=<?php echo $yazi->id ?>"><?php echo htmlspecialchars($yazi->baslik) ?></a>
            </h2>
            <p class="summary"><?php echo htmlspecialchars($yazi->ozet) ?></p>
        </li>

    <?php } ?>

</ul>

<p><a class="linkRengi" href="./">Anasayfaya Git</a></p>

<?php include "sablonlar/cek/alt.php" ?>

