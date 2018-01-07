<?php

$consumerKey    = 'DU8Fm9NouPwrsPSo4qpq0F3uG';
$consumerSecret = 'i2TtuNAlekcZK06gCMmQZBzmPVK8cdDv5W364SFcYtIpa5c8UT';
$oAuthToken     = $_SESSION['oauth_token'];
$oAuthSecret    = $_SESSION['oauth_token_secret'];

# API OAuth
require_once('twitteroauth.php');

$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);

# your code to retrieve data goes here, you can fetch your data from a rss feed or database
$tweet->get('statuses/update', array('status' => 'here the content of your tweet, you can add hashtags or links'));
?>
