<!DOCTYPE html>
<html lang="en">

<?php include('include/head.php') ?>

<body class="stretched">

    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }

        .has-error .form-control {
            width: 80% !important;
        }

        .has-error .text-danger {
            font-family: 'Arial', sans-serif;
            margin: 0px;
            padding: 0px;
            font-size: small;
        }
    </style>

    <script>
        // Call when Main Lead Form is submitted
        function onSubmitMainLeadForm(token) {
            // Check the validity of form
            let formValid = $("#FormToolsMainLeadForm").valid();

            // If valid, try to submit form
            if (formValid) {
                // Form submit
                document.getElementById("FormToolsMainLeadForm").submit();

                // Show loader
                $('.loader').fadeIn();
            }
        }


        // Call when Author Lead Form is submitted
        function onSubmitAuthorLeadForm(token) {
            // Check the validity of form
            let formValid = $("#FormToolsAuthorLeadForm").valid();

            // If valid, try to submit form
            if (formValid) {
                // Form submit
                document.getElementById("FormToolsAuthorLeadForm").submit();

                // Show loader
                $('.loader').fadeIn();
            }

        }

        // Call when FreeConsultation Lead Form is submitted
        function onSubmitFreeConsultationLeadForm(token) {
            // Check the validity of form
            let formValid = $("#FormToolsFreeConsultationLeadForm").valid();

            // If valid, try to submit form
            if (formValid) {
                // Form submit
                document.getElementById("FormToolsFreeConsultationLeadForm").submit();

                // Show loader
                $('.loader').fadeIn();
            }

        }

        // Call when MiniLead Form is submitted
        function onSubmitMiniLeadForm(token) {
            // Check the validity of form
            let formValid = $("#MiniLeadForm").valid();

            // If valid, try to submit form
            if (formValid) {
                // Form submit
                document.getElementById("MiniLeadForm").submit();

                // Show loader
                $('.loader').fadeIn();
            }

        }
    </script>



    <div id="wrapper" class="clearfix">

        <style>
            html,
            body {
                background: #fff;
            }

            .loader {
                position: fixed;
                top: 0px;
                left: 0px;
                width: 100vw;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(0, 0, 0, 0.8);
                z-index: 9999;
            }

            .loader img {
                width: 250px;
            }

            .loader-text-title {
                color: #fff;
                font-weight: 500;
                line-height: 1.3;
            }
        </style>



        <link as="style" rel="stylesheet preload prefetch" href="assets/css/bootstrap.css" crossorigin="anonymous" />
        <link as="style" rel="stylesheet preload prefetch" href="assets/css/style.css?_v=3" type="text/css" />
        <link as="style" rel="stylesheet preload prefetch" href="assets/css/animate.css" type="text/css" />
        <link as="style" rel="stylesheet preload prefetch" href="assets/fonts/font-icons.css" type="text/css" />

        <link as="style" rel="stylesheet preload prefetch" href="assets/css/main.css?_v=3" type="text/css" />

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet"
            type="text/css" />
        <link as="style" rel="stylesheet preload prefetch" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />


        <style>
            #pageloader {
                top: 0px;
                left: 0px;
                display: flex;
                justify-content: center;
                align-items: center;
                background: rgba(255, 255, 255, 0.95);
            }
        </style>


        <div id="pageloader" class="d-none">
            <div class="row">
                <div class="col-12 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        style="margin: auto; background: transparent; display: block;" width="200px" height="200px"
                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <defs>
                            <filter id="ldio-2xcif6i7uph-filter" x="-100%" y="-100%" width="300%" height="300%"
                                color-interpolation-filters="sRGB">
                                <feGaussianBlur in="SourceGraphic" stdDeviation="2.4000000000000004"></feGaussianBlur>
                                <feComponentTransfer result="cutoff">
                                    <feFuncA type="table" tableValues="0 0 0 0 0 0 1 1 1 1 1"></feFuncA>
                                </feComponentTransfer>
                            </filter>
                        </defs>
                        <g filter="url(#ldio-2xcif6i7uph-filter)">
                            <g transform="translate(50 50)">
                                <g transform="rotate(316.478)">
                                    <circle cx="17" cy="0" r="4.16059" fill="#df1317">
                                        <animate attributeName="r" keyTimes="0;0.5;1"
                                            values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="4s"
                                            repeatCount="indefinite" begin="-0.25s"></animate>
                                    </circle>
                                    <animateTransform attributeName="transform" type="rotate" keyTimes="0;1"
                                        values="0;360" dur="4s" repeatCount="indefinite" begin="0s"></animateTransform>
                                </g>
                            </g>
                            <g transform="translate(50 50)">
                                <g transform="rotate(281.956)">
                                    <circle cx="17" cy="0" r="4.96117" fill="#e4934b">
                                        <animate attributeName="r" keyTimes="0;0.5;1"
                                            values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="2s"
                                            repeatCount="indefinite" begin="-0.2s"></animate>
                                    </circle>
                                    <animateTransform attributeName="transform" type="rotate" keyTimes="0;1"
                                        values="0;360" dur="2s" repeatCount="indefinite" begin="-0.05s">
                                    </animateTransform>
                                </g>
                            </g>
                            <g transform="translate(50 50)">
                                <g transform="rotate(256.435)">
                                    <circle cx="17" cy="0" r="6.00174" fill="#e2bb8b">
                                        <animate attributeName="r" keyTimes="0;0.5;1"
                                            values="3.5999999999999996;8.399999999999999;3.5999999999999996"
                                            dur="1.3333333333333333s" repeatCount="indefinite" begin="-0.15s"></animate>
                                    </circle>
                                    <animateTransform attributeName="transform" type="rotate" keyTimes="0;1"
                                        values="0;360" dur="1.3333333333333333s" repeatCount="indefinite" begin="-0.1s">
                                    </animateTransform>
                                </g>
                            </g>
                            <g transform="translate(50 50)">
                                <g transform="rotate(239.912)">
                                    <circle cx="17" cy="0" r="7.28235" fill="#e1e7e7">
                                        <animate attributeName="r" keyTimes="0;0.5;1"
                                            values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="1s"
                                            repeatCount="indefinite" begin="-0.1s"></animate>
                                    </circle>
                                    <animateTransform attributeName="transform" type="rotate" keyTimes="0;1"
                                        values="0;360" dur="1s" repeatCount="indefinite" begin="-0.15s">
                                    </animateTransform>
                                </g>
                            </g>
                            <g transform="translate(50 50)">
                                <g transform="rotate(232.39)">
                                    <circle cx="17" cy="0" r="7.99706" fill="#91bcc6">
                                        <animate attributeName="r" keyTimes="0;0.5;1"
                                            values="3.5999999999999996;8.399999999999999;3.5999999999999996" dur="0.8s"
                                            repeatCount="indefinite" begin="-0.05s"></animate>
                                    </circle>
                                    <animateTransform attributeName="transform" type="rotate" keyTimes="0;1"
                                        values="0;360" dur="0.8s" repeatCount="indefinite" begin="-0.2s">
                                    </animateTransform>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="col-12 text-center">
                    <h4>
                        <small>We are submiting your form.</small> <br />
                        <b>Please do not refresh this page.</b>
                    </h4>
                </div>

            </div>
        </div>

        <script>
            window.thankyouPage = "form-submitted-successfully";
        </script><!-- Header======================= -->


        <?php include('include/header.php') ?>


        <!-- Header end -->
        <section id="slider" class="slider-element bg-color"
            style="height: auto; background-image: url('assets/images/bg-2') no-repeat center center / 100% 100%;">
            <div class="container" style="z-index: 2">
                <div class="center p-4 pt-lg-5">
                    <h1 class="text-white h1 font-weight-semibold">Writing Takes Time, Publishing With Us Doesn’t</h1>
                    <p class="text-white-70">Central India’s Fastest Growing Self-Publishing Company</p>
                </div>

                <div class="row justify-content-center pb-4">


                    <div class="col-lg-6 col-md-6 d-lg-flex flex-wrap justify-content-center ml-lg-2 p-4">
                        <img src="assets/images/slider/self_publishing.png" alt="Self Publishing"
                            class="d-flex align-self-end">
                    </div>


                    <div class="col-lg-4 col-md-5 mt-lg-4">
                        <div class="rounded shadow bg-white py-4 px-4">
                            <div class="form-widget">
                                <div class="form-result"></div>

                                <!-- Main Lead Form -->
                                <form action="form-submit" id="FormToolsMainLeadForm"
                                    class="row position-relative mb-0 disable-on-submit" enctype="multipart/form-data"
                                    method="post" accept-charset="utf-8">
                                    <input type="hidden" name="redirect_url"
                                        value="thankyou?utm_source=web&utm_medium=main_lead_form&utm_campaign=home_header" />
                                    <input type="hidden" name="key" value="247142d8ef394c8ab1b7aad352eba736" />
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fa-solid fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" name="name" id="name" class="form-control required"
                                            placeholder="Your Full Name" required autofocus />
                                    </div>
                                    <div class="col-sm-12 input-group form-group">
                                        <div class="input-group-prepend"> <span class="input-group-text bg-transparent">
                                                <i class="fa-solid fa-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="email" name="email" id="email" class="form-control required"
                                            placeholder="Your Email" required />
                                    </div>

                                    <div class="col-sm-12 input-group form-group">
                                        <div class="input-group-prepend"> <span
                                                class="input-group-text bg-transparent">
                                                <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <input type="tel" name="phonenumber" pattern="[6-9]{1}[0-9]{9}" id="phonenumber"
                                            class="form-control" placeholder="Your Phone Number" required />
                                    </div>
                                    <div class="col-sm-12 input-group form-group">
                                        <div class="input-group-prepend"> <span
                                                class="input-group-text bg-transparent">
                                                <i class="fa-solid fa-money-bill"></i>
                                            </span>
                                        </div>
                                        <select class="form-control required" name="form-cf-74" id="form-cf-74"
                                            required>
                                            <option selected>Your Publishing Budget</option>
                                            <option value="Rs. 8000 - Rs. 10000">Rs. 8000 - Rs. 10000</option>
                                            <option value="Rs. 14,000 - Rs. 15,000">Rs. 14,000 - Rs. 15,000</option>
                                            <option value="Rs. 20,000 - Rs. 25,000">Rs. 20,000 - Rs. 25,000</option>
                                            <option value="Rs. 30,000 - Rs. 40,000">Rs. 30,000 - Rs. 40,000</option>
                                            <option value="Above Rs. 50,000">Above Rs. 50,000</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 input-group form-group">
                                        <div class="input-group-prepend"> <span
                                                class="input-group-text bg-transparent">
                                                <i class="fa-solid fa-book"></i>
                                            </span>
                                        </div>
                                        <select class="form-control required" name="form-cf-16" id="form-cf-16" required>
                                            <option selected>Your Manuscript Status</option>
                                            <option value="Want to start the process today.">Want to start the process today.</option>
                                            <option value="Want to start the process within a week.">Want to start the process within a week.</option>
                                            <option value="It will take a month to get ready.">It will take a month to get ready.</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button data-sitekey="6LcMwNkaAAAAAB4cCv_E6s2OfiA0OyDUMmTTjNF1"
                                            data-callback="onSubmitMainLeadForm" data-action="submit"
                                            class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2 g-recaptcha">
                                            Sign Up For <b>Free Consultation</b>
                                        </button>

                                        <hr />
                                        <small>
                                            This site is protected by reCAPTCHA and the Google
                                            <a href="https://policies.google.com/privacy">Privacy Policy</a> and
                                            <a href="https://policies.google.com/terms">Terms of Service</a> apply.
                                        </small>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-lg-6 col-md-6 d-lg-flex flex-wrap justify-content-center ml-lg-2 p-4">
                        <img src="assets/images/slider/self_publishing.png" alt="Self Publishing"
                            class="d-flex align-self-end">
                    </div> -->
                </div>
            </div>
            <!-- <div class="svg-separator">
                <div>
                    <svg preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 100" data-height="100">
                        <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M1040,56c0.5,0,1,0,1.6,0c-16.6-8.9-36.4-15.7-66.4-15.7c-56,0-76.8,23.7-106.9,41C881.1,89.3,895.6,96,920,96
          C979.5,96,980,56,1040,56z"></path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                            d="M1699.8,96l0,10H1946l-0.3-6.9c0,0,0,0-88,0s-88.6-58.8-176.5-58.8c-51.4,0-73,20.1-99.6,36.8 c14.5,9.6,29.6,18.9,58.4,18.9C1699.8,96,1699.8,96,1699.8,96z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                            d="M1400,96c19.5,0,32.7-4.3,43.7-10c-35.2-17.3-54.1-45.7-115.5-45.7c-32.3,0-52.8,7.9-70.2,17.8 c6.4-1.3,13.6-2.1,22-2.1C1340.1,56,1340.3,96,1400,96z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                            d="M320,56c6.6,0,12.4,0.5,17.7,1.3c-17-9.6-37.3-17-68.5-17c-60.4,0-79.5,27.8-114,45.2 c11.2,6,24.6,10.5,44.8,10.5C260,96,259.9,56,320,56z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.75);"
                            d="M680,96c23.7,0,38.1-6.3,50.5-13.9C699.6,64.8,679,40.3,622.2,40.3c-30,0-49.8,6.8-66.3,15.8 c1.3,0,2.7-0.1,4.1-0.1C619.7,56,620.2,96,680,96z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.75);" d="M-40,95.6c28.3,0,43.3-8.7,57.4-18C-9.6,60.8-31,40.2-83.2,40.2c-14.3,0-26.3,1.6-36.8,4.2V106h60V96L-40,95.6
          z"></path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M504,73.4c-2.6-0.8-5.7-1.4-9.6-1.4c-19.4,0-19.6,13-39,13c-19.4,0-19.5-13-39-13c-14,0-18,6.7-26.3,10.4 C402.4,89.9,416.7,96,440,96C472.5,96,487.5,84.2,504,73.4z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M1205.4,85c-0.2,0-0.4,0-0.6,0c-19.5,0-19.5-13-39-13s-19.4,12.9-39,12.9c0,0-5.9,0-12.3,0.1 c11.4,6.3,24.9,11,45.5,11C1180.6,96,1194.1,91.2,1205.4,85z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M1447.4,83.9c-2.4,0.7-5.2,1.1-8.6,1.1c-19.3,0-19.6-13-39-13s-19.6,13-39,13c-3,0-5.5-0.3-7.7-0.8 c11.6,6.6,25.4,11.8,46.9,11.8C1421.8,96,1435.7,90.7,1447.4,83.9z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M985.8,72c-17.6,0.8-18.3,13-37,13c-19.4,0-19.5-13-39-13c-18.2,0-19.6,11.4-35.5,12.8 c11.4,6.3,25,11.2,45.7,11.2C953.7,96,968.5,83.2,985.8,72z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M743.8,73.5c-10.3,3.4-13.6,11.5-29,11.5c-19.4,0-19.5-13-39-13s-19.5,13-39,13c-0.9,0-1.7,0-2.5-0.1 c11.4,6.3,25,11.1,45.7,11.1C712.4,96,727.3,84.2,743.8,73.5z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M265.5,72.3c-1.5-0.2-3.2-0.3-5.1-0.3c-19.4,0-19.6,13-39,13c-19.4,0-19.6-13-39-13 c-15.9,0-18.9,8.7-30.1,11.9C164.1,90.6,178,96,200,96C233.7,96,248.4,83.4,265.5,72.3z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M1692.3,96V85c0,0,0,0-19.5,0s-19.6-13-39-13s-19.6,13-39,13c-0.1,0-0.2,0-0.4,0c11.4,6.2,24.9,11,45.6,11 C1669.9,96,1684.8,96,1692.3,96z">
                        </path>
                        <path style="opacity: 1;fill: rgba(255,255,255,0.3);;"
                            d="M25.5,72C6,72,6.1,84.9-13.5,84.9L-20,85v8.9C0.7,90.1,12.6,80.6,25.9,72C25.8,72,25.7,72,25.5,72z">
                        </path>
                        <path style="fill: rgb(255, 255, 255);"
                            d="M-40,95.6C20.3,95.6,20.1,56,80,56s60,40,120,40s59.9-40,120-40s60.3,40,120,40s60.3-40,120-40s60.2,40,120,40s60.1-40,120-40s60.5,40,120,40s60-40,120-40s60.4,40,120,40s59.9-40,120-40s60.3,40,120,40s60.2-40,120-40s60.2,40,120,40s59.8,0,59.8,0l0.2,143H-60V96L-40,95.6z">
                        </path>
                    </svg>
                    <div class="bg-white" style="height: 150px"></div>
                </div>
            </div> -->
        </section>

        <?php include('include/section/description.php') ?>

        <!-- <div class="section" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="row justify-content-center pb-4 pt-4">
                    <div class="col-md-10 center">
                        <div class="heading-block border-bottom-0 center mx-auto">
                            <div class="badge badge-pill badge-default">How To Self Publish Your Book</div>
                            <h2 class="nott h2 ls0">The Self Publishing Process</h2>
                        </div>
                        <p class="normal center">Publishing process with True Sign Publication simplifies your book
                            publication
                            requirements. Our book publishing consultant will guide you throughout the self publishing
                            process to
                            transform your manuscript to a masterpiece book. Following is the flowchart of Self Book
                            Publishing.</p>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mt-sm-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-box flex-md-row-reverse text-md-right border-0">
                            <div class="fbox-icon">
                                <img src="assets/images/publishing_process/registration_and_consultation.svg"
                                    alt="Registration and Consultation" class="bg-transparent rounded-0">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">1. Registration and Consultation</h3>
                                <p>Register with us by filling a simple form and our book publishing consultant will
                                    call you to discuss
                                    about your book and will forward you the best proposal.</p>
                            </div>
                        </div>
                        <div class="feature-box flex-md-row-reverse text-md-right border-0 mt-5">
                            <div class="fbox-icon">
                                <img src="assets/images/publishing_process/design_and_formatting.svg"
                                    alt="Design and Formatting" class="bg-transparent rounded-0">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">2. Design and Formatting</h3>
                                <p>After finalising the proposal, you need to submit your manuscript and other design
                                    inputs for book
                                    cover designing and publication process.</p>
                            </div>
                        </div>
                        <div class="feature-box flex-md-row-reverse text-md-right border-0 mt-5">
                            <div class="fbox-icon">
                                <img src="assets/images/publishing_process/review_and_approval.svg"
                                    alt="Review and Approval" class="bg-transparent rounded-0">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">3. Review and Approval</h3>
                                <p>You will be assigned a Publishing Manager. The final book interior and book cover
                                    design will be sent
                                    to you for review and approval.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-7 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5"> <img
                            src="assets/images/publishing_process/process.jpg" alt="iphone" class="rounded  parallax"
                            data-bottom-top="transform: translateY(-30px)"
                            data-top-bottom="transform: translateY(30px)"> </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-box border-0">
                            <div class="fbox-icon">
                                <img src="assets/images/publishing_process/preorder_launch_and_distribution.svg"
                                    alt="Pre Order, Launch and Distribution" class="bg-transparent rounded-0">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">4. Pre Order, Launch and Distribution</h3>
                                <p>After confirming from you, the book will be forwarded for printing and distribution
                                    to worldwide
                                    platforms as paperback and eBook.</p>
                            </div>
                        </div>
                        <div class="feature-box border-0 mt-5">
                            <div class="fbox-icon">
                                <img src="assets/images/publishing_process/marketing_and_promotions.svg"
                                    alt="Marketing and Promotions" class="bg-transparent rounded-0">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">5. Marketing and Promotions</h3>
                                <p>Online book promotions will be done by our team. Marketing assistance and visual
                                    creatives will also
                                    be provided to boost book sales.</p>
                            </div>
                        </div>
                        <div class="feature-box border-0 mt-5">
                            <div class="fbox-icon">
                                <img src="assets/images/publishing_process/royalty_and_support.svg"
                                    alt="Royalty and Support" class="bg-transparent rounded-0">
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">6. Royalty and Support</h3>
                                <p>You will be granted an access of author dashboard for royalty and support. You will
                                    get an update and
                                    payment of Royalty on Monthly Cycle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <?php include('include/section/pricing.php') ?>

        <div class="section mb-0 p-md-0 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-between m-0">
                    <div class="col-lg-6 col-md-6 col-sm-6 pt-4 pb-4">
                        <div class="heading-block border-bottom-0">
                            <div class="badge badge-pill badge-default">Self Publish</div>
                            <h2 class="nott h2 ls0">E Book or Paperback or Both?</h2>
                        </div>
                        <p class="text-normal" style="text-align: justify;">What if you initially selected to publish
                            only e-book
                            but now your readers wants a hard copy? Well don’t worry, we at True Sign Publishing offer
                            Package
                            Upgradation option from e-book to paperback. Where you will be getting your printed book by
                            just paying a
                            small package upgradation cost. After upgrading, your book will be listed on all
                            distribution channels.
                        </p>
                        <br>Still not sure, <strong>e book</strong> or <strong>paperback</strong> or
                        <strong>both</strong>?
                        <div class="pt-4">
                            <a href="registration/new-author"
                                class="button button-small ls0 nott ml-0 mt-2 clearfix">Register Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 pt-lg-6 pb-lg-6">
                        <div class="d-lg-flex"> <img src="assets/images/ebook_or_paperback.jpg" class="fast" alt="Image"
                                style="width: 100%; height:100%"> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section bg-transparent" style="padding: 80px 0">
            <div class="container clearfix">
                <div class="row justify-content-center pb-4 pt-4">
                    <div class="col-md-10 center">
                        <div class="heading-block border-bottom-0">
                            <div class="badge badge-pill badge-default">International Book Distribution</div>
                            <h2 class="nott h2 ls0">Worldwide Distribution Network</h2>
                        </div>
                        <p class="text-normal pb-3">When you publish your book with True Sign Publication, it is
                            published in both
                            Paperback and eBook (most advanced print replica) and gets available in upto 150+ countries.
                            We are in
                            partnership with largest global book distribution networks. Reach to a larger reader base
                            from all over
                            the world with our distribution network.</p>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-11">
                        <ul class="clients-grid grid-2 grid-sm-3 grid-md-5 mb-0">
                            <li class="grid-item">
                                <img src="assets/images/distribution/amazon.jpg" alt="Amazon" style="width: 60%">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/flipkart.jpg" alt="Flipkart">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/googleplay.jpg" alt="GooglePlay">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/kindle.jpg" alt="Kindle">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/ibooks.jpg" alt="iBooks">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/barnes_and_noble.jpg" alt="Barnes & Noble">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/ingram.jpg" alt="Ingram">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/walmart.jpg" alt="Walmart" style="width: 80%">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/paytm.jpg" alt="Paytm" style="width: 60%">
                            </li>
                            <li class="grid-item">
                                <img src="assets/images/distribution/ebay.jpg" alt="Ebay">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-about m-0"
            style="background: url('assets/images/section/dots-1.png') 100% 0 no-repeat / 40%;">
            <div class="container">
                <div class="row pb-4 pt-4 horizontal-center">
                    <div class="col-md-6 pr-lg-6">
                        <div class="heading-block border-bottom-0">
                            <div class="badge badge-pill badge-default">Publish With Us</div>
                            <h2 class="nott h2 ls0">Why True Sign?</h2>
                        </div>
                        <p class="text-normal" style="text-align: justify;">True Sign Publication provides you the
                            platform,
                            independence and flexibility to create and share what you love and feel with the entire
                            world through book
                            publishing. We provide Book Publishing, Cover Designing, Sales and Distribution services at
                            most
                            economical price. </p>
                        <a href="about-us" class="button button-small ls0 nott ml-0 mt-2 clearfix"
                            title="About Us">Learn More</a>
                    </div>
                    <div class="row col-lg-6 col-sm-12 mb-0 col-md-6 mt-4">
                        <div class="col-6 col-sm-6 mb-lg-5">
                            <div class="counter color font-weight-semibold"><span data-from="100" data-to="800"
                                    data-refresh-interval="2" data-speed="600"></span>+</div>
                            <h4 class="mt-0 mb-0 font-weight-medium">Books Published</h4>
                        </div>
                        <div class="col-6 col-sm-6 mb-lg-5">
                            <div class="counter color font-weight-semibold"><span data-from="100" data-to="650"
                                    data-refresh-interval="11" data-speed="900"></span>+</div>
                            <h4 class="mt-0 mb-0 font-weight-medium">Satisfied Authors</h4>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="counter color font-weight-semibold"><span data-from="100" data-to="150"
                                    data-refresh-interval="3" data-speed="1000"></span>+</div>
                            <h4 class="mt-0 mb-0 font-weight-medium">Countries Distribution</h4>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="counter color font-weight-semibold"><span data-from="1" data-to="5"
                                    data-refresh-interval="100" data-speed="1500"></span>+</div>
                            <h4 class="mt-0 mb-0 font-weight-medium">Years of Experience</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mt-0"
            style="background: url('assets/images/section/testimonial_bg.jpg'); background-repeat: top center; background-size: cover; padding: 80px 0 70px;">
            <div class="container pt-4 pb-4">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge badge-pill badge-default">Testimonials</div>
                    <h2 class="nott h2 ls0">What Authors Say</h2>
                </div>
                <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix" data-margin="0"
                    data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000" data-items-sm="1"
                    data-items-md="2" data-items-xl="3">
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <img src="assets/images/testimonials/ashwini _shajan.jpg" alt="Ashwini Shajan">
                            </div>
                            <div class="testi-content">
                                <p>'Whenever It's Dark' is my first book and I must admit that, of all decisions I've
                                    made, choosing
                                    True Sign Publication to publish my first book was indeed the most right decision. I
                                    can describe my
                                    publishing journey with them in a few words - affordable, extremely supportive,
                                    thorough, and most
                                    importantly, very systematic. Kudos to the team for being angels to new and old
                                    authors! Thank you!
                                </p>
                                <div class="testi-meta"> Ashwini Shajan <span>Technical Writer, HCL Technologies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <img src="assets/images/testimonials/ayusha_bhajanka.jpg" alt="Ayusha Bhajanka">
                            </div>
                            <div class="testi-content">
                                <p>My journey with True Sign Publication started exactly a month ago when I was just
                                    someone with a
                                    dream which seemed too big to be real, one month later today I'm a published author
                                    who is officially
                                    launching their book virtually.
                                    The team is very efficient, organised and patient. They guided me throughout the
                                    month and helped me
                                    everytime I had a question.
                                    For someone who is a first time author, I must say the team was really kind in
                                    dealing with my Anxiety
                                    and assisted me in every step, answering the same question multiple times when
                                    needed.
                                    I wish True Sign all the very best!
                                </p>
                                <div class="testi-meta"> Ayusha Bhajanka <span>Founder & Author</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <img src="assets/images/testimonials/bipransh_tiwary.jpg" alt="Bipransh Kumar Tiwary">
                            </div>
                            <div class="testi-content">
                                <p>I cannot express to you how impressed I am with the service all of you give to a new
                                    author. The
                                    books were received and they look beautiful. The quality of the covers, the printing
                                    and the paper are
                                    excellent. The finished product was totally professional. Your customer service was
                                    exceptional and
                                    assisted me each step of the way. Once again, thank you and everyone involved in my
                                    book. I am pleased
                                    to announce that in continuation of our bonding, my next Self-Help book will come
                                    here.</p>
                                <div class="testi-meta"> Bipransh Kumar Tiwary <span>HOD (Microbiology), St. Xavier’s
                                        College,
                                        Jalpaiguri</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <img src="assets/images/testimonials/dhanusree_p.jpg" alt="Dhanusree. P">
                            </div>
                            <div class="testi-content">
                                <p>I published my first book, Effervescent Life, through True Sign Publication and I am
                                    glad that I
                                    choose them for the launch of my first book. The experience has been excellent and
                                    hassle free, I got
                                    good support from the team and they are always ready to help. I would recommend True
                                    Sign
                                    Publication to all upcoming writers who want to publish their book.
                                    They are very professional and you get your book published on time. I am looking
                                    forward to
                                    True Sign to publish my next book and wish True Sign the very best. Sure that they
                                    will continue
                                    to help new writers and realise their dreams of getting their books published. All
                                    the Best
                                </p>
                                <div class="testi-meta"> Dhanusree. P <span>Author</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <img src="assets/images/testimonials/vijay_rego.jpg" alt="Vijay Rego">
                            </div>
                            <div class="testi-content">
                                <p>As a first time author I was very skeptical about online publishing especially when
                                    there was a huge
                                    physical distance between our locations. But True Sign made the entire process very
                                    seamless and
                                    pleasant. Excellent editing work and prompt replies made the publishing process very
                                    smooth and the
                                    entire process took very short time due to the quick reponse and high quality of
                                    work. I look forward
                                    to publishing many more books in future and extend my association with the True Sign
                                    team!</p>
                                <div class="testi-meta"> Vijay Rego <span>Professor</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <img src="assets/images/testimonials/spurti_nimbali.jpg" alt="Spurti Nimbali">
                            </div>
                            <div class="testi-content">
                                <p>Dear True Sign
                                    Publishing my debut book with you has been nothing but gratifying. You and your team
                                    have worked
                                    tirelessly and efficiently towards publishing my book- MY PAPERBOATS. Your guidance,
                                    support and
                                    service have made this journey tranquil and pleasurable. I would also love to
                                    appreciate the way
                                    you’ve worked , that is systematically, professionally and transparently ; which has
                                    helped made this
                                    originally elaborate and tiresome process, facile. I would also love to express my
                                    heartfelt gratitude
                                    to your publishing team - for their commendable work and yor support team for
                                    addressing our queries.
                                </p>
                                <div class="testi-meta"> Spurti Nimbali <span>Student</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" style="background: #fdefe0">
            <div class="container">
                <div class="heading-block mb-4 border-bottom-0">
                    <h2 class="ls0 nott mb-0">Featured Book</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-6">
                        <a href="https://True Sign.in/product/korangeera/"><img
                                src="assets/images/featured-books/Korangeera.png" alt="korangeera/"></a>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-3 mt-sm-0">
                        <div class="heading-block">
                            <h3 class="font-weight-normal ls0 mb-0">Korangeera</h3>
                            <span class="text-muted">By Abhijith Chandra</span>
                        </div>
                        <p class="mb-0">"Korangeera" is Abhijith Chandra's debut into the world of writing. Every goal
                            achieved has
                            a dream behind it and it is literally true in case of "korangeera". Get ready for an
                            adrenaline surge and
                            let your imagination take you on a rollercoaster with this one. This is just the beginning
                            of a sequel of
                            books to be released by the author. The author visualises his book to be made into a movie
                            one day and is
                            working on it. Also he offers the readers something to look foreword to by releasing the
                            title of his next
                            book "LITTPIN".</p>
                    </div>
                    <div class="col-lg-5 mt-5 mt-lg-0">
                        <h4 class="black font-weight-normal font-body">Other featured books</h4>
                        <div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="20"
                            data-nav="true" data-pagi="true" data-items-xs="2" data-items-sm="3" data-items-md="3"
                            data-items-lg="2" data-items-xl="2">
                            <div class="oc-item">
                                <a href="https://True Sign.in/product/Beauty-Sleep"><img
                                        src="assets/images/featured-books/Beauty-Sleep.jpg" alt="Beauty Sleep"></a>
                            </div>
                            <div class="oc-item">
                                <a href="https://True Sign.in/product/eternally-imperfect/"><img
                                        src="assets/images/featured-books/Eternally-Imperfect.png"
                                        alt="Eternally Imperfect/"></a>
                            </div>
                            <div class="oc-item">
                                <a href="https://True Sign.in/product/samkalin-hindi-saahity-mein-naari-vimarsh/"><img
                                        src="assets/images/featured-books/Samkalin-Hindi-Saahity-Mein-Naari-Vimarsh.png"
                                        alt="samkalin hindi saahity mein naari vimarsh/"></a>
                            </div>
                            <div class="oc-item">
                                <a href="https://True Sign.in/product/The-Cooking-God-in-you"><img
                                        src="assets/images/featured-books/The-Cooking-God-in-you.png"
                                        alt="The Cooking God in you"></a>
                            </div>
                            <div class="oc-item">
                                <a href="https://True Signn/product/Saagara-Raagamu"><img
                                        src="assets/images/featured-books/Saagara-Raagamu.png"
                                        alt="Saagara Raagamu"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="section">
            <div class="container mt-lg-4">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge badge-pill badge-default">Latest Articles</div>
                    <h2 class="nott ls0">Recently from Our Blogs</h2>
                </div>
                <div class="row mt-5 clearfix">
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="blogs/nailing-the-art_of-narrative-writing"><img
                                        src="assets/blogs/nailing-the-art_of-narrative-writing/thumb.jpg"
                                        alt="Art of Narrative Writing"></a>
                            </div>
                            <div class="entry-title">
                                <h3 class="text-larger"><a href="blogs/nailing-the-art_of-narrative-writing">Nailing the
                                        art of
                                        Narrative Writing - Ultimate Guide</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i>True Signli>
                                    <li><i class="icon-calendar-times1"></i>21 Aug 2021</li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix text-normal">
                                <p>Narrative writing has a story, characters, conflict, and other essential parts.
                                    Narrative writing is
                                    often synonymous to story writing. And this differs greatly compared to other forms
                                    of writing, like
                                    in fiction and certain non-fiction books.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="blogs/the-chapter-is-not-yet-closed-how-to-revive-your-book-sales"><img
                                        src="assets/blogs/the-chapter-is-not-yet-closed-how-to-revive-your-book-sales/thumb.jpg"
                                        alt="How to revive your book sales"></a>
                            </div>
                            <div class="entry-title">
                                <h3 class="text-larger">
                                    <a href="blogs/the-chapter-is-not-yet-closed-how-to-revive-your-book-sales">
                                        The chapter is not yet closed - How to revive your book sales
                                    </a>
                                </h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i>True Signli>
                                    <li><i class="icon-calendar-times1"></i>24 Jul 2021</li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix text-normal">
                                <p>Good marketing can help authors sell thousands of copies and if the book is good
                                    enough then it will
                                    keep selling whether you continue with the marketing or not.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="blogs/challenges-faced-by-writers-and-their-solutions"><img
                                        src="assets/blogs/challenges-faced-by-writers-and-their-solutions/thumb.jpg"
                                        alt="Challenges faced by Writers"></a>
                            </div>
                            <div class="entry-title">
                                <h3 class="text-larger"><a
                                        href="blogs/challenges-faced-by-writers-and-their-solutions">Challenges faced
                                        by Writers and their solutions.</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i>True Signli>
                                    <li><i class="icon-calendar-times1"></i>10 Jul 2021</li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix text-normal">
                                <p class="">Writers are those artists who create worlds in which people can submerge.
                                    But while they may
                                    be magicians who seem to create fantastic stories out of thin air, they have their
                                    own set of problems
                                    too.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="section bg-transparent clearfix">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-5 pt-4 pb-4">
                        <h2>FAQs</h2>
                        <div class="toggle">
                            <div class="toggle-header justify-content-between flex-row-reverse">
                                <div class="toggle-icon"> <i class="toggle-closed icon-chevron-right1"></i> <i
                                        class="toggle-open icon-chevron-right1"></i> </div>
                                <div class="toggle-title font-weight-medium"> What is the publishing process? </div>
                            </div>
                            <div class="toggle-content">Publishing with True Sign is very easy. Register with us, select
                                the
                                publishing package according to your requirement and how you want to publish your book.
                                Follow the
                                instructions to publish your book with True Sign Publication.</div>
                        </div>
                        <div class="toggle">
                            <div class="toggle-header justify-content-between flex-row-reverse">
                                <div class="toggle-icon"> <i class="toggle-closed icon-chevron-right1"></i> <i
                                        class="toggle-open icon-chevron-right1"></i> </div>
                                <div class="toggle-title font-weight-medium"> How much royalty will I get? </div>
                            </div>
                            <div class="toggle-content">Author will get 100% Royalty of each print order and eBook
                                Sales. Royalty is
                                calculated as MRP – (Production Cost + Distribution Charges). Hence authors will get
                                100% of the
                                profits.</div>
                        </div>
                        <div class="toggle">
                            <div class="toggle-header justify-content-between flex-row-reverse">
                                <div class="toggle-icon"> <i class="toggle-closed icon-chevron-right1"></i> <i
                                        class="toggle-open icon-chevron-right1"></i> </div>
                                <div class="toggle-title font-weight-medium"> Will I get ISBN number? </div>
                            </div>
                            <div class="toggle-content">ISBN stands for 'International Standard Book Number'. It's
                                basically a 13
                                digit identification number that booksellers and libraries use to identify books. A
                                separate ISBN is
                                assigned for Paperback, Hardcover, and eBook versions of your book by the ISBN agency of
                                India.</div>
                        </div>
                        <div class="toggle">
                            <div class="toggle-header justify-content-between flex-row-reverse">
                                <div class="toggle-icon"> <i class="toggle-closed icon-chevron-right1"></i> <i
                                        class="toggle-open icon-chevron-right1"></i> </div>
                                <div class="toggle-title font-weight-medium"> Who owns the rights to my book? </div>
                            </div>
                            <div class="toggle-content">You retain all the rights to your book! We don't own any of your
                                content and
                                you can even publish it elsewhere if you wish with our non-exclusive agreement with the
                                author.</div>
                        </div>
                        <a href="frequently-asked-questions"
                            class="button button-small button-light font-weight-medium ls0 nott ml-0 mt-2 clearfix">Learn
                            More</a>
                    </div>
                    <div class="col-lg-5 col-md-7 mt-4 mb-4">
                        <div class="flip-card">
                            <div class="flip-card-front dark" data-height-sm="505" style="background-color: #ED6926;">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0">
                                        <div class="card-body">
                                            <h2 class="card-title pb-3 text-white">Still not sure how to get your book
                                                published?</h2>
                                            <p class="card-text font-weight-normal pb-3">Talk with our Publishing Expert
                                            </p>
                                            <button class="button button-large ls0 nott ml-0 mt-2 button-light">REGISTER
                                                NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back" data-height-sm="505" style="background-color: #f9f9f9;">
                                <div class="flip-card-inner">
                                    <div class="form-widget">
                                        <div class="form-result"></div>
                                        <!-- Mini Lead Form -->
                                        <form action="form-submit" id="MiniLeadForm"
                                            class="row position-relative mb-0 disable-on-submit"
                                            enctype="multipart/form-data" method="post" accept-charset="utf-8"
                                            novalidate="novalidate">
                                            <input type="hidden" name="redirect_url"
                                                value="thankyou?utm_source=web&utm_medium=mini_lead_form&utm_campaign=home_footer" />
                                            <input type="hidden" name="key" value="94e631fa1a33e904646295d4fb2e8080">
                                            <div class="form-process">
                                                <div class="css3-spinner">
                                                    <div class="css3-spinner-scaler"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 input-group form-group">
                                                <div class="input-group-prepend"> <span
                                                        class="input-group-text bg-transparent"><i
                                                            class="icon-line2-user"></i></span> </div>
                                                <input type="text" name="name" id="name" class="form-control required"
                                                    value="" placeholder="Your Full Name" />
                                            </div>
                                            <div class="col-sm-12 input-group form-group">
                                                <div class="input-group-prepend"> <span
                                                        class="input-group-text bg-transparent"><i
                                                            class="icon-line2-envelope"></i></span> </div>
                                                <input type="email" name="email" id="email"
                                                    class="form-control required" value="" placeholder="Your Email" />
                                            </div>
                                            <div class="col-sm-12 input-group form-group">
                                                <div class="input-group-prepend"> <span
                                                        class="input-group-text bg-transparent"><i
                                                            class="icon-line2-call-out"></i></span> </div>
                                                <input type="tel" name="phonenumber" pattern="[6-9]{1}[0-9]{9}"
                                                    id="phonenumber" class="form-control required" value=""
                                                    placeholder="Your Phone Number" />
                                            </div>
                                            <div class="col-12">
                                                <button data-sitekey="6LcMwNkaAAAAAB4cCv_E6s2OfiA0OyDUMmTTjNF1"
                                                    data-callback="onSubmitMiniLeadForm" data-action="submit"
                                                    class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2 g-recaptcha">
                                                    Register Now
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.activeLink = 'menu-home';
        </script>




        <!-- Footer Start -->
        <?php include('include/footer.php') ?>
        <!-- Footer end -->
    </div>

    <div id="gotoTop" class="icon-angle-up"></div>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="assets/js/plugins.js"></script>
    <script defer src="assets/js/functions.js"></script>
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://wissenpress.com/hub/assets/builds/common.js?v=2.3.3"></script>
    <script defer src="assets/js/custom.js?v=6.2"></script>
</body>

</html>