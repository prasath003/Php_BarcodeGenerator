<?php
$barcodeid ='';

require "vendor/autoload.php";

?>


<html>
<head>
</head>

<body>
<div>
    <?php

    //Simple loop from 12 to 15 to generate barcodes dynamically.

    for($barcodeid =12 ; $barcodeid<=15;$barcodeid++){

        echo "Barcode for Number :$barcodeid <br><br>";

        //This is for png file
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($barcodeid, $generator::TYPE_CODE_128,2,40)) . '"> <hr><br>';

    }

    ?>
</div>
</body>
</html>
