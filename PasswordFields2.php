<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Passwords Fields</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Passwords Fields</h2>
    <?php 
    $record = "jdoe:8w4dso3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra 1:extra 2";
    $passwordFields = array("login name", "optional encrypted password", "numerical user ID", "numerical group ID", "usernam or comment field", "user home directory", "optional user command interperter");
    $extraFields = 0;
    $fields = explode(":", $record);
    //for each structure
    foreach($fields as $fieldIndex => $fieldValue){
        //string to display our array
        if($fieldIndex < count($passwordFields)){
            echo "<p>The {$passwordFields[$fieldIndex]} is <em>$fieldValue</em></p>\n";

        }else{
            //handles extra values in arrays instead of throwingf an error 
            ++$extraFields;
            echo "<p>Extra field # $extraFields is <em>$extraFields</em></p>\n";
        }
    }
    ?>
</body>

</html>