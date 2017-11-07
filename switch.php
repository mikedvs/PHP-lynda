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

            $a = 3;

            switch($a) {
                case 0:
                    echo "a equals 0<br/>";
                    break;
                case 3:
                    echo "a equals 0<br/>";
                    break;
                case 2:
                    echo "a equals 0<br/>";
                    break;
                default;
                    echo "a is not eaul to any of the numbers";
                    break;
            };
        
        ?>
                <?php

            $customer = 'customer';

            switch($customer) {
                case 'client':
                    echo "customer equals 0<br/>";
                    break;
                case 'person':
                case 'customer':
                    echo "customer is either person or customer";
                    break;
                default;
                    echo "customer is not equal to any of the  possibilities";
                    break;
            };
        
        ?>
    </body>
</html>