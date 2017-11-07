<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Comparison Operators</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php
            // equal: ==
            //identical: ===

            //compare: > < >= <= <>
            // not equal: !=
                    
            //and: &&
            // or: ||
            //not: <!DOCTYPE html>

            $a = 4;
            $b = 3;
            $c = 20;
            $d = 4;

            if (($a > b) || ($c > $d)) {
                echo "a is larger than b or c is larger than d";
            }
        ?>
        <hr />
        <?php 
            $e = 100;
            if (!isset($e)) {
                $e = 200;
            }
            echo $e;
        ?>
        <hr />
        <?php
            // don't reject 0 or 0.0
            $quantity = "";
            if (empty($quantity) && !is_numeric($quantity)) {
                echo "You must enter a quantity other than {$quantity}";
            }
        
        ?>

    </body>
</html>