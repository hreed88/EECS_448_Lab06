<?php

     $user = $_POST['userName']; 
     $pass = $_POST['passWord'];
     $ball = $_POST['Balloons'];
     $can = $_POST['Candles'];
     $pres = $_POST['Presents'];
     $shipping = $_POST['Shipping'];
     $ballSub = $ball * 2; 
     $canSub = $can * .5;
     $presSub = $pres * 25;
     $shipType;

     if($shipping == 0)
        $shipType = "Free";
     if($shipping == 50)
        $shipType = "Overnight";
    if($shipping == 5)
        $shipType = "3 day";

    $total = $ballSub + $canSub + $presSub + $shipping;

    //function printWelcome(){
        echo "<h1>Welcome ".$user."! Your password is ".$pass.".</h1>";

        echo '
        
        <html>
        <head>
            <title>Recipt</title>
            <link rel="stylesheet" href="style.css">
            <script src="formChecker.js"></script>
        </head>
        <body>
        <div id="recipt">
                <table>
                    <tr>
                        <th></th>
                        <th align="center">Cost per item</th>
                        <th align="center">Quantity</th>
                        <th align="right">SubTotal</th>
                    </tr>
                    <tr>
                        <th align="left">Balloons</th>
                        <td align="center">$2.00</td>
                        <td align="center">'.$ball.'</td>
                        <td align="right">$'.$ballSub.'</td>
                    </tr>
                    <tr>
                        <th align="left">Candles</th>
                        <td align="center">$0.50</td>
                        <td align="center">'.$can.'</td>
                        <td align="right">$'.$canSub.'</td>
                    </tr>
                    <tr>
                        <th align="left">Presents</th>
                        <td align="center">$25.00</td>
                        <td align="center">'.$pres.'</td>
                        <td align="right">$'.$presSub.'</td>
                    </tr>
                    <tr id="ship">
                        <th align="left">Shipping</th>
                        <td colspan="2" align="center">'.$shipType.'</td>
                        <td align="right">$'.$shipping.'</td>
                    </tr>
                    <tr>
                    <th colspan="3" align="center">Total Cost</th>
                    <th align="right">$'.$total.'</th>
                    </tr>
                    </table>
                    </div>
                    <br>
                    <button id="print" onclick="myPrint()">Print Recipt</button>
                    <br>
                    <br>
                    <a href=../index.html>Home</a>
                    </body>
                    </html>
                    '
                    ;

?>