<a href=".">back</a>
<?php
	
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
        // the request method is fine
        $email = $_POST['email'];

} else {
    
	exit('Invalid Request');

}