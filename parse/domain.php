<?php
//tambah http/https pada domain
$array = explode("\n", file_get_contents('old-domain.txt'));
$array = array_unique($array);
$iniygdisave = array();
foreach($array as $value) {
	$iniygdisave[] = parse_url($value, PHP_URL_SCHEME)."://".parse_url($value, PHP_URL_HOST)."\n";
}
print_r($iniygdisave);
file_put_contents('main-domain.txt', $iniygdisave);
?>
