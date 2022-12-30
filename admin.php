<?php
$conn = mysqli_connect("localhost", "root", "", "parking_manager");
if (!$conn) {
    die();
}
$query = "SELECT COUNT(*) FROM user";
$query2 = "SELECT COUNT(*) FROM slot";
$query3 = "SELECT SUM(amt) FROM slot";
$ret = mysqli_query($conn, $query);
if (!$ret) {
    die("<script>alert('problem')</script>");
} else {
    $countRow = mysqli_fetch_array($ret, MYSQLI_NUM);
    if (!$countRow) {
        die("<script>alert('No row')</script>");
    } else {
        $userCount = $countRow[0];

    }
}
$ret2 = mysqli_query($conn, $query2);
$slotCount = mysqli_fetch_array($ret2)[0];
$total = mysqli_query($conn,$query3);
$totalVal = mysqli_fetch_array($total)[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="admin.css">
        <title>Admin Panel</title>
    </head>

    <body>
        <div class="side-menu">
            <div class="brand-name">
                <h1>ADMIN PANEL</h1>
            </div>
            <ul>
                <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
                <li><img src="reading-book (1).png" alt="">&nbsp;<span>Users</span> </li>
                <li><img src="teacher2.png" alt="">&nbsp;<span>Vehicles</span> </li>
                <li><img src="school.png" alt="">&nbsp;<span>Slots</span> </li>
                <li><img src="payment.png" alt="">&nbsp;<span>Income</span> </li>
                <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
                <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
            </ul>
        </div>
        <div class="container">
            <div class="header">
                <div class="nav">
                    <div class="search">
                        <input type="text" placeholder="Search..">
                        <button type="submit"><img src="search.png" alt=""></button>
                    </div>
                    <div class="user">
                        <a href="#" class="btn">Add New</a>
                        <img src="notifications.png" alt="">
                        <div class="img-case">
                            <img src="user.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <h1><?php echo "$userCount" ?></h1>
                            <h3>Users</h3>
                        </div>
                        <div class="icon-case">
                            <img src="students.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>53</h1>
                            <h3>Cars</h3>
                        </div>
                    
                        
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1><?php echo "$slotCount" ?></h1>
                            <h3>Slots</h3>
                        </div>
                        <div class="icon-case">
                            <img src="schools.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                        <h1><?php echo "$totalVal" ?></h1>
                            <h3>Total Income</h3>
                          
                        </div>
                        <div class="icon-case">
                            <img src="income.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-2">
                    <div class="recent-payments">
                        <div class="title">
                            <h2>Recent Payments</h2>
                            <a href="#" class="btn">View All</a>
                        </div>
                        <table>
                            <tr>
                                <th>Slot</th>
                                <th>Vehicle Type</th>
                                <th>Vehicle Number</th>
                                <th>Amount</th>
                                <th>Option</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM slot";
                            $ret = mysqli_query($conn, $sql);
                            if (!$ret) {
                                die();
                            } else {
                                while ($row = mysqli_fetch_array($ret)) {
                                    $slotNo = $row['slot_no'];
                                    $vehicleType = $row['vehicle_type'];
                                    $amt = $row['amt'];
                                    $vehicleNumber = $row['vehicle_number'];
                                    echo '
                                    <tr>
                                    <td>' . $slotNo . '</td>
                                    <td>' . $vehicleType . '</td>
                                    <td>' . $vehicleNumber . '</td>
                                    <td>' . $amt . '</td>
                                    <td><a href="delete.php?slotno=' . $slotNo . '" class="btn">Delete</a></td>
                                </tr>
                                ';
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>

</body>

</html>