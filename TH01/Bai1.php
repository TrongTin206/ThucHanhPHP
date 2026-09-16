<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
</head>
<body>
    <?php
        $n =rand(1,100);
        echo " N = $n <br>";
        echo "So chan tu 1 den $n la: ";
        for ($i=1; $i<= $n; $i++) 
        if( $i % 2 == 0) echo "$i  ";   
    ?>
</body>