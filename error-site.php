<html>
    <head>
        <meta charset="UTF-8">
        <title>Main site of monthly expenses</title>
        <meta name="description" content="The main page of our monthly expenses">
        <meta name="author" content="Kamil Zazula">
        <link rel="stylesheet" href="CSS/style-error-site.css">
    </head>
    <body>
            <?php

        if (isset($_POST['login']) && isset($_POST['password']))
        {
            if (!empty($_POST['login']) && !empty(['password']))
            {
                $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
                $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
                if ($login == "abc" && $password == "123")
                {
                    if(true)
                    {
                        header("Location:main-site.php");
                    }
                }
                else
                {
                    echo "<span class='text-error'>Incorrect login or password.<br>Try again <a href='index.php'>here</a>.</span>";
                }
            }
            else
            {
                echo "<span class='text-error'>Please enter login and password.<br>Try again <a href='index.php'>here</a>.</span>";
            }
        }
        else
            echo "<span class='text-error'>Please fill in all fields.<br>Try again <a href='index.php'>here.</a></span>"
         
    ?>
    
    </body>
</html>