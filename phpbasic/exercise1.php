<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise1</title>
</head>
<body>
<?php
    function test($str) 
    {
        $s = substr($str, strlen($str) - 1);
        return $s . $str . $s;
    }
    echo test("Red");
    echo "<br>";
    echo test("Green");
    echo "<br>";
    echo test("1");
    ?>
</body>
</html>