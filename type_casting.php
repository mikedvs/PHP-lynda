<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Basic HTML 5 Tempalte</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php 
            $count = "2";
        ?>
        Type: <?php echo gettype($count); ?><br/>
        <?php 
            $count += "3";
        ?>
        Type: <?php echo gettype($count); ?><br/>
        <?php 
            $cats = "I Have" . $count . "cats";
        ?>
        Type: <?php echo gettype($cats); ?><br/>

        <br />

        Type casting<br />

        <?php settype( $count, 'integer'); ?>
        count: <?php echo gettype($count); ?><br/>
        <hr />
        <?php $count2 = (string) $count; ?>
        count: <?php echo gettype($count); ?><br/>
        count2: <?php echo gettype($count2); ?><br/>
        <hr />
        <?php $test1 = 3; ?>
        <?php $test2 = 3; ?>
        <?php settype($test1, "string"); ?>
        <?php (string) $test2; ?>
        test1: <?php echo gettype($test1); ?><br />
        test2: <?php echo gettype($test2); ?><br />
    </body>
</html>