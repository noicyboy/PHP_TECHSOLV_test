<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact_form (full_name, phone_number, email, subject, message, ip_address, timestamp)
            VALUES ('$full_name', '$phone_number', '$email', '$subject', '$message', '" . $_SERVER['REMOTE_ADDR'] . "', NOW())";

    if ($conn->query($sql) === TRUE) {
        $to = "test@techsolvitservice.com";
        $subject_email = "New Contact Form Submission";
        $message_email = "Name: $full_name\nEmail: $email\nPhone: $phone_number\nSubject: $subject\nMessage: $message";

        mail($to, $subject_email, $message_email);
        
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    header("Location: contact_form.html");
    exit;
}
?>