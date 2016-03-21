<?php
    include("../db.inc.php");
    if ($_GET["cosa"] == "telecamere") {
        $telecamere = array("","Telecamera 1", "Telecamera 2");
    
    $where = "AND `OraPassaggioS` <= NOW()";
    if($_REQUEST['future'])
        $where = "AND `OraPassaggioS` >= NOW() AND `OraPassaggioS` <= NOW() + INTERVAL 24 HOUR";
    
    $result = mysql_query(
    "SELECT 
    	round( `TempoPassaggio`), 
    	-round( count( * ) ) as lowelimit,
        round( count( * ) ) as upperlimit
    FROM `telecamere`
    WHERE `CameraName` = '".$telecamere[$_GET["quale"]]."' ".$where."
    GROUP BY round( `TempoPassaggio` /1800 /1000 )
    ORDER BY `OraPassaggioS`");
    
    $j = 0;
    
    while ($row = mysql_fetch_array($result)) {
        
        $array[$j] = array(intval($row[0]), floatval($row[1]), floatval($row[2]));
        $j++;
    }
    }
    elseif ($_GET["cosa"] == "telecamere_euro") {
        $telecamere = array("","Telecamera 1", "Telecamera 2");
    
    $where = "AND `OraPassaggioS` <= NOW()";
    if($_REQUEST['future'])
        $where = "AND `OraPassaggioS` >= NOW() AND `OraPassaggioS` <= NOW() + INTERVAL 24 HOUR";
    
    $result = mysql_query(
    "SELECT UNIX_TIMESTAMP(DATE_FORMAT(OraPassaggioS,'%Y-%m-%d %H')), COUNT( t.EuroClasse ) * e.valore AS inquinamento, e.valore, COUNT( t.EuroClasse ) AS test, t.EuroClasse
FROM telecamere t
LEFT JOIN valori_euro e ON e.euro = t.EuroClasse
WHERE CameraName = '".$telecamere[$_GET["quale"]]."'
AND DATE(OraPassaggioS) = '2016-03-19'
GROUP BY EuroClasse,  DATE_FORMAT( OraPassaggioS,  '%Y-%m-%d %H' ) 
ORDER BY OraPassaggioS") or die(mysql_error());
    
    while ($row = mysql_fetch_array($result)) {
        
        $array["E".$row[4]][] = array(intval($row[0]*1000), floatval(round($row[1],2)));
    }
    
    // QUERY AMBIENTE
    
    $result2 = mysql_query(
    "SELECT UNIX_TIMESTAMP(DATE_FORMAT(ts,'%Y-%m-%d %H')) AS date, SUM(co) FROM `ambiente` 
    WHERE DATE(ts) = '2016-03-19' GROUP BY DATE_FORMAT(ts, '%Y-%m-%d %H')") or die(mysql_error());
    
    while ($row2 = mysql_fetch_array($result2)) {
        
        $array["AMBIENTE"][] = array(intval($row2[0]*1000), floatval(round($row2[1],2)));
    }
   
    }
    //var_dump($array);
    echo json_encode($array);
?>