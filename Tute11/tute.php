<?php
    // Q1
    $x=6;
    $y=4;

    $sum=$x+$y;
    $difference=$x-$y;
    $product=$x*$y;
    $division=$x/$y;

    echo "Sum : $sum <br>";
    echo "Difference : $difference <br>";
    echo "Product : $product <br>";
    echo "Division : $division <br><br>";

?>

<?php
    //Q2
    for ($i = 5; $i <= 15; $i++) {
        echo $i . "<br>";
    }
    echo "<br>";

?>

<?php
        //Q1
    function calculateElectricityBill($units) {
        $totalBill = 0;

        if ($units <= 50) {
            $totalBill = $units * 3.50;
        } elseif ($units <= 100) {
            $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
        } elseif ($units <= 150) {
            $totalBill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
        } else {
            $totalBill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
        }

        return $totalBill;
    }

    $unitsConsumed = 120;
    $billAmount = calculateElectricityBill($unitsConsumed);
    echo "Electricity bill for $unitsConsumed units is Rs. " . number_format($billAmount, 2);
?>
