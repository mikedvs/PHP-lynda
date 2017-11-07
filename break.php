<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Continue</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">
    </head>

    <body>
         <?php
            for ($count = 0; $count <= 10; $count++) {
                if ($count == 5) {
                    break;
                }
                echo "{$count}";
            }
        ?>
    </body>
</html>