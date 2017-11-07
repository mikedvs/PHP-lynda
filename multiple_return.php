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

        function add_subt($val1, $val2) {
            $add = $val1 + $val2;
            $subt = $val1 - $val2;
            return array($add, $subt);
        }

        $result_array = add_subt(10,5);
        echo "Add: " .$result_array[0] . "<hr />" ;
        echo "Subt: " .$result_array[1] . "<br />";

        list($add_result, $subt_result) = add_subt(10,5);
        echo "Add: " .$add_result . "<hr />" ;
        echo "Subt: " .$subt_result . "<br />";


        ?>
    </body>
</html>