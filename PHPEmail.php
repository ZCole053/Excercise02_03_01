<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>PHP Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email</h2>
    <?php 
    $emailAddresses = array("john.smith@php.test" , "mary.smith@php.example", "john.jones@.invalid", "alan.smithee@test", "jsmith456@email.com" ,"jsmith456@test", "mjones@example", "mjones@example.net", "jane.a.doe@example.org");

    function validateAddress($address){
        if(strpos($address, '@') !== false && strpos($address, '.') !== false){
            return true;
        }else{
            return false;
        }
    }
    foreach($emailAddresses as $value){
        if(validateAddress($value) === false){
            echo "<p>The e-mail address <em>$value</em> does not apear to be valid.</p>";
        }
    }

    ?>
</body>

</html>