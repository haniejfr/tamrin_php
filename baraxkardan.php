<html>

<head>
<title>Reverce</title>
</head>

<body>

    <form action="" method="post">
        <label for="my_text">Number 1:</label><br />
        <input type="text" name="my_text" id="my_text" /><br />
        <input type="submit" value="Calculate" />
    </form>

    <?php


            if( isset($_POST['my_text'])  )
            {

                    echo strrev($_POST['my_text']);

            }

    ?>

</body>

</html>