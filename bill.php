<?php

session_start();
if (!$_SESSION['user_id'])
    header('location:login.php');

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL   
$url .= $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$slot = $params['slotno'];

$conn = mysqli_connect("localhost", "root", "", "parking_manager");
if (!$conn) {
    die();
} else {
    $sql = "SELECT * FROM slot WHERE slot_no='$slot'";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die("<script>alert('Something went wrong')</script>");
    } else {
        $row = mysqli_fetch_array($retval);
        if (!$row) {
            die();
        } else {
            $vehicleType = $row['vehicle_type'];
            $amt = $row['amt'];
            $vehicleNumber = $row['vehicle_number'];
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BILL</title>
    <style>
        .modal{
            padding-top: 8%;
            padding-left: 20%;
            padding-right: 30%;
            padding-bottom: 20%;
            background-color: rgb(0, 0, 0);

background-color: rgba(0, 0, 0, 0.4);
justify-content: center;
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 10%;
            border: 1px solid #888;
            height: 50%;
            width: 50%;
            font-size: large;
        }
        .modal-table {
            padding-left: 20%;
            padding-right: 30%;
            text-decoration: none;
        }
        button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            color: #FFFFFF;
            font-size: 12px;
            font-weight:bolder;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;


        }

      /*.modal {
            display: none;

            position: fixed;

            z-index: 1;

            padding-top: 30px;
            padding-bottom: 10px;
            padding-left: 10%;
            padding-right: 100%;
         

            left: 0;
            top: 0;
            width: 100%;
            height: 100%;

            overflow: auto;

            background-color: rgb(0, 0, 0);

            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            

        }

           .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 10%;
            border: 1px solid #888;
            height: 50%;
            width: 50%;
            font-size: large;
        }

        .modal-table {
            padding-left: 35%;
            padding-right: 30%;
            text-decoration: none;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            color: #FFFFFF;
            font-size: 12px;
            font-weight:bolder;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;


        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }*/
        
        </style>
</head>

<body>
    <fieldset>
    <div id="myfrm" class="bill">


        <div id="myModal" class="modal">


            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="#" method="POST">
                    <table class="modal-table">
                        <tr>
                            <td>
                                <h4>Slot No : <span id="slot"><?php echo "$slot"; ?></span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Vehicle Type :<span id="slot"><?php echo "$vehicleType"; ?></span></h4>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Amount :<span id="slot"><?php echo "$amt"; ?></span></h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Vehicle Number :<span id="slot"><?php echo "$vehicleNumber"; ?></span></h4><br>
                            </td>
                            <tr>
                            <td>
                                <button onclick="myPrint('myfrm')" value="print">print</button>
                            </td>
                            </tr>
                        </tr>
                    </table>
                </form>
            </div>

        </div>
    </div>
    <!--<div id="qrcode">

    </div>-->
    </fieldset>
    <script>
        function myPrint(myfrm){
            var printdata = document.getElementById(myfrm);
            newin = window.open("");
            newin.document.write(printdata.outerHTML);
            newin.print();
            newin.close();

        }
        </script>
        <!-- include the library -->
<!--<script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>-->

<!-- create a container for the QR code -->


<!-- generate the QR code -->
<!--<script>
  var qrcode = new QRCode(document.getElementById("qrcode"), {
    text: "https://www.example.com",
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
  });
</script>-->

</body>

</html>