<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>President2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>President2</h2>
    <?php 
    $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
    $thisPresident = strtok($presidents, ";");
    while($thisPresident !=NULL){
        echo "$thisPresident<br>";
        $thisPresident = strtok(";");
    }
    ?>
</body>

</html>