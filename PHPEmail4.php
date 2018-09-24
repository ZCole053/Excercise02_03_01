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

   function sortAddresses($addresses){
       $sortedAddresses = array();
       $ilimit = count($addresses) - 1;
       $jlimit = count($addresses);
       for ($i = 0; $i < $ilimit; $i++){
            $currentAddress = $addresses[$i];
           for ($j = $i + 1; $j < $jlimit; $j++){
                if(strcasecmp($currentAddress,$addresses[$j])> 0){
                    $tempVal = $addresses[$j];
                    $addresses[$j] = $currentAddress;
                    $currentAddress = $tempVal;
                }
           }
           $sortedAddresses[] = $currentAddress;
       }
       return($sortedAddresses);
   }
   $sortedAddresses = sortAddresses($emailAddresses);
   $sortedAddressesList = implode(",",$sortedAddresses);
   echo "<p>Sorted Addresses: $sortedAddressesList</p>\n";

   function validateAddress($addresses){
       if(preg_match("/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[w-]+)*(\.[A-Za-z]{2,})$/i",$addresses)){
           return true;
       }
       else{
           return false;
       }
   }
   
   foreach($sortedAddresses as $value){
       if(validateAddress($value) === false){
           echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
       }
   }

    ?>
</body>

</html>