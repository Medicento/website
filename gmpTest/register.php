<?php require_once("includes/db_connection.php");?>
<?php require_once("includes/functions.php");?>

<?php
    $response = array();
    $response["success"] = false;

    if ($_POST['username']!=""&&$_POST['name']!=""&&$_POST['password']!="") {
        $username = mysql_prep($_POST['username']); 
        $name = mysql_prep($_POST['name']); 
        $hashed_password = password_encrypt($_POST['password']);
        
        $query = "INSERT INTO users (username, name, hashed_password)";
        $query .= " VALUES ('{$username}', '{$name}', '{$hashed_password}')";
        $result = mysqli_query($conn, $query);
        confirm_query($result);

        if ($result) {
            $response["success"] = true;     
        }   
    }
    echo json_encode($response);
?>