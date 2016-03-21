<?php
$url = 'https://team06:A0bCxiHV3CkP!@api-sandbox.everyware-cloud.com/v2/topics.xml';
$content = file_get_contents($url);
echo $content;
//$json = json_decode($content, true);
?>