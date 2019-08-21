<?php
$ip = readline("IP : ");
echo "Reverse IP..\n\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.indoxploit.or.id/ip/".$ip);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTMLlike Gecko) Chrome/72.0.3626.109 Safari/537.36');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
$dec = json_decode($output);
foreach($dec->data->resolutions as $key){
print_r($key->hostname."\n");
// $save = @fopen("revip.txt", "a");
// fwrite($save, $key->hostname."\n");
// fclose($save);
}
?>
