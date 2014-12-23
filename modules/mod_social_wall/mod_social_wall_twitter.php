<?php
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$oauth_access_token = "366216940-ZuvXftOIUWi8QRMs5L5M0wUt3MJsldF1OLegA5C1"; 
$oauth_access_token_secret = "9wjpTbFi8SSGZ4qrzKjEIXB9pq5E6Jw1OxwUIvOZAM"; 
$consumer_key = "qGfQfHm4f03RFfqPyBb9Tg"; 
$consumer_secret = "B8Aqpxi1v7RLPsuRIpvLv1LqbKwjL8zo8LgbdbZ0B1Q";

function buildBaseString($baseURI, $method, $params){ 
    $r = array(); ksort($params); 
    foreach($params as $key=>$value)
    {
        $r[] = "$key=" . rawurlencode($value);
    }
    return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r)); 
}

function buildAuthorizationHeader($oauth) { 
    $r = 'Authorization: OAuth '; 
    $values = array(); 
    foreach($oauth as $key=>$value) $values[] = "$key=\"" . rawurlencode($value) . "\""; 
    $r .= implode(', ', $values); return $r; 
}

$oauth = array( 
    'oauth_consumer_key' => $consumer_key, 
    'oauth_nonce' => time(), 
    'oauth_signature_method' => 
    'HMAC-SHA1', 'oauth_token' => $oauth_access_token, 
    'oauth_timestamp' => time(), 
    'oauth_version' => '1.0'
);

$base_info = buildBaseString($url, 'GET', $oauth); 
$composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret); 
$oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true)); 
$oauth['oauth_signature'] = $oauth_signature;

$header = array(buildAuthorizationHeader($oauth), 'Expect:');
$options = array( 
    CURLOPT_HTTPHEADER => $header,
    CURLOPT_HEADER => false,
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false
);

$feed = curl_init(); 
curl_setopt_array($feed, $options); 
$json = curl_exec($feed); 
curl_close($feed);
$objTwitterResponse = json_decode($json);

?>
