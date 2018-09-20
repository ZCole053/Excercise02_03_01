<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Musical Scale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Musical Scale</h2>
    <?php 
    $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti", "do");
    $outputString = "The notes of the musical scale are: ";
    foreach($musicalScale as $currentNote){
        $outputString .= " " . $currentNote;
    }
    echo "<p>$outputString</p>";
    ?>


    <h2>Formated Text</h2>
    <?php
    $displayVariable = 9.876;
    echo "<pre>\n";
    echo "Unformated text line 1.\r\n";
    echo "Unformated text line 2.\r\n";
    echo "\$displayVariable = $displayVariable";
    echo "</pre>\n";
    
    ?>
</body>

</html>