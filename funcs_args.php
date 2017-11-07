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

        $name = "John Doe";

        function say_hello_to($word) {
            echo "{$word} <br />";
        }
        say_hello_to($name);

        function better_hello($greeting, $target, $punct) {
            echo $greeting . " " . $target . $punct . "<hr />";

        }

        better_hello("Greetings", $name, "dude");


        ?>
    </body>
</html>