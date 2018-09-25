<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>ValidateLocalAddress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Validate Local Address</h2>
    <?php 
    //holds emails
    $email = array("jsmith123@example.org","john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jsmith123@mail.example.org");

    //puts array into new variable
    foreach($email as $emailAddress){
        echo "The email address &ldquo;". $emailAddress . "&rdquo;";

        //places valid and invalid emails
        if(preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) ==1){
            echo "is avalid e-mail address<br>";
        }else{
            echo "is not a valid e-mail address<br>";
        }
    }
    ?>
</body>

</html>