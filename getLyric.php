<?php  

$id = $_POST['id']; 

$url = "http://api.chartlyrics.com/apiv1.asmx/GetLyric?".$id; 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_URL, $url); 
$curlResponse = curl_exec($ch); 
curl_close($ch);    

$xmlObject = simplexml_load_string($curlResponse);  

echo "<li><h2>Lyrics: ".$xmlObject->Lyric."</h2></li>";
	
?>