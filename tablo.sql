DROP TABLE IF EXISTS yazilar;
CREATE TABLE yazilar
(
  id              smallint unsigned NOT NULL auto_increment,
  yayinTarihi date NOT NULL,                             
  baslik           varchar(255) NOT NULL,                      
  ozet         text NOT NULL,                             
  icerik         mediumtext NOT NULL,                        

  PRIMARY KEY     (id)
);
