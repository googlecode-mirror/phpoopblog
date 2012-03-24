<?php

ini_set("display_errors", true);
date_default_timezone_set("Europe/Istanbul"); //timezone set
define("DB_DSN", "mysql:host=localhost;dbname=ali"); //db proterties, dbname
define("DB_ADI", "root"); // db username
define("DB_SIFRESI", ""); // db password
define("SINIF_KLASOR", "siniflar");
define("TEMA_KLASOR", "sablonlar");
define("ANASAYFA_YAZI_SAY", 5); //post count your homepage, changed '5'
define("ADMIN_ADI", "admin"); //admin username, please changed 'admin'
define("ADMIN_SIFRESI", "sifrem"); //admin password, please changed 'sifrem'
require( SINIF_KLASOR . "/Yazi.php" );
function siteBaslik()
{

    echo'<center><h1><a class="altBolum" href=".">Ali GOREN</a></h1></center>';

}

?>

