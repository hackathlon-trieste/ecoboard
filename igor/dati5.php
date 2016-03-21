<?php
    $db_utente = "moiseevigor";
    $db_password = "";
    $db_host = "localhost";
    
    $mysql_conn = mysql_connect($db_host, $db_utente, $db_password) or die("Errore di connessione!");
    $mysql_sel = mysql_select_db("hts");
    
    $result = mysql_query(
    "SELECT 
    	tempo, 
    	-sum( geiger ) as lowelimit,
        sum( geiger ) as upperlimit
    FROM `ambiente`
    GROUP BY round( `tempo` /1800 /1000 )
    ORDER BY `tempo`");
    
    $j = 0;
    
    while ($row = mysql_fetch_array($result)) {
        
        $array[$j] = array(intval($row[0]), floatval($row[1]), floatval($row[2]));
        $j++;
    }
    
    echo json_encode($array);

