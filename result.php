<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>
    <?php
    // 1. Check if the data was actually posted to avoid errors
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $P = $_POST['P'];
        $R = $_POST['R'];
        $T = $_POST['T'];

        $si = ($P * $T * $R) / (12 * 100);
        $ta = $si + $P;
    } else {
        // Redirect back to the form if they try to access this page directly
        header("Location: index.html"); 
        exit();
    }
    ?>

    <label>Principal :</label> <?php echo $P; ?><br><br>
    <label>Rate :</label> <?php echo $R; ?>%<br><br>
    <label>Time :</label> <?php echo $T; ?> months<br><br>
    
    <label>Simple Interest :</label> <strong><?php echo $si; ?></strong><br><br>
    <label>Total Amount with Interest :</label> <strong><?php echo $ta; ?></strong><br><br>
    
    <a href="index.html">Calculate Again</a>
</body>
</html>