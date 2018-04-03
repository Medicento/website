<?php
require_once '_config.php';

$error_msg = "";

if (isset($_POST['unit'], $_POST['username'], $_POST['p'])) {
    // Sanitize and validate the data passed in
    $unit     = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);
    $location = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
	//die;
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
    
    $prep_stmt = "SELECT id FROM `cpanel` WHERE `username` = ? LIMIT 1";
    $stmt = $link->prepare($prep_stmt);
    
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows == 1) {
            // A user with this username address already exists
            $error_msg = '<span style="color:red">This user already exists.</span>';
        }
    } else {
        $error_msg = '<span style="color:red">Database error</span>';
    }
    
    // TODO: 
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.

  
        // Create a random salt
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
		
		if(isset($_POST['save_me']))
		{
			//die;
		    // Insert the new user into the database 
			if ($insert_stmt = $link->prepare("UPDATE `cpanel` SET `name`='".$unit."', `username`='".$username."',`password`='".$password."',`salt`='".$random_salt."' WHERE `id` = ".$_POST['mid']."")) 
			{
				//$insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt);
				// Execute the prepared query.
				if (! $insert_stmt->execute()) {
					$error_msg = '<span style="color:red;">Registration failure</span>';
					//header('Location: admin_login');
					//exit();
				}
				else{
					$error_msg = '<span style="color:green;">Successfully Update</span>';
					//header('Location: admin_login');
					//exit();
				}
			    //header('Location: admin_login');
			    //exit();
            }	
		}
		
		
		if (empty($error_msg)) {
		
	  
			
			// Insert the new user into the database 
			if ($insert_stmt = $link->prepare("INSERT INTO `cpanel`(`name`, `username`, `password`, `salt`, `location`) VALUES ('".$unit."','".$username."','".$password."','".$random_salt."','".$location."')")) 
			{
				//$insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt);
				// Execute the prepared query.
				if (! $insert_stmt->execute()) {
					$error_msg = '<span style="color:red;">Registration failure</span>';
					//header('Location: admin_login');
					//exit();
				}
				else{
					$error_msg = '<span style="color:green;">Successfully Insert</span>';
					//header('Location: admin_login');
					//exit();
				}
			    //header('Location: admin_login');
			    //exit();
            }
		
}
else
{
	echo $error_msg;
	die;
}
}
?>