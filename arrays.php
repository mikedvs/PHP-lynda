<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Arrays</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php $numbers = array(4,8,15,16,23,42);

            echo $numbers[0];

        ?>

        <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")) ?>
        <?php echo $mixed[2]; ?>
        <?php $mixed[2] = "cat"; ?>
        <?php $mixed[4] = "mouse"; ?>
        <?php $mixed[] = "horse"; ?>
        <pre>
            <?php echo print_r($mixed); ?>
        </pre>
    </body>
</html>