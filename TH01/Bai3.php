<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
</head>
<body>
    <?php
        $n = rand(-100, 100);
        echo "N = $n <br>";
        if ($n > 0) {
            echo "Cac uoc so cua $n la: ";
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                echo "$i ";
            }
        }
        echo "<br><br>";
        function laSoNguyenTo($n) {
            if ($n < 2) {
                return false;
            }
            for ($i = 2; $i < $n; $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        if (laSoNguyenTo($n)) {
            echo "$n la so nguyen to <br>";
        } else {
            echo "$n khong phai la so nguyen to <br>";
        }
        $tong = 0;
        for ($i = 2; $i < $n; $i++) {
            if (laSoNguyenTo($i)) {
                $tong = $tong + $i;
            }
        }
        echo "Tong cac so nguyen to nho hon $n la: $tong <br>";
        $can = sqrt($n);
        if ($can == floor($can)) {
            echo "$n la so chinh phuong";
        } else {
            echo "$n khong phai la so chinh phuong";
        }

        } else {
        echo "N khong phai la so duong nen khong thuc hien cac yeu cau tren.";
        }
    ?>
</body>
</html>