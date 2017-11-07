<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Basic HTML 5 Tempalte</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
    <?php
        // General info: 
        echo phpinfo(INFO_GENERAL);
        // Actual programming
        $result1 = true;
        $result2 = false;
    ?>
    Result 1: <?php echo $result1; ?>
    Result 2: <?php echo $result2; ?>

    result 2 is boolean? <?php echo is_bool($result2); ?>
    </body>
</html>