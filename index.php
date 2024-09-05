<!DOCTYPE html>
<html lang="en">

<?php include('include/head.php') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <link as="style" rel="stylesheet preload prefetch" href="assets/css/bootstrap.css" crossorigin="anonymous" />
        <link as="style" rel="stylesheet preload prefetch" href="assets/css/style.css?_v=3" type="text/css" />
        <link as="style" rel="stylesheet preload prefetch" href="assets/css/animate.css" type="text/css" />
        <link as="style" rel="stylesheet preload prefetch" href="assets/fonts/font-icons.css" type="text/css" />
        <link as="style" rel="stylesheet preload prefetch" href="assets/css/main.css?_v=3" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet"
            type="text/css" />
        <link as="style" rel="stylesheet preload prefetch" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

     
 


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
                                            <a style="color:#388977 !important;" href="#">Privacy Policy</a> and
                                            <a style="color:#388977 !important;" href="#">Terms of Service</a> apply.
                                        </small>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                  
                </div>
            </div>
         
        </section>

        <?php include('include/section/description.php') ?>


        <?php include('include/section/pricing.php') ?>

        <div class="section mb-0 p-md-0 mt-5">
            <div class="container">
                <div class="row align-items-center justify-content-between m-0">
                <div class="col-lg-6 col-md-6 col-sm-6 pt-lg-6 pb-lg-6">
                        <div class="d-lg-flex"> <img src="assets/images/ebook_or_paperback.jpg" class="fast" alt="Image"
                                style="width: 100%; height:100%"> </div>
                    </div>
                 
                    <div class="col-lg-6 col-md-6 col-sm-6 pt-lg-6 pb-lg-6">
                        <div class="d-lg-flex"> <img src="assets/images/ebook_or_paperback.jpg" class="fast" alt="Image"
                                style="width: 100%; height:100%"> </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section bgcolorgreendark" style="padding: 80px 0">
            <div class="container clearfix">
                <div class="row justify-content-center pb-4 pt-4">
                    <div class="col-md-10 center">
                        
                        <p class="text-normal pb-3" style="color: #fff;">When you publish your book with True Sign Publication, it is
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

        

        <div class="section bg-transparent clearfix">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-12 col-md-5 pt-4 pb-4">
                        <h2>FAQs</h2>
                        <div class="toggle">
                            <div class="toggle-header justify-content-between flex-row-reverse">
                                <div class="toggle-icon"> <i class="toggle-closed fa-solid fa-arrow-right"></i> <i
                                        class="toggle-open fa-solid fa-arrow-right"></i> </div>
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
                                <div class="toggle-icon"> <i class="toggle-closed fa-solid fa-arrow-right"></i> <i
                                        class="toggle-open fa-solid fa-arrow-right"></i> </div>
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
                                <div class="toggle-icon"> <i class="toggle-closed fa-solid fa-arrow-right"></i> <i
                                        class="toggle-open fa-solid fa-arrow-right"></i> </div>
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
                                <div class="toggle-icon"> <i class="toggle-closed fa-solid fa-arrow-right"></i> <i
                                        class="toggle-open fa-solid fa-arrow-right"></i> </div>
                                <div class="toggle-title font-weight-medium"> Who owns the rights to my book? </div>
                            </div>
                            <div class="toggle-content">You retain all the rights to your book! We don't own any of your
                                content and
                                you can even publish it elsewhere if you wish with our non-exclusive agreement with the
                                author.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Footer Start -->
        <?php include('include/footer.php') ?>
        <!-- Footer end -->
    </div>

    <!-- <div id="gotoTop" class="icon-angle-up"></div> -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="assets/js/plugins.js"></script>
    <script defer src="assets/js/functions.js"></script>
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://wissenpress.com/hub/assets/builds/common.js?v=2.3.3"></script>
    <script defer src="assets/js/custom.js?v=6.2"></script>
</body>

</html>