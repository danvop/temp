<?php
include "config.php";


// Check if $_SESSION or $_COOKIE already set
if( isset($_SESSION['userid']) ){
   header('Location: home.php');
   exit;
}else if( isset($_COOKIE['rememberme']  )){
    
    // Decrypt cookie variable value and get user id
    $userid = decryptCookie($_COOKIE['rememberme']);
    //check if user id is in the table
    $sql_query = "select count(*) as cntUser,id from users where id='".$userid."'";
    $result = $pdo->query($sql_query);
    $count = $result->fetch(PDO::FETCH_ASSOC);

    if( $count > 0 ){
        $_SESSION['userid'] = $userid; 
       header('Location: home.php');
       exit;
    }
}


// Encrypt cookie
// function encryptCookie( $value ) {
//     $key  = 'youkey';
//     $newvalue = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $key ), $value, MCRYPT_MODE_CBC, md5( md5( $key ) ) ) );
//     return( $newvalue );
// }

function encryptCookie($data) {
    $key = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';   
    // Remove the base64 encoding from our key
    $encryption_key = base64_decode($key);
    // Generate an initialization vector
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    // Encrypt the data using AES 256 encryption in CBC mode using our encryption key and initialization vector.
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
    // The $iv is just as important as the key for decrypting, so save it with our encrypted data using a unique separator (::)
    return base64_encode($encrypted . '::' . $iv);  
}

// Decrypt cookie
function decryptCookie($data) {
    $key  = 'bRuD5WYw5wd0rdHR9yLlM6wt2vteuiniQBqE70nAuhU=';   
    // Remove the base64 encoding from our key
    $encryption_key = base64_decode($key);
    // To decrypt, split the encrypted data from our IV - our unique separator used was "::"
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}

// On submit
if(isset($_POST['but_submit'])){
    
    $username = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    
    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser,id from users where username='".$username."' and password='".$password."'";
        $result = $pdo->query($sql_query);
        
        $row = $result->fetch(\PDO::FETCH_ASSOC);
        print_r($row);
        die();
        $count = $row['cntUser'];

        if($count > 0){
             $userid = $row['id'];
            if( isset($_POST['rememberme']) ){

                // Set cookie variables
                $days = 30;
                $value = encryptCookie($userid);
                setcookie ("rememberme",$value,time()+ ($days *  24 * 60 * 60 * 1000));
            }
            
            $_SESSION['userid'] = $userid; 
            header('Location: home.php');
            exit;
        }else{
            echo "Invalid username and password";
        }

    }

}

?>
<html>
    <head>
        <title>Login page with Remember me in PHP</title>
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" name="txt_uname" value="" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" name="txt_pwd" value="" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="checkbox" name="rememberme"  value="1"  />&nbsp;Remember Me
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
