<a href=".">back</a>
<?php
	
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
        // the request method is fine
        if (!empty($_POST['email']) || !empty($_POST['phone'])) {
                exit("OK");
        } else {
                //thow error
                exit('enter email or phone');
        }

        if(!empty($_POST['email'])) {
                $email = $_POST['email'];
        }

        if(!empty($_POST['phone'])) {
                $phone = $_POST['phone'];
        }

} else {
    
	exit('Invalid Request');

}