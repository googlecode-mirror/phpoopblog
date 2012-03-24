<?php include "sablonlar/cek/ust.php" ?>

<div id="adminHeader">
    <h2>Ali Goren | Yazilari Listele</h2>
    <p>Merhaba <b><?php echo htmlspecialchars($_SESSION['kulladi']) ?></b>. <a class="altBolum" href="admin.php?aksiyon=cik"?>Cikis Yap</a></p>
</div>

<h1>Tum Yazilar</h1>

<?php if (isset($sonuclar['hataMesaji'])) { ?>
    <div class="hataMesaji"><?php echo $sonuclar['hataMesaji'] ?></div>
<?php } ?>


<?php if (isset($sonuclar['durumMesaji'])) { ?>
    <div class="durumMesaji"><?php echo $sonuclar['durumMesaji'] ?></div>
<?php } ?>

<table>
    <tr>
        <th>Yayin Tarihi</th>
        <th>Yazi</th>
    </tr>

    <?php foreach ($sonuclar['yazilar'] as $yazi) { ?>

        <tr onclick="location='admin.php?aksiyon=yaziDuzenle&amp;yaziId=<?php echo $yazi->id ?>'">
            <td><?php echo date('j M Y', $yazi->yayinTarihi) ?></td>
            <td>
                <?php echo $yazi->baslik ?>
            </td>
        </tr>

    <?php } ?>

</table>

<p><a class="altBolum" href="admin.php?aksiyon=yeniYazi">Yeni Yazi Ekle</a></p>

<?php include "sablonlar/cek/alt.php" ?>