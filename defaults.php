<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>SCope</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php

            ini_set('display_errors', 'ON');
            error_reporting();
            function paint($room="office", $color="red") {
                return "The color the {$room} is {$color} <br />";
            }

            echo paint();
            echo paint("bedroom");
            echo paint("bedroom", "green");
        ?>
    </body>
</html>