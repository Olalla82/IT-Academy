<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time stamp</title>
</head>
<body>
     <?php
        $mytime = Carbon\Carbon::now()->add(2, 'hour');
        echo $mytime->toDateTimeString();
    ?>
</body>
</html>