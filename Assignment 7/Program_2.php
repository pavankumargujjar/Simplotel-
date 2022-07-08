<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="refresh" content="1" />
    <style>
        p {
            border: 5px solid black;
            border-radius: 15px;
            padding: 25px 25px 25px 25px;
            font-size: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        body {
            background-color: blue;
        }
    </style>
</head>

<body>
    <p>server time is <?php     
// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
echo $date;
?> <br>
        Today is <?php echo ($date) ?> <br>
        Today is <?php echo ($date) ?> <br>
        Today is <?php echo ($date) ?> <br>
        Today is <?php echo date("l"); ?>
    </p>

</body>

</html>

