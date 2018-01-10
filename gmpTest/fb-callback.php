<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>

<?php
    require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

    $fb = new Facebook\Facebook([
        'app_id' => '167395840543313',
        'app_secret' => 'a72682c426f0d4f01a018a15987955c8',
        'default_graph_version' => 'v2.10',
    ]);
   
    $helper = $fb->getRedirectLoginHelper();

    if (isset($_GET['state'])) {
        $helper->getPersistentDataHandler()->set('state', $_GET['state']);
    }
   
    try {
        $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
   
    if (! isset($accessToken)) {
        if ($helper->getError()) {
            header('HTTP/1.0 401 Unauthorized');
            echo "Error: " . $helper->getError() . "\n";
            echo "Error Code: " . $helper->getErrorCode() . "\n";
            echo "Error Reason: " . $helper->getErrorReason() . "\n";
            echo "Error Description: " . $helper->getErrorDescription() . "\n";
        } else {
            header('HTTP/1.0 400 Bad Request');
            echo 'Bad request';
        }
        exit;
    }
   
    // Logged in
    // The OAuth 2.0 client handler helps us manage access tokens
    $oAuth2Client = $fb->getOAuth2Client();
   
    // Get the access token metadata from /debug_token
    $tokenMetadata = $oAuth2Client->debugToken($accessToken);
   
    // Get user’s Facebook ID
    $userId = $tokenMetadata->getField('user_id');
    if ($userId) {
        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $fb->get('/me?fields=id,name', $accessToken);
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
         
        $user = $response->getGraphUser();
         
        $userId = $user['id']; // Retrieve user Id
        $userName = $user['name']; // Retrieve user name

        $query = "SELECT username FROM users WHERE username = '{$userId}'";
        $result = mysqli_query($conn, $query);
        confirm_query($result);

        if (!$result) {
            $insertQuery = "INSERT INTO users (username, name) VALUES('{$userId}', '{$userName}')";
            $insertResult = mysqli_query($insertQuery);
            confirm_query($insertResult);
        }
        echo "Welcome ".$userName;
    }
?>