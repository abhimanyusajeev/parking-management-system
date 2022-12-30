<?php
session_start();
if (!$_SESSION['user_id'])
    header('location:login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARKING SLOT BOOKING</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            box-sizing: border-box;
        }

        table {
            width: 100%;
        }

        td {
            margin: 40px;
        }

        .parking-area {
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .section {
            width: 50px;
            height: 50px;
            color: black;
            font-size: 10px;
            text-align: center;
            line-height: 20px;
            border-radius: 20px;
            margin: 5px;
            border: 1px solid green;
            cursor: pointer;


        }

        .selected-section {
            width: 50px;
            height: 50px;
            background-color: #66ff66;
            color: black;
            font-size: 10px;
            text-align: center;
            line-height: 20px;
            border-radius: 20px;
            margin: 5px;
        }

        h1 {
            text-align: center;
        }

        .section:hover {
            background-color: #66ff66;
        }

        #slot-amt {

            text-align: center;
        }

        #button {
            padding-left: 50%;

        }

        .slot-table {
            padding-left: 30%;
        }

        .row {
            padding-top: 20%;
            padding-bottom: 30%;

        }

        .modal {
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
            font-weight: bolder;
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
        }
    </style>
</head>

<body>
    <h1> PARKING AREA SLOT</h1>
    <p>SECTION-A</p>

    <div class="parking-area">
        <table>
            <tr>
                <td class="section" id="A00" onclick="handleSelect('A00')">
                    <h2>A00</h2>
                </td>
                <td class="section" id="A01" onclick="handleSelect('A01')">
                    <h2>A01</h2>
                </td>
                <td class="section" id="A02" onclick="handleSelect('A02')">
                    <h2>A02</h2>
                </td>
                <td class="section" id="A03" onclick="handleSelect('A03')">
                    <h2>A03</h2>
                </td>
                <td class="section" id="A04" onclick="handleSelect('A04')">
                    <h2>A04</h2>
                </td>
                <td class="section" id="A05" onclick="handleSelect('A05')">
                    <h2>A05</h2>
                </td>
                <td class="section" id="A06" onclick="handleSelect('A06')">
                    <h2>A06</h2>
                </td>
                <td class="section" id="A07" onclick="handleSelect('A07')">
                    <h2>A07</h2>
                </td>
                <td class="section" id="A08" onclick="handleSelect('A08')">
                    <h2>A08</h2>
                </td>
                <td class="section" id="A09" onclick="handleSelect('A09')">
                    <h2>A09</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="A10" onclick="handleSelect('A10')">
                    <h2>A10</h2>
                </td>
                <td class="section" id="A11" onclick="handleSelect('A11')">
                    <h2>A11</h2>
                </td>
                <td class="section" id="A12" onclick="handleSelect('A12')">
                    <h2>A12</h2>
                </td>
                <td class="section" id="A13" onclick="handleSelect('A13')">
                    <h2>A13</h2>
                </td>
                <td class="section" id="A14" onclick="handleSelect('A14')">
                    <h2>A14</h2>
                </td>
                <td class="section" id="A15" onclick="handleSelect('A15')">
                    <h2>A15</h2>
                </td>
                <td class="section" id="A16" onclick="handleSelect('A16')">
                    <h2>A16</h2>
                </td>
                <td class="section" id="A17" onclick="handleSelect('A17')">
                    <h2>A17</h2>
                </td>
                <td class="section" id="A18" onclick="handleSelect('A18')">
                    <h2>A18</h2>
                </td>
                <td class="section" id="A19" onclick="handleSelect('A19')">
                    <h2>A19</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="A20" onclick="handleSelect('A20')">
                    <h2>A20</h2>
                </td>
                <td class="section" id="A21" onclick="handleSelect('A21')">
                    <h2>A21</h2>
                </td>
                <td class="section" id="A22" onclick="handleSelect('A22')">
                    <h2>A22</h2>
                </td>
                <td class="section" id="A23" onclick="handleSelect('A23')">
                    <h2>A23</h2>
                </td>
                <td class="section" id="A24" onclick="handleSelect('A24')">
                    <h2>A24</h2>
                </td>
                <td class="section" id="A25" onclick="handleSelect('A25')">
                    <h2>A25</h2>
                </td>
                <td class="section" id="A26" onclick="handleSelect('A26')">
                    <h2>A26</h2>
                </td>
                <td class="section" id="A27" onclick="handleSelect('A27')">
                    <h2>A27</h2>
                </td>
                <td class="section" id="A28" onclick="handleSelect('A28')">
                    <h2>A28</h2>
                </td>
                <td class="section" id="A29" onclick="handleSelect('A29')">
                    <h2>A29</h2>
                </td>
            </tr>
        </table>
        <p>SECTION-B</p>
        <table>
            <tr>
                <td class="section" id="B00" onclick="handleSelect('B00')">
                    <h2>B00</h2>
                </td>
                <td class="section" id="B01" onclick="handleSelect('B01')">
                    <h2>B01</h2>
                </td>
                <td class="section" id="B02" onclick="handleSelect('B02')">
                    <h2>B02</h2>
                </td>
                <td class="section" id="B03" onclick="handleSelect('B03')">
                    <h2>B03</h2>
                </td>
                <td class="section" id="B04" onclick="handleSelect('B04')">
                    <h2>B04</h2>
                </td>
                <td class="section" id="B05" onclick="handleSelect('B05')">
                    <h2>B05</h2>
                </td>
                <td class="section" id="B06" onclick="handleSelect('B06')">
                    <h2>B06</h2>
                </td>
                <td class="section" id="B07" onclick="handleSelect('B07')">
                    <h2>B07</h2>
                </td>
                <td class="section" id="B08" onclick="handleSelect('B08')">
                    <h2>B08</h2>
                </td>
                <td class="section" id="B09" onclick="handleSelect('B09')">
                    <h2>B09</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="B10" onclick="handleSelect('B10')">
                    <h2>B10</h2>
                </td>
                <td class="section" id="B11" onclick="handleSelect('B11')">
                    <h2>B11</h2>
                </td>
                <td class="section" id="B12" onclick="handleSelect('B12')">
                    <h2>B12</h2>
                </td>
                <td class="section" id="B13" onclick="handleSelect('B13')">
                    <h2>B13</h2>
                </td>
                <td class="section" id="B14" onclick="handleSelect('B14')">
                    <h2>B14</h2>
                </td>
                <td class="section" id="B15" onclick="handleSelect('B15')">
                    <h2>B15</h2>
                </td>
                <td class="section" id="B16" onclick="handleSelect('B16')">
                    <h2>B16</h2>
                </td>
                <td class="section" id="B17" onclick="handleSelect('B17')">
                    <h2>B17</h2>
                </td>
                <td class="section" id="B18" onclick="handleSelect('B18')">
                    <h2>B18</h2>
                </td>
                <td class="section" id="B19" onclick="handleSelect('B19')">
                    <h2>B19</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="B20" onclick="handleSelect('B20')">
                    <h2>B20</h2>
                </td>
                <td class="section" id="B21" onclick="handleSelect('B21')">
                    <h2>B21</h2>
                </td>
                <td class="section" id="B22" onclick="handleSelect('B22')">
                    <h2>B22</h2>
                </td>
                <td class="section" id="B23" onclick="handleSelect('B23')">
                    <h2>B23</h2>
                </td>
                <td class="section" id="B24" onclick="handleSelect('B24')">
                    <h2>B24</h2>
                </td>
                <td class="section" id="B25" onclick="handleSelect('B25')">
                    <h2>B25</h2>
                </td>
                <td class="section" id="B26" onclick="handleSelect('B26')">
                    <h2>B26</h2>
                </td>
                <td class="section" id="B27" onclick="handleSelect('B27')">
                    <h2>B27</h2>
                </td>
                <td class="section" id="B28" onclick="handleSelect('B28')">
                    <h2>B28</h2>
                </td>
                <td class="section" id="B29" onclick="handleSelect('B29')">
                    <h2>B29</h2>
                </td>
            </tr>
        </table>
        <p>SECTION-C</p>
        <table>
            <tr>
                <td class="section" id="C00" onclick="handleSelect('C00')">
                    <h2>C00</h2>
                </td>
                <td class="section" id="C01" onclick="handleSelect('C01')">
                    <h2>C01</h2>
                </td>
                <td class="section" id="C02" onclick="handleSelect('C02')">
                    <h2>C02</h2>
                </td>
                <td class="section" id="C03" onclick="handleSelect('C03')">
                    <h2>C03</h2>
                </td>
                <td class="section" id="C04" onclick="handleSelect('C04')">
                    <h2>C04</h2>
                </td>
                <td class="section" id="C05" onclick="handleSelect('C05')">
                    <h2>C05</h2>
                </td>
                <td class="section" id="C06" onclick="handleSelect('C06')">
                    <h2>C06</h2>
                </td>
                <td class="section" id="C07" onclick="handleSelect('C07')">
                    <h2>C07</h2>
                </td>
                <td class="section" id="C08" onclick="handleSelect('C08')">
                    <h2>C08</h2>
                </td>
                <td class="section" id="C09" onclick="handleSelect('C09')">
                    <h2>C09</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="C10" onclick="handleSelect('C10')">
                    <h2>C10</h2>
                </td>
                <td class="section" id="C11" onclick="handleSelect('C11')">
                    <h2>C11</h2>
                </td>
                <td class="section" id="C12" onclick="handleSelect('C12')">
                    <h2>C12</h2>
                </td>
                <td class="section" id="C13" onclick="handleSelect('C13')">
                    <h2>C13</h2>
                </td>
                <td class="section" id="C14" onclick="handleSelect('C14')">
                    <h2>C14</h2>
                </td>
                <td class="section" id="C15" onclick="handleSelect('C15')">
                    <h2>C15</h2>
                </td>
                <td class="section" id="C16" onclick="handleSelect('C16')">
                    <h2>C16</h2>
                </td>
                <td class="section" id="C17" onclick="handleSelect('C17')">
                    <h2>C17</h2>
                </td>
                <td class="section" id="C18" onclick="handleSelect('C18')">
                    <h2>C18</h2>
                </td>
                <td class="section" id="C19" onclick="handleSelect('C19')">
                    <h2>C19</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="C20" onclick="handleSelect('C20')">
                    <h2>C20</h2>
                </td>
                <td class="section" id="C21" onclick="handleSelect('C21')">
                    <h2>C21</h2>
                </td>
                <td class="section" id="C22" onclick="handleSelect('C22')">
                    <h2>C22</h2>
                </td>
                <td class="section" id="C23" onclick="handleSelect('C23')">
                    <h2>C23</h2>
                </td>
                <td class="section" id="C24" onclick="handleSelect('C24')">
                    <h2>C24</h2>
                </td>
                <td class="section" id="C25" onclick="handleSelect('C25')">
                    <h2>C25</h2>
                </td>
                <td class="section" id="C26" onclick="handleSelect('C26')">
                    <h2>C26</h2>
                </td>
                <td class="section" id="C27" onclick="handleSelect('C27')">
                    <h2>C27</h2>
                </td>
                <td class="section" id="C28" onclick="handleSelect('C28')">
                    <h2>C28</h2>
                </td>
                <td class="section" id="C29" onclick="handleSelect('C29')">
                    <h2>C29</h2>
                </td>
            </tr>
        </table>
        <p>SECTION-D</p>
        <table>
            <tr>
                <td class="section" id="D00" onclick="handleSelect('D00')">
                    <h2>D00</h2>
                </td>
                <td class="section" id="D01" onclick="handleSelect('D01')">
                    <h2>D01</h2>
                </td>
                <td class="section" id="D02" onclick="handleSelect('D02')">
                    <h2>D02</h2>
                </td>
                <td class="section" id="D03" onclick="handleSelect('D03')">
                    <h2>D03</h2>
                </td>
                <td class="section" id="D04" onclick="handleSelect('D04')">
                    <h2>D04</h2>
                </td>
                <td class="section" id="D05" onclick="handleSelect('D05')">
                    <h2>D05</h2>
                </td>
                <td class="section" id="D06" onclick="handleSelect('D06')">
                    <h2>D06</h2>
                </td>
                <td class="section" id="D07" onclick="handleSelect('D07')">
                    <h2>D07</h2>
                </td>
                <td class="section" id="D08" onclick="handleSelect('D08')">
                    <h2>D08</h2>
                </td>
                <td class="section" id="D09" onclick="handleSelect('D09')">
                    <h2>D09</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="D10" onclick="handleSelect('D10')">
                    <h2>D10</h2>
                </td>
                <td class="section" id="D11" onclick="handleSelect('D11')">
                    <h2>D11</h2>
                </td>
                <td class="section" id="D12" onclick="handleSelect('D12')">
                    <h2>D12</h2>
                </td>
                <td class="section" id="D13" onclick="handleSelect('D13')">
                    <h2>D13</h2>
                </td>
                <td class="section" id="D14" onclick="handleSelect('D14')">
                    <h2>D14</h2>
                </td>
                <td class="section" id="D15" onclick="handleSelect('D15')">
                    <h2>D15</h2>
                </td>
                <td class="section" id="D16" onclick="handleSelect('D16')">
                    <h2>D16</h2>
                </td>
                <td class="section" id="D17" onclick="handleSelect('D17')">
                    <h2>D17</h2>
                </td>
                <td class="section" id="D18" onclick="handleSelect('D18')">
                    <h2>D18</h2>
                </td>
                <td class="section" id="D19" onclick="handleSelect('D19')">
                    <h2>D19</h2>
                </td>
            </tr>
            <tr>
                <td class="section" id="D20" onclick="handleSelect('D20')">
                    <h2>D20</h2>
                </td>
                <td class="section" id="D21" onclick="handleSelect('D21')">
                    <h2>D21</h2>
                </td>
                <td class="section" id="D22" onclick="handleSelect('D22')">
                    <h2>D22</h2>
                </td>
                <td class="section" id="D23" onclick="handleSelect('D23')">
                    <h2>D23</h2>
                </td>
                <td class="section" id="D24" onclick="handleSelect('D24')">
                    <h2>D24</h2>
                </td>
                <td class="section" id="D25" onclick="handleSelect('D25')">
                    <h2>D25</h2>
                </td>
                <td class="section" id="D26" onclick="handleSelect('D26')">
                    <h2>D26</h2>
                </td>
                <td class="section" id="D27" onclick="handleSelect('D27')">
                    <h2>D27</h2>
                </td>
                <td class="section" id="D28" onclick="handleSelect('D28')">
                    <h2>D28</h2>
                </td>
                <td class="section" id="D29" onclick="handleSelect('D29')">
                    <h2>D29</h2>
                </td>
            </tr>
        </table>
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "parking_manager");
    if (!$conn) {
        die();
    } else {
        $sql2 = "SELECT * FROM slot";
        $ret = mysqli_query($conn, $sql2);
        if (!$ret) {
            die();
        } else {
            while ($row = mysqli_fetch_array($ret)) {
                $slotNo = $row['slot_no'];
                echo '
                <script>
                    var slot = document.getElementById("' . $slotNo . '");
                    slot.classList.remove("section");
                    slot.classList.add("selected-section");
                </script>
            ';
            }
        }
    }
    ?>

    <div id="myModal" class="modal">


        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="#" method="POST">
                <table class="modal-table">
                    <tr style="text-decoration: none;">
                        <td>
                            <h4>Slot No :</h4>
                        </td>
                        <td><input id="slot" name="slot" readonly /></td>

                    </tr>
                    <tr>
                        <td>
                            <h4>Vehicle Type :</h4>
                        </td>
                        <td><select id="vehicle" name="type" onchange="update()">
                                <option disabled hidden selected>select</option>
                                <option value="car">Car</option>
                                <option value="Bike">Bike</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Amount :</h4>
                        </td>
                        <td><input type="text" id="value" name="amt"></td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Vehicle Number :</h4>
                        </td>
                        <td><input type="vehicleNumber" name="vehiclenum"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="btn">Make Payment</button></td>
                    </tr>
                </table>
            </form>
        </div>

    </div>

    <script>
        function handleSelect(slot) {
            var section = document.getElementById(slot);
            section.classList.remove('section');
            section.classList.add('selected-section');
            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("close")[0];
            modal.style.display = "block";
            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            document.getElementById('slot').value = slot;

        }


        function update() {
            var select = document.getElementById('vehicle').value;
            if (select == "car") {
                document.getElementById('value').value = 200;
            } else if (select == "Bike") {
                document.getElementById('value').value = 100;
            } else {
                document.getElementById('value').value = "";

            }
        }

        update();
    </script>
    <?php
    if (isset($_POST['btn'])) {
        if (!$conn) {
            die();
        } else {
            $slot = $_POST['slot'];
            // $_SESSION['slot'] = $slot;
            $vehicleType = $_POST['type'];
            $amt = $_POST['amt'];
            $vehiclenum = $_POST['vehiclenum'];
            $sql = "INSERT INTO slot(slot_no,vehicle_type,amt,vehicle_number) VALUES('$slot','$vehicleType','$amt','$vehiclenum')";
            $retval = mysqli_query($conn, $sql);
            if (!$retval) {
                die("<script>alert('Something went wrong')</script>");
            } else {
                echo "<script>alert('Slot " . $slot . " Booked')</script>";
                echo "<script>window.location.href = 'bill.php?slotno=$slot'</script>";
            }
        }
    }
    ?>
</body>

</html>