<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/error.css">
    <title>ERROR</title>
</head>
<body>
    <h1><?php
        echo $message ?? '404 File not found';
        ?></h1>
</body>
</html>