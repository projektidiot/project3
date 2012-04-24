<?php  

$lyrics = str_replace(' ', '+', $_POST['term']); 

$url  = "http://api.chartlyrics.com/apiv1.asmx/SearchLyricText?lyricText=".$lyrics; 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_URL, $url); 
$curlResponse = curl_exec($ch); 
curl_close($ch); 

$xmlObject = simplexml_load_string($curlResponse);  

foreach($xmlObject->SearchLyricResult as $searchLyrics) { 
    echo "<li><h1 alt='lyricID=".$searchLyrics->LyricId."&lyricCheckSum=".$searchLyrics->LyricChecksum."'>".$searchLyrics->Artist." - ".$searchLyrics->Song."</h1></li>"; 
	} 
?>