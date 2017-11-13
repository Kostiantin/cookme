<?php
  $host = 'localhost';
  $user = 'root';
  $db = 'cookme';// database of blog posts
  $tablePrefix = '111';
  $password = '';
  
  $mysqli = new mysqli($host, $user, $password, $db);
  
  if (mysqli_connect_errno()) {
      printf("Can not connect: %s\n", mysqli_connect_error());
      exit();
  }
  
  if (!$mysqli->set_charset("utf8")) {
      printf("Can not load utf8: %s\n", $mysqli->error);
      exit();
  }
  
$createTableSql = "CREATE TABLE IF NOT EXISTS `translator_translations_$tablePrefix` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namespace` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '*',
  `group` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unstable` tinyint(1) NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translator_translations_locale_namespace_group_item_unique` (`locale`,`namespace`,`group`,`item`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";

$mysqli->query($createTableSql);

$langsConfig = [
    "en" => 4,
    "ru" => 5,
];

$handle = fopen("cookme_translations.csv", "r");
$lineNumber = 0;
if ($handle) {
    while (($line = fgetcsv($handle)) !== false) {
        if($lineNumber++ == 0) continue;
        $sql = prepareSql($line,$langsConfig,$tablePrefix, $mysqli);
        // process the line read.
    }
    fclose($handle);
} else {
    // error opening the file.
}
function prepareSql($line,$langsConfig,$tablePrefix, $mysqli){
//     $line = explode(",",$line);
    foreach($langsConfig as $langCode => $langIndex)
    {
        $sql = "INSERT INTO  translator_translations_$tablePrefix (`locale`,`namespace`,`group`,`item`,`text`) VALUES ('".$langCode."','".$line[1]."','".$line[2]."','".$line[3]."','".addslashes($line[$langIndex])."');";
        $mysqli->query($sql);
        echo $sql."<br>";
    }
}