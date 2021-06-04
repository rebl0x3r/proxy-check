<?php

// Disabling Errors

error_reporting(0);

// Visitor IP 

// remove "#" if you want work with websites

#$ip = $_REQUEST['REMOTE_ADDR'];

$ip = $argv[1];

// Paste Here Your API Key

$key = "3l9k49-348gpo-047008-337584";

// Params (Read The GitHub Readme)

$params = array(
	"vpn"	=> "1",
	"asn"	=> "1",
	"node"	=> "1",
	"time"	=> "0",
	"risk"	=> "2",
	"port"	=> "0",
	"seen"	=> "1",
	"days" 	=> "7",
	"tag"	=> "0",
	"ver"	=> "0"
);

$GLOBALS['end'] = "";

// Set URL With Params

$url = "http://proxycheck.io/v2/".$ip."?key=".$key.check_params($params);

// Params Function

function check_params($params){
	global $end;
	foreach($params as $name => $key){
		$end .= "&".$name."=".$key;
	}
	return $end;
}

// Check The Give URL + IP + Parmas

function check($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

	$headers = array();
	$headers[] = 'User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0';
	$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
	$headers[] = 'Accept-Language: en-US,en;q=0.5';
	$headers[] = 'Dnt: 1';
	$headers[] = 'Connection: keep-alive';
	$headers[] = 'Upgrade-Insecure-Requests: 1';
	$headers[] = 'Pragma: no-cache';
	$headers[] = 'Cache-Control: no-cache';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($result);
	return $result;

}

// Writing The Object Into An Array

$main_array = get_object_vars(check($url));
$ip_info = get_object_vars($main_array[$ip]);

// Final Message

$message =  "+===== INFO =====+\n";
$message .= "IP          : {$ip}\n";
$message .= "Provider    : {$ip_info['provider']}\n";
$message .= "Country     : {$ip_info['country']}\n";
$message .= "Is Proxy    : {$ip_info['proxy']}\n";
$message .= "Type        : {$ip_info['type']}\n";
$message .= "Risk Score  : {$ip_info['risk']}\n";
$message .=  "+===== [ @f4c3r100 ] =====+\n";

// Print

print($message);

// Save To File 

$filename = fopen("proxy-result.txt","a+");
fwrite($filename, $message);
fclose($filename);

?>
