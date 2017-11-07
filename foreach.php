<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>switch</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>

        <?php
            // Foreach Loops
            $my_array = array(2,4,6,7,8,9,10);
            // Array
            foreach($my_array as $age) {
                echo "Age: {$age} <hr />";
            }

        ?>
        <?php
            // Foreach Loops
            $person = array(
                "first_name" => "Michael",
                "last_name" => "Maliniak",
                "address" => "123 Main Street",
                "city" => "Adelaide",
                "state" => "CA",
                "zip_code" => "90210"
            );
            // Array
            foreach($person as $attribute => $data) {
                $attr_nice = ucwords(str_replace("_", " ", $attribute));
                echo "{$attr_nice}: {$data} <hr />";
            }

        ?>
    </body>
</html>