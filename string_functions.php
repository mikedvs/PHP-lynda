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
        <br />
        Length: <?php echo strlen($third); ?><br />
        Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
        Find: <?php echo strstr($third, "brown"); ?><br />
        Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />
        <br />
        Repeat: <?php echo str_repeat($third, 3); ?><br />
        Make substring: <?php echo substr($third, 5, 10); ?><br />
        Find position: <?php echo strpos($third, "brown"); ?><br />
        Find character: <?php echo strchr($third, "z"); ?><br />
    </body>
</html>