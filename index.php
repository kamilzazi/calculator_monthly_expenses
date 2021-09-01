<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Monthly expenses - login site</title>
        <meta name="description" content="This page is used to log into the monthly expense page.">
        <meta name="author" content="Kamil Zazula">
        <link rel="stylesheet" href="CSS/style-index-site.css">

    </head>

    <body>
        
        <div>
            <div>
                <span id="title_log">Log in site to monthly expenses<br><br></span>
            </div>
            <div id="text-login-pw">
                <form action="error-site.php" method="POST">
                    <table id="login_table">
                        <tr><td><span class="text-login">Login:</span></td> <td><input type="text" name="login"><br></td></tr>
                        <tr><td><span class="text-login">Password:</span></td> <td><input type="password" name="password"></td></tr>
                        <tr><td colspan="2" id="td_button_login"><button type="submit" id="button_log"> Log in</button></td></tr>
                    </table>
                </form>
            </div>
        </div>
        
    </body>

</html>