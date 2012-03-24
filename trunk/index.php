<?php
require( "ayar.php" );
siteBaslik();
$aksiyon = isset($_GET['aksiyon']) ? $_GET['aksiyon'] : "";

switch ($aksiyon) {
    case 'arsiv':
        arsiv();
        break;
    case 'yaziGoster':
        yaziGoster();
        break;
    default:
        anasayfa();
}

function arsiv() {
    $sonuclar = array();
    $veri = Yazi::listeGetir();
    $sonuclar['yazilar'] = $veri['sonuclar'];
    $sonuclar['toplamSatir'] = $veri['toplamSatir'];
    $sonuclar['sayfaBasligi'] = "Arsivler | Ali GOREN";
    require( TEMA_KLASOR . "/arsiv.php" );
}

function yaziGoster() {
    if (!isset($_GET["yaziId"]) || !$_GET["yaziId"]) {
        anasayfa();
        return;
    }

    $sonuclar = array();
    $sonuclar['yazi'] = Yazi::idGetir((int) $_GET["yaziId"]);
    $sonuclar['sayfaBasligi'] = $sonuclar['yazi']->baslik . " | Ali GOREN";
    require( TEMA_KLASOR . "/yaziGoster.php" );
}

function anasayfa() {
    $sonuclar = array();
    $veri = Yazi::listeGetir(ANASAYFA_YAZI_SAY);
    $sonuclar['yazilar'] = $veri['sonuclar'];
    $sonuclar['toplamSatir'] = $veri['toplamSatir'];
    $sonuclar['sayfaBasligi'] = "Ali GOREN";
    require( TEMA_KLASOR . "/anasayfa.php" );
}
?>


