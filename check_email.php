<?php

$email = $_GET["email"] ?? "";

$existingEmails = [
    "test@gmail.com",
    "admin@gmail.com"
];

if (in_array($email, $existingEmails)) {

    echo "Email already exists.";

} else {

    echo "Email is available.";

}

?>http://localhost/ApexPlanet-Task-2/index.html
