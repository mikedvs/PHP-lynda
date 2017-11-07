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
            $a = 2;
            $b = 1;

            if($a > $b) {
                echo "Var a is greater than Var b";
            }
        ?>
        <hr />
        <?php
            $new_user = true;

            if($new_user) {
                echo "Welcome new user";
            }
        ?>
        <hr />
        <?php 
            $numerator = 20;
            $denominator = 4;
            $result = 0;
            if ($denominator > 0) {
                $result = $numerator / $denominator;
            }
            echo "Result: {$result}";
        ?>
    </body>
</html>