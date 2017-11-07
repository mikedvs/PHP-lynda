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
        <?php $assoc = array(
            "first_name" => "Michael",
            "last_name" => "Maliniak"
        ); ?>
        <?php echo $assoc["first_name"]; ?><br />
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?>

        <?php $num_assoc = array(
            0 => "Michael",
            1 => "Maliniak"
        ); ?>
        <?php echo $num_assoc[0] . " " . $assoc["last_name"]; ?>
    </body>
</html>