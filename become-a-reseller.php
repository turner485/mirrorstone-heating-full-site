<!DOCTYPE html>
<html>
<!-- Head -->
<?php include_once __DIR__ . '/html/layout/head.php'; ?>
    <meta name="description" content="As a reseller of Mirrorstone IR Heating Panels, you’ll benefit from a number of different perks. Apply today and get on board the IR Heating revolution.">
    <title>Become A Reseller Of Infrared Heaters | Mirrorstone Heating</title>
</head>
<!-- header -->
<?php include_once __DIR__ . '/html/layout/header.php'; ?>

<!-- navigation -->
<?php include_once __DIR__ . '/html/layout/navigation.php'; ?>

<body class="become-a-reseller-body-wrapper">
    <section class="banner-image-wrapper">
        <div class="container-fluid flush">
            <div class="row">
                <div class="banner-wrapper">
                    <div class="col-sm-12">
                        <div class="banner-content">
                            <h2>Join Our Winning Team</h2>
                            <h3>IR Panels Are Setting New Standards</h3>
                            <a href="/work-with-us" class="btn white-btn">Find Out More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reseller-form-top">
        <div class="container-fluid">
            <div class="row">
                <div class="wrapper">
                    <div class="col-sm-12">
                        <h1>Become A Reseller of infrared heaters</h1>
                        <p>Become part of a revolution that is set to change the world of heating as we know it.</p>
                        <p><span>you will enjoy:</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reseller-form-mid">
        <div class="container-fluid">
            <div class="row">
                <div class="wrapper clearfix">
                    <div class="col-sm-4">
                        <div class="blocks">
                            <img src="/images/become-a-reseller/Orange-pound.png" alt="pound sign"/>
                            <h4>Wholesale Discounted Prices</h4>
                            <p>We’ll be able to offer our Mirrorstone branded Infrared Heating Products to you,
                               our resellers, at the best. most competitive prices available on the market today.</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="blocks">
                            <img src="/images/become-a-reseller/Orange-mic.png" alt="mic"/>
                            <h4>Dedicated Account Manager</h4>
                            <p>As a reseller, you’ll be given all the support you need from one of our 10 dedicated Account
                               Managers who’ll be happy to answer any questions you might have.
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="blocks">
                            <img src="/images/become-a-reseller/Orange-van.png"/>
                            <h4>Priority Dispatch</h4>
                            <p>We pride ourselves on our fast dispatch time.
                                Our dedicated staff and state-of-the-art stock control system ensure that no order,
                                however large, is too much for us to handle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reseller-form-bottom">
        <div class="container-fluid">
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <p>If you're interested in becoming one of our valued resellers, please call us on <a href="tel:+44 (0) 116 436 2250">+44 (0) 116 436 2250</a> or fill out this form and one of our account managers will get in touch.</p>
                    </div>
                </div>

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

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" name="submit" value="Get Started" class="btn primary-btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

<?php include_once __DIR__ . '/html/layout/footer.php'; ?>

</html>

