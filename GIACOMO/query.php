<?php
$db_utente = "moiseevigor";
$db_password = "";
$db_host = "localhost";

$mysql_conn = mysql_connect($db_host, $db_utente, $db_password) or die("Errore di connessione!");
$mysql_sel = mysql_select_db("hts");
$result = mysql_query(
"SELECT 
	TempoPassaggio, 
	-round( count( * ) ) as lowelimit ,
    round( count( * ) ) as upperlimit
FROM `telecamere`
WHERE `CameraName` = 'Telecamera 1'
GROUP BY round( `TempoPassaggio` /1800 /1000 )
ORDER BY `OraPassaggioS`");

    $j = 0;
    

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    $array[$j] = array($row[0], $row[1], $row[2]);
    $j++;
    /*
    printf("TempoPassaggio: %s  lowelimit: %s  upperlimit: %s", $row[0], $row[1], $row[2]);
    echo "<br/>";
    */
}

    var_dump($array);


?>