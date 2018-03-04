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
    //Simple loop from number 1 to 15 to generate barcodes dynamically.

    for($barcodeid = 1 ; $barcodeid<=15;$barcodeid++){

        echo "Barcode for Number : $barcodeid <br><br>";

        //This is for png file, you can change yo html,jpg,svg based on your needs with generator change refer the link in readme
        $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        
        echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($barcodeid, $generator::TYPE_CODE_128,2,40)) . '"> <hr><br>';
    }
    ?>
</div>
</body>
</html>
