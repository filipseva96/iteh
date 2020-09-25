<?php

require "init.php";
header("Content-type: application/json");

$array['cols'][] = array('label' => 'Cena','type' => 'string');
$array['cols'][] = array('label' => 'Broj komada', 'type' => 'number');

$sql="SELECT cena,count(lekID) AS ukupno FROM lekovi GROUP BY cena";
$podaci = $db->rawQuery($sql);
foreach($podaci as $pod):
 $array['rows'][] = array('c' => array( array('v'=>(string)$pod["cena"]." dinara"),array('v'=>(double)$pod["ukupno"])) );
endforeach;


$niz_json = json_encode ($array);
print ($niz_json);

?>
