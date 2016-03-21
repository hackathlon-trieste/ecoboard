<?php
    $db_utente = "moiseevigor";
    $db_password = "";
    $db_host = "localhost";
    
    $mysql_conn = mysql_connect($db_host, $db_utente, $db_password) or die("Errore di connessione!");
    $mysql_sel = mysql_select_db("hts");
    
    $where = "AND `OraPassaggioS` <= NOW()";
    if($_REQUEST['future'])
        $where = "AND `OraPassaggioS` >= NOW() AND `OraPassaggioS` <= NOW() + INTERVAL 24 HOUR";
    
    $result = mysql_query(
    "SELECT 
    	TempoPassaggio, 
    	-round( count( * ) ) as lowelimit,
        round( count( * ) ) as upperlimit
    FROM `telecamere`
    WHERE `CameraName` = 'Telecamera 2'
    $where
    GROUP BY round( `TempoPassaggio` /1800 /1000 )
    ORDER BY `OraPassaggioS`");
    
    $j = 0;
    
    while ($row = mysql_fetch_array($result)) {
        
        $array[$j] = array(intval($row[0]), floatval($row[1]), floatval($row[2]));
        $j++;
    }
    
    echo json_encode($array);
