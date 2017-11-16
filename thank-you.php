<?php

	if( isset( $_POST['submit'] ) ) {

        $to = "enquire@mirrorstoneheating.co.uk"; // this is your Email address
        $from = isset($_POST['email']) ? $_POST['email'] : ''; // this is the sender's Email address
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $name . " " . $contact . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;

		$response = mail($to, $subject, $message, $headers);
        $responseCopy = mail( $from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    }
?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>
    <title>Thank You | Mirrorstone Heating</title>
</head>
<?php include_once __DIR__ . '/html/layout/head.php'; ?>

<!-- header -->
<?php include_once __DIR__ . '/html/layout/header.php'; ?>

<!-- navigation -->
<?php include_once __DIR__ . '/html/layout/navigation.php'; ?>

<body class="thankyou-wrap">
    <section class="thankyou-message">
        <h1>Thank You For contacting us</h1>
        <h2>We will get back to you as soon as possible</h2>
        <a href="/" class="btn primary-btn">Go to Homepage</a>
    </section>
</body>

<!-- Footer -->
<?php include_once __DIR__ . '/html/layout/footer.php'; ?>

</html>
