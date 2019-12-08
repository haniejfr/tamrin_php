<html>

<head>
<title>Mostatil</title>
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

                    $result = 1;
                    for($i=1; $i<=$_POST['number1']; $i++)
                        $result*=$i; // $result = $result * $i;

                        echo $result;

                }

            }

    ?>

</body>

</html>