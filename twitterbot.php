<?php

// use twitteroauth library
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

require "connect-db.php";

//get access to the twitteraccount
$consumerKey = 'enter-consumer-key-here';
$consumerSecret = 'enter-consumer-secret-key-here';
$accessToken =  'enter-access-token-here';
$accessTokenSecret = 'enter-access-token-secret-here';


$sql = "SELECT * from entspannungsuebungen ORDER BY rand() LIMIT 1";
$result = $db->query($sql);

$content = $result->fetch_assoc();
       
        echo "Twittersimulation: " . $content["uebungen"]. "";

// connect with twitteraccount
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
//post tweet
$statues = $connection->post("statuses/update", array("status" => "" . $content["uebungen"]. ""));

$db->close();
?>