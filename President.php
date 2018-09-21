<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>President</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>President</h2>
    <?php 
    $presidents = array("George Washington", "John Adams", "Thomas Jefferson", "Jame Madison", "James Monroe");
    $yearsInOffice = array("1789 to 1797", "1797 to 1801", "1801 to 1889", "1889 to 1817", "1817 to 1825");
    $outputTemplate = "<p>President [NAME] served from [TERM]</p>\n";

    foreach($presidents as $sequence => $value){
        $tempString = str_replace("[NAME]", $value, $outputTemplate);
        $outputstring =  str_replace("[TERM]",$yearsInOffice[$sequence], $tempString);
        echo $outputstring;
    }
    ?>
</body>

</html>