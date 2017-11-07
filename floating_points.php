<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Floating Points</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php echo phpinfo(INFO_GENERAL); ?>
        <?php echo $float = 3.14; ?><br />
        <?php echo $float + 7; ?><br />
        <?php echo 4/3; ?><br />
        <hr />
        Round: <?php echo round($float, 1); ?><br />
        Ceiling: <?php echo ceil($float); ?><br />
        Floor: <?php echo floor($float); ?><br />
    </body>
</html>