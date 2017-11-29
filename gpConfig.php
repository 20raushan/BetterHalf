<?php
session_start();
//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';
/*
 * Configuration and setup Google API
 */
$clientId = '698513613223-s2omh6lq7jbi31aj4qgj13t14pge3g1r.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'N86uN8-jgS1G2u6S908fWfhZ'; //Google client secret
$redirectURL = 'https://newbetterhalf.000webhostapp.com/'; //Callback URL
//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Better-Half');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);
$google_oauthV2 = new Google_Oauth2Service($gClient);
?>