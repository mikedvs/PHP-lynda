<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>String functions</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php 
            $first = "The quick brown fox ";
            $second = "jumped over the lazy dog";

            $third = $first;
            $third .=$second;

            echo $third;
        ?>
        <br />
        Lowercase: <?php echo strtolower($third); ?><br />
        Uppercase: <?php echo strtoupper($third); ?><br />
        Uppercase First: <?php echo ucfirst($third); ?><br />
        Uppercase Words: <?php echo ucwords($third); ?><br />
    </body>
</html>