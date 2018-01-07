<?php
// Orginal Twiter API PHP https://github.com/pedroventura/pv-auto-tweets
// Twitter API PHP examples https://github.com/fxstar/auto-tweets-php-api

$consumerKey    = 'DU8Fm9NouPwrsPSo4qpq0F3uG';
$consumerSecret = 'i2TtuNAlekcZK06gCMmQZBzmPVK8cdDv5W364SFcYtIpa5c8UT';
$oAuthToken     = $_SESSION['oauth_token'];
$oAuthSecret    = $_SESSION['oauth_token_secret'];

# API OAuth
require_once('twitteroauth.php');
$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);


// get followers id list last 5000
echo $tweet->get('followers/ids', array('screen_name' => 'twitter_username', 'count'=> 88));
//$tweet->get('followers/ids', array('screen_name' => 'YOUR-SCREEN-NAME-USER', 'cursor' => 9999999999));


?>
