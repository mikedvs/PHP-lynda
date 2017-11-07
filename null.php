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
            $var1 = null;
            $var2 = "";
        ?>

        Var1 null: <?php echo is_null($var1); ?><br />
        Var2 null: <?php echo is_null($var2); ?><br />
        Var3 null: <?php echo is_null($var3); ?><br />
        <br />
        Var1 is set: <?php echo isset($var1); ?><br />
        Var1 is set: <?php echo isset($var2); ?><br />
        Var1 is set: <?php echo isset($var3); ?><br />
        <br />
        Var1 is empty: <?php echo empty($var1); ?><br />
        Var1 is empty: <?php echo empty($var2); ?><br />
        Var1 is empty: <?php echo empty($var3); ?><br />
    </body>
</html>