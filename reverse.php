<html>

<head>
<title>Reverce</title>
</head>

<body>

    <form action="" method="post">
        <label for="number1">Number 1:</label><br />
        <input type="text" name="number1" id="number1" /><br />
        <input type="submit" value="Calculate" />
    </form>

    <?php


            if( isset($_POST['number1'])  )
            {

                if( is_numeric($_POST['number1']) )
                {

                    $number = $_POST['number1'];
                    $result = 0;
                    $temp = 0;
                    while($number > 1)
                    {
                        $temp = $number % 10;
                        $result = ($result * 10) + $temp;
                        $number = $number / 10;

                        /*
                            321
                            32


                            120
123
                        */
                    }

                    echo $result;

                }

            }

    ?>

</body>

</html>