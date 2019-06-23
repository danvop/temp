<!-- back to site root -->
<a href=".">back</a>
<?php

// Validate REQUEST METHOT
// POST in this case
validatePost('POST');	


// the request method is fine
// validate variables IS NOT EMPTY
if (!empty($_POST['email']) || !empty($_POST['phone'])) {
    var_dump("POST data OK");
} else {
    //thow error
    exit('enter email or phone');
}


// validate POST variables
if(!empty($_POST['email'])) {
    $email = trim(htmlspecialchars($_POST['email']));
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

	if ($email === false) {
		exit('Invalid Email');
	}
}

if(!empty($_POST['phone'])) {
    $phone = trim(htmlspecialchars($_POST['phone']));
}

// validate BOOLEAN
if (isset($_POST['subscribe'])) {
    $subscribe = $_POST['subscribe'];
    $subscribe = filter_var($subscribe, FILTER_VALIDATE_BOOLEAN);
}
print_r($_POST);

function validatePost($method){
    // if METHOD POST validate POST
    if ($_SERVER['REQUEST_METHOD'] === $method) {
    // continue
    // ELSE METHOD GET return invalid requet
    } else {
        
        exit('Invalid Request');
    
    }
}

