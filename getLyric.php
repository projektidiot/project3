<?php 

$lyric_id = $_POST['lyricID'];
$lyric_sum = $_POST['lyricCheckSum'];

$ch = curl_init(); 

curl_setopt($ch, CURLOPT_URL, "http://api.chartlyrics.com/apiv1.asmx/GetLyric?lyricId=".@lyric_id."&lyricCheckSum=".$lyric_sum);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

$xml = curl_exec($ch);     

$xmlObject = simplexml_load_string($xml); 

$GetLyricResult = $xmlObject->GetLyricResult;
    
    $lyrics = $GetLyricResult->Lyric;

    
    echo "<p>".$lyrics."</p>";


?>