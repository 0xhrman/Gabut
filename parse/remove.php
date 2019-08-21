<?php
//remove duplicate
$array = explode("\n", file_get_contents('list.txt'));
$array = array_unique($array);
$iniygdisave = array();
foreach($array as $value) {
 $iniygdisave[] = $value."\n";
}
print_r($iniygdisave);
file_put_contents('remove.txt', $iniygdisave);
?>