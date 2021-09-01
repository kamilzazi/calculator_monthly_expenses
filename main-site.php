<html>
    <head>
        <meta charset="UTF-8">
        <title>Main site of monthly expenses</title>
        <meta name="description" content="The main page of our monthly expenses">
        <meta name="author" content="Kamil Zazula">
        <link rel="stylesheet" href="CSS/style-main-site.css">
    </head>
    <body>
        <div id="title">

            <span id="main-site-title">OUR MONTHLY EXPENSES</span><br>
            <div id='div_logout_button'>
                <button type='submit'><a href='index.php'>Logout</a> </button>
            </div>
        </div>
        <div>
            <table id="table-submit-expenses">
                <tr>
                    <td class="cell-submit">
                        DATE:&nbsp;&nbsp;&nbsp;<input type="date">
                    </td>
                    <td class="cell-submit">
                        AMOUNT:&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" step="0.01" >
                    </td>
                    <td id="cell-submit-button" class="cell-submit">
                        <button type="submit">Prześlij</button>
                    </td>
                </tr>

            </table><br>
        </div>
        <div>

            <table id="table-summary-expenses">
                <thead>
                    <tr id="title-month">
                        <td id="current-month" colspan="3">MONTH:&nbsp&nbsp&nbsp<?php echo date("<b>F</b>");?></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="width-no title-summary">
                            No.
                        </td>
                        <td  class="width-other-cell title-summary">
                            Date
                        </td>
                        <td  class="width-other-cell title-summary">
                            Amount
                        </td>
                    </tr>
                    <tr>
                        <td class="width-no">
                            c1
                        </td>
                        <td  class="width-other-cell">
                            c2
                        </td>
                        <td  class="width-other-cell">
                            c3
                        </td>
                    </tr>
                    <tr>
                        <td id="NoR" class="width-no " colspan="2">
                            Number of receipts: 
                        </td>
                        <td id="SUM">
                            SUM: 
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </body>
    
</html>