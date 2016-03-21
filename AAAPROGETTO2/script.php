<?php
    $db_utente = "moiseevigor";
    $db_password = "";
    $db_host = "localhost";
    
    $mysql_conn = mysql_connect($db_host, $db_utente, $db_password) or die("Errore di connessione!");
    $mysql_sel = mysql_select_db("hts");
    $result = mysql_query("SELECT * FROM telecamera1_view ORDER BY `telecamera1_view`.`DATE_FORMAT(``OraPassaggioS``, '%Y-%m-%d %H')`, EuroClasse");

    $j = 0;
    
    //floatval()
    
    while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
        $array[$j] = array($row[0], $row[1], $row[2], $row[3], $row[4]);
        $j++;
    }
    
    $query = "";
    $data = $array[0][0];
    $i = 1;
    
    for($j = 0; $j < count($array); $j++) {
        if($data != $array[$j][0]) {
            
        }
        
        $query = "INSERT INTO TabellaMaurizio VALUES (";
        $query .= $array[$j][0].":00:00, ";
        
        if(isset($array[$j][$i])) {
            $query .= $array[$j][$i].", ";
        }
        else {
            $query .= "NULL, ";
        }
        $i++;
    }
    
    //var_dump($array[0]["EuroClasse"]);
    //var_dump($array);
?>