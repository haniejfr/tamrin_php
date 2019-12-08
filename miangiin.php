<html>

<head>
<title>Mostatil</title>
</head>

<body>

    <form action="" method="post">
        <label for="number1">Number 1:</label><br />
        <input type="text" name="number1" id="number1" /><br />
        <label for="number2">Number 2:</label><br />
        <input type="text" name="number2" id="number2" /><br />
        <label for="number3">Number 3:</label><br />
        <input type="text" name="number3" id="number3" /><br />
        <label for="number4">Number 4:</label><br />
        <input type="text" name="number4" id="number4" /><br />
        <label for="number5">Number 5:</label><br />
        <input type="text" name="number5" id="number5" /><br />
        <input type="submit" value="Calculate" />
    </form>

    <?php


            if( isset($_POST['number1'], $_POST['number2'], $_POST['number3'], $_POST['number4'], $_POST['number5'])  )
            {

                if( is_numeric($_POST['number1']) && is_numeric($_POST['number2']) && is_numeric($_POST['number3']) && is_numeric($_POST['number4']) && is_numeric($_POST['number5']) )
                {

                    echo "miangin : " . ( ($_POST['number1'] + $_POST['number2'] + $_POST['number3'] + $_POST['number4'] + $_POST['number5']) / 5 );

                }

            }

    ?>

</body>

</html>