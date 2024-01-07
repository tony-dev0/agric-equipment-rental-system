<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>
    <link rel="stylesheet" href="css/request.css">
</head>
<body>
<table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-block">
                                        <h2>Request Successful</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td>Name - <?php echo $_SESSION['Name'] ?><br>Email - <?php echo $_SESSION['Email'] ?><br>Address - <?php echo $_SESSION['Addr'] ?><br>Invoice - #<script>document.write(Math.floor(Math.random()*67451)+12345)</script><br>Date - <script>var date = new Date(); let dig='0'; if (date.getMonth() > 9){let dig =''; } document.write(date.getDate()+'/0'+date.getMonth()+'/'+date.getFullYear())</script></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                        <tr>
                                                            <td>Item name</td>
                                                            <td class="alignright"> <?php echo $_GET['item_name'] ?></td>
                                                        </tr>
                                                            <td>Rental price</td>
                                                            <td class="alignright"> &#8358;<?php echo $_GET['item_price'] ?></td>
                                                        </tr>
                                                      
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <span style="font-size: 16.5px;font-family: verdana;color: #4d4242;">Receipt/Details of the product including payment link will be sent to your email</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block text-muted">
                                        Company MaringaFarm Inc, Agulu LGA Anambra State
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
                <div class="footer">
                    <table width="100%">
                        <tbody><tr>
                            <td class="aligncenter content-block">Questions? Email <a href="mailto:">support@MarigaFarm.com</a></td>
                        </tr>
                    </tbody></table>
                </div></div>
        </td>
        <td></td>
    </tr>
</tbody></table>
</body>
</html>