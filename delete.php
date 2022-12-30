<?php
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
$slotNo = $params['slotno'];
$conn = mysqli_connect("localhost", "root", "", "parking_manager");
if (!$conn) {
    die();
} else {
    $sql = "DELETE FROM slot WHERE slot_no='$slotNo'";
    mysqli_query($conn, $sql);
    header('Location:admin.php');
}
