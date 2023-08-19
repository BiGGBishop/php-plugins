<!DOCTYPE html>
<html>
<head>
    <title>Google AdSense Calculator</title>
</head>
<body>
    <h1>Google AdSense Calculator</h1>
    
    <?php
    // Define default values
    $defaultCPC = 0.5;  // Default Cost Per Click in USD
    $defaultCTR = 2;    // Default Click-Through Rate in percentage
    $defaultPageviews = 1000; // Default Pageviews

    // Initialize variables
    $cpc = isset($_POST['cpc']) ? $_POST['cpc'] : $defaultCPC;
    $ctr = isset($_POST['ctr']) ? $_POST['ctr'] : $defaultCTR;
    $pageviews = isset($_POST['pageviews']) ? $_POST['pageviews'] : $defaultPageviews;

    // Calculate earnings
    $earnings = ($pageviews * ($ctr / 100)) * $cpc;
    ?>

    <form method="post" action="">
        <label for="cpc">Cost Per Click (USD):</label>
        <input type="number" step="0.01" min="0" name="cpc" value="<?php echo $cpc; ?>" required><br>

        <label for="ctr">Click-Through Rate (%):</label>
        <input type="number" step="0.01" min="0" name="ctr" value="<?php echo $ctr; ?>" required><br>

        <label for="pageviews">Pageviews:</label>
        <input type="number" step="1" min="0" name="pageviews" value="<?php echo $pageviews; ?>" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <h2>Earnings Calculation</h2>
        <p>Estimated Earnings: $<?php echo number_format($earnings, 2); ?></p>
    <?php endif; ?>
</body>
</html>
