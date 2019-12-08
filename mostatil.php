<html>

<head>
<title>Mostatil</title>
</head>

<body>

    <form action="" method="post">
        <label for="tool">Tool</label><br />
        <input type="text" name="tool" id="tool" /><br />
        <label for="arz"></label><br />
        <input type="text" name="arz" id="arz" /><br />
        <input type="submit" value="Calculate" />
    </form>

    <?php


            if( isset($_POST['arz']) && isset($_POST['tool'])  )
            {

                if( is_numeric($_POST['arz']) && is_numeric($_POST['tool']) )
                {

                    echo "masahat : " . ($_POST['tool'] * $_POST['arz']) . "<br />" . "mohit : " . ( ($_POST['tool'] + $_POST['arz']) * 2);

                }

            }

    ?>

</body>

</html>