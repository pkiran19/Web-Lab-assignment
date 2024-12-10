<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $train = htmlspecialchars($_POST['train']);
    $trainNumber = htmlspecialchars($_POST['trainNumber']);
    $berth = htmlspecialchars($_POST['berth']);
    $date = htmlspecialchars($_POST['date']);

    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Train:</strong> $train</p>";
    echo "<p><strong>Train Number:</strong> $trainNumber</p>";
    echo "<p><strong>Berth Preference:</strong> $berth</p>";
    echo "<p><strong>Date of Travel:</strong> $date</p>";
}
?>
