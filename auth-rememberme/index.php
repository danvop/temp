<?php
include "config.php";


// Check if $_SESSION or $_COOKIE already set
if( isset($_SESSION['userid']) ){
   header('Location: home.php');
   exit;
}else if( isset($_COOKIE['rememberme']  )){
    
    // Decrypt cookie variable value
    $userid = decryptCookie($_COOKIE['rememberme']);
    
    $sql_query = "select count(*) as cntUser,id from users where id='".$userid."'";
    $result = $pdo->query($sql_query);
    print_r($result);
    die();
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if( $count > 0 ){
        $_SESSION['userid'] = $userid; 
       header('Location: home.php');
       exit;
    }
}


// Encrypt cookie
function encryptCookie( $value ) {
    $key  = 'youkey';
    $newvalue = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $key ), $value, MCRYPT_MODE_CBC, md5( md5( $key ) ) ) );
    return( $newvalue );
}

// Decrypt cookie
function decryptCookie( $value ) {
    $key  = 'youkey';
    $newvalue = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $key ), base64_decode( $value ), MCRYPT_MODE_CBC, md5( md5( $key ) ) ), "\0");
    return( $newvalue );
}

// On submit
if(isset($_POST['but_submit'])){
    
    $username = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    
    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser,id from users where username='".$username."' and password='".$password."'";
        $result = $pdo->query($sql_query);
        
        $row = $result->fetch(\PDO::FETCH_ASSOC);
        
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
