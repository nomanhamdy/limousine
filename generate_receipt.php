<?php
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the booking details from the POST data
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // In a real implementation, you can perform validations and calculations here

    // For this example, we'll just create a simple receipt string
    $receiptDetails = "
        <h3>تفاصيل الحجز</h3>
        <p>من: $from</p>
        <p>إلى: $to</p>
        <p>التاريخ: $date</p>
        <p>الوقت: $time</p>
        <p>شكرا لحجزك معنا!</p>
    ";

    // Send the receipt details as the response
    echo $receiptDetails;
}
?>
