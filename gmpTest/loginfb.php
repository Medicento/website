<?php
    require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

    if (!session_id()) {
        session_start();
    }

    $fb = new \Facebook\Facebook([
        'app_id' => '167395840543313',
        'app_secret' => 'a72682c426f0d4f01a018a15987955c8',
        'default_graph_version' => 'v2.10',
        //'default_access_token' => '{access-token}', // optional
    ]);
    $helper = $fb->getRedirectLoginHelper();
 
    $permissions = []; // Optional information that your app can access, such as 'email'
    $loginUrl = $helper->getLoginUrl('http://medicento.com/gmpTest/fb-callback.php', $permissions);
 
    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook</a>';
?>