<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>ValidateCreditCard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Validate Credit Card</h2>
    <?php 
    //variables
    $creditCard = array("", "8910-1234-5678-6543", "0000-9123-4567-0123");

    //creating a new array
    foreach($creditCard as $indexNumber => $cardNumber){
        //checks to see if valid or not
        if(empty($cardNumber)){
            echo "<p>Credit card Number $indexNumber is invalid because it contains an empty string.</p>";
        }else{
            $creditCardNumber = $cardNumber;
            $creditCardNumber = str_replace("-","",$creditCardNumber);
            echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.</p.";
            //displays if valid if not valid
            if(!is_numeric($creditCardNumber)){
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric characters</p>";
            }else{
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
            }
        }
    }
    ?>
</body>

</html>