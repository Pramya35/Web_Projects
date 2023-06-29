<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Display current date and time</h1>
    <h2>
    <?php
    echo "the server time is".date("h-i-sa");
    echo "todays date is  is".date("d-m-y");
   date_default_timezone_set('Asia/Kolkata');
    echo "the current time is".date("h-i-sa");
    ?>
    </h2>
</body>
</html>