<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Funcitons: defining</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php

        function add($val1, $val2) {
            $sum = $val1 + $val2;
            return $sum;
        }

        $result1 = add(3,4);
        $result2 = add(5, $result1);
        echo $result2;


        ?>
    </body>
</html>