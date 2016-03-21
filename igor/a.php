<?php
    $db_utente = "moiseevigor";
    $db_password = "";
    $db_host = "localhost";
    
    $mysql_conn = mysql_connect($db_host, $db_utente, $db_password) or die("Errore di connessione!");
    $mysql_sel = mysql_select_db("hts");
    $result = mysql_query("SELECT * FROM telecamera1_view ORDER BY `telecamera1_view`.`DATE_FORMAT(``OraPassaggioS``, '%Y-%m-%d %H')` ASC limit 10");


    //floatval()
    
    while ($row = mysql_fetch_assoc($result)) {
        $buf = $row["DATE_FORMAT(`OraPassaggioS`, '%Y-%m-%d %H')"];
        unset($row["DATE_FORMAT(`OraPassaggioS`, '%Y-%m-%d %H')"]);
        $row['OraPassaggioS'] = $buf;
        $array[] = array($row);
    }

$d = null;
foreach ($array as $k => $arr) {
    if($d !== $k){
        $d = $k;
        $dat[$d] = array(
            "data_timestamp" => $d,
            "data_bigint",
            "E1",
            "E2",
            "E3",
            "E4",
            "E5",
            "Coefficiente",
            "Totale",
        );
    }
    
    
}
    