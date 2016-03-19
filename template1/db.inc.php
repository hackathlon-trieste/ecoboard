<?php
$db_utente = "moiseevigor";
$db_password = "";
$db_host = "localhost";

$mysql_conn = mysql_connect($db_host, $db_utente, $db_password) or die("Errore di connessione!");
$mysql_sel = mysql_select_db("hts");



?>