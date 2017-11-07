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

        $ages = array(2,3,4,5,5,6,7);

        while($age = current($ages)) {
            echo $age . ", ";
            next($ages);
        }
        ?>
    </body>
</html>