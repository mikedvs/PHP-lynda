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

        function say_hello() {
            echo "Hello World <hr />";
        }
        say_hello();
        function say_hello_to($word) {
            echo "{$word}";
        }
        say_hello_to("world");
        ?>
    </body>
</html>