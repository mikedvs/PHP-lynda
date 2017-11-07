<!doctype html>

<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Integer functions</title>
    <meta name="description" content="Basic HTML 5 Tempalte">
    <meta name="author" content="Michael Maliniak">

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </head>

    <body>
        <?php 
            $var1 = 3;
            $var2 = 4;

        ?>
        <br />
        Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 -5 ?><br />
        <br />
        Absolute value: <?php echo abs(0 - 300); ?><br />
        Exponential: <?php echo pow(2, 8); ?><br />
        Square root: <?php echo sqrt(100); ?><br />
        Modulo: <?php echo fmod(21,7); ?><br />
        Random: <?php echo rand(); ?><br />
        Random (min, max): <?php echo rand(1, 10); ?><br />
        +=: <?php $var2 += 4; echo $var2;?><br />
        -=: <?php $var2 -= 4; echo $var2;?><br />
        /=: <?php $var2 /= 4; echo $var2;?><br />
        *=: <?php $var2 *= 4; echo $var2;?><br />
        <br />
        increment: <?php $var1++; echo $var1; ?><br />
        decrement: <?php $var1--; echo $var1; ?><br />
    </body>
</html>