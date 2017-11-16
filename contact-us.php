<!DOCTYPE html>
<html>
<!-- Head -->
<!-- Head -->
<?php include_once __DIR__ . '/html/layout/head.php'; ?>
    <meta name="description" content="Need to get in touch? Send us a message, or use any of the contact details to speak to one of our sales reps.">
    <title>Contact Us | Mirrorstone Heating</title>
</head>
<!-- header -->
<?php include_once __DIR__ . '/html/layout/header.php'; ?>

<!-- navigation -->
<?php include_once __DIR__ . '/html/layout/navigation.php'; ?>

<body class="contact-body-wrapper">
    <section class="upper-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Contact Us</h1>
                    <span class="orange-line"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.6293209526866!2d-1.144257083980297!3d52.648609679838835!2m3!1f0!2f0!3f0!3m2!1i1024!2i7
                    68!4f13.1!3m3!1m2!1s0x487760e1f44457f3%3A0xba864a01a8aff57a!2sWholesale+LED+Lights!5e0!3m2!1sen!2suk!4v1505828215218"
                    width="850" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="contact-info">
                    <div class="col-sm-6">
                        <p>For all enquiries regarding becoming an authorised partner, ordering or anything else, please give us a call on <a href="tel:0116 436 2250">0116 436 2250</a>
                            or send an email over to <a href="mailto:enquire@mirrorstoneheating.co.uk">enquire@mirrorstoneheating.co.uk</a>
                        </p>

                        <p>Our phone lines are open Monday to Friday 9am-5:30pm.</p>

                        <p>You can visit us at our head office too at the following address:</p>

                        <p><span>Mirrorstone Heating Ltd.<br>Unit 1A<br>20 Devonshire Road<br>Leicester<br>LE4 0BF</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <p>Send us a message and one of our dedicated account managers will get in touch with you shortly</p>
                </div>
            </div>
            <div class="wrapper">
                <form class="form-horizontal" id="form-contact" action="/thank-you" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label" for="name">Name</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" placeholder="Enter Your Name Here..." class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label" for="email">Email</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email" placeholder="Enter Your Email Here..." class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label" for="contact">Contact</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" id="contact" name="contact" placeholder="Enter Your Number Here..." class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label class="control-label" for="message">Message</label>
                            </div>

                            <div class="col-sm-10">
                                <textarea name="message" id="message" class="form-control" placeholder="Please Enter Your Message Here..."></textarea>
                                <div class="error-message"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" name="submit" value="Send" class="btn primary-btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

<!-- Footer -->
<?php include_once __DIR__ . '/html/layout/footer.php'; ?>
</html>
