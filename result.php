<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>
<body>
    <div class="calculator-card">
        <h1>Result</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $P = $_POST['P'];
            $R = $_POST['R'];
            $T = $_POST['T'];
            $unit = $_POST['T_unit'];

            // Convert everything to a yearly 'T' for the standard formula
            if ($unit == "months") {
                $time_in_years = $T / 12;
            } elseif ($unit == "days") {
                $time_in_years = $T / 365;
            } else {
                $time_in_years = $T;
            }

            $si = ($P * $R * $time_in_years) / 100;
            $ta = $si + $P;

            echo "<div class='result-text'>Principal: ₹" . number_format($P, 2) . "</div>";
            echo "<div class='result-text'>Interest ($unit):</div>";
            echo "<div class='amount-display'>₹" . number_format($si, 2) . "</div>";
            echo "<div class='result-text'>Total Payable:</div>";
            echo "<div class='amount-display'>₹" . number_format($ta, 2) . "</div>";
        }
        ?>
        <a href="index.php" class="btn btn-back">Calculate Again</a>
    </div>
</body>
</html>