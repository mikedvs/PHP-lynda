<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Associative Arrays</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php $numbers = [8,23,15,42,16,4] ?>

        Count: <?php echo count($numbers) ; ?>
        Max value: <?php echo max($numbers) ; ?>
        Min value: <?php echo min($numbers) ; ?>
        <br/>
        <pre>
            Sort: <?php sort($numbers); print_r($numbers); ?>
            Reverse Sort: <?php rsort($numbers); print_r($numbers); ?>
        </pre>
        <br />
        Implode: <?php echo $num_string = implode(", ", $numbers); ?><br />
        Explode: <?php print_r(explode(", ", $num_string)); ?><br />
        15 in array?: <?php echo in_array(15, $numbers); ?> <br />
        19 in array?: <?php echo in_array(19, $numbers); ?>
    </body>
</html>