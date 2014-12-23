<?php
$arrUser = modSocialWallHelper::getYoutubeUser();
$strUser = $arrUser[0]->user;
$URL = "http://gdata.youtube.com/feeds/users/".$strUser."/uploads?alt=json&format=5&max-results=10";
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_URL, $URL);
$mixYoutubeResponse = curl_exec($c); 
$objYoutubeResponse = json_decode($mixYoutubeResponse);

?>
