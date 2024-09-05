<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body class="stretched">

    <link as="style" rel="stylesheet preload prefetch" href="assets/css/bootstrap.css" crossorigin="anonymous" />
    <link as="style" rel="stylesheet preload prefetch" href="assets/css/style.css?_v=3" type="text/css" />
    <link as="style" rel="stylesheet preload prefetch" href="assets/css/animate.css" type="text/css" />
    <link as="style" rel="stylesheet preload prefetch" href="assets/fonts/font-icons.css" type="text/css" />

    <link as="style" rel="stylesheet preload prefetch" href="assets/css/main.css?_v=3" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet"
        type="text/css" />
    <link as="style" rel="stylesheet preload prefetch" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />


    <!-- Header======================= -->

    <?php include('include/header.php') ?>


    <section class="sectionroyality" style="background-color:#f0ece0;">
        <!-- Header end -->
        <section>
            <div class="section pb-3 m-0 overflow-hidden parallax align-items-center">
                <div class="container clearfix center">
                    <div class="text-center">
                        <div class="content">

                            <h1>Earn 100% Author Royalty</h1>
                        </div>
                        <p class="pr-lg-6 pl-lg-6">We simplify publishing and guide you throughout the process. Know the
                            cost of your book alongwith the best selling prince & author royalty. Get your book
                            published & receive 100% author royalty on profit of every book sold.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container clearfix center">
                <h2 class="h4 light-black pb-3">Calculate Paperback Earnings</h2>
                <p class="pr-lg-4 pl-lg-4">(For books with Black & White interior Only)</p>
            </div>
            <!-- Paperback Calculator Start -->
            <div class="container clearfix" style="align-items: center;">
                <div class="row pb-6" style="min-height: 350px;">
                    <div class="col-lg-1 m-0 d-none d-md-none d-lg-block"></div>
                    <div class="form-widget col-lg-5 col-md-6 col-sm-6 p-4">
                        <div class="row shadow bg-light border m-0 p-0" style="border-radius: 5px;">
                            <div class="col-lg-12 pr-0 pl-0">
                                <div class="center p-3" style="border-radius: 5px; background: #388977;">
                                    <h3 class="m-2" style="color: #fff;">1. Production Cost</h3>
                                    <small style="color: #fff;">Use below tool to estimate the production cost of your book with Black &
                                        White interior.</small>
                                </div>
                                <form class="row pt-4 pr-4 pl-4" id="production-cost" action="include/royalty.js"
                                    method="post" enctype="multipart/form-data">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-sm-5 col-form-label">
                                                <label style="color: #000;">Book Size :</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="form-control required" name="bookSize" id="bookSize"
                                                    required>
                                                    <option value="">Select Book Size</option>
                                                    <option value="1">5x8 in</option>
                                                    <option value="2">6x9 in</option>
                                                    <option value="3">8x11 in</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-sm-5 col-form-label">
                                                <label style="color: #000;">Number of Pages :</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="number" name="pages" id="pages"
                                                    class="form-control required pl-3" value=""
                                                    placeholder="Enter Total Pages" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group ">
                                        <div class="row">
                                            <div class="col-sm-5 col-form-label">
                                                <label style="color: #000;">Book Format :</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="form-control required" name="format" id="format" required>
                                                    <option value="paperback">Paperback</option>
                                                    <option value="hardback" disabled>Hardback</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-sm-5 col-form-label">
                                                <label style="color: #000;">Quote MRP :</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-white">&#8377;</span>
                                                    </div>
                                                    <input type="number" name="mrp" id="mrp"
                                                        class="form-control required pl-3" placeholder="Set Selling Price"
                                                        required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="center col-12">
                                        <label class="text-smaller mb-0" style="color: red;" id="note"></label>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center align-items-center pt-2 pb-2">
                                        <button type="button" class="button button-large ls-0 nott button-rounded"
                                            onclick="royalty()">Calculate</button>
                                    </div>
                                </form>
                                <div class="mt-4 pt-3 pb-2 pr-4 pl-4" style="background-color: #388977;">
                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">Production Cost :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-normal m-0 font-weight-semibold" name="pcost"
                                                    id="pcost"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">Minimum Selling Price (MSP) :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-larger m-0 font-weight-semibold" name="ssp"
                                                    id="ssp"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">Other Distribution Channels :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-larger m-0 font-weight-semibold" name="ssp"
                                                    id="ssp"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">truesign Store :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-larger m-0 font-weight-semibold" name="ssp"
                                                    id="ssp"></label>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-4" style="font-size: 12px;">Production cost is exclusive of taxes and
                            handling charges. It is subjected to change as per the current market conditions.</div>
                    </div>


















                    <div class="form-widget col-lg-5 col-md-6 col-sm-6 p-4">
                        <div class="row shadow bg-light border m-0 p-0" style="border-radius: 5px;">
                            <div class="col-lg-12 pr-0 pl-0">
                                <div class="center p-3" style="border-radius: 5px; background: #388977;">
                                    <h3 class="m-2" style="color: #fff;">2. Paperback Earnings</h3>
                                    <small style="color: #fff;">Use below tool to estimate the paperback royalty of your book with Black &
                                        White interior.</small>
                                </div>
                                <div class="row pt-4 pr-4 pl-4">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row">
                                            <div class="col-sm-5 col-form-label">
                                                <label style="color: #000;">Book Size :</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <select class="form-control required" name="bookSize1" id="bookSize1"
                                                    required>
                                                    <option value="">Select Book Size</option>
                                                    <option value="1">5x8 in</option>
                                                    <option value="2">6x9 in</option>
                                                    <option value="3">8x11 in</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group pb-1">
                                        <div class="row">
                                            <div class="col-sm-5 col-form-label">
                                                <label style="color: #000;">Number of Pages :</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <input type="number" name="pages1" id="pages1"
                                                    class="form-control required pl-3" value=""
                                                    placeholder="Enter Total Pages" required />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 form-group pb-1">
                                        <div class="row">
                                            <div class="col-sm-5 col-form-label">
                                                <label style="color: #000;">Quote Ebook MRP :</label>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-white">&#8377;</span>
                                                    </div>
                                                    <input type="number" name="emrp" id="emrp"
                                                        class="form-control required pl-3"
                                                        placeholder="Set Ebook Selling Price" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="center col-12">
                                        <label class="text-smaller mb-0" style="color: red;" id="note1"></label>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center align-items-center pt-2">
                                        <button type="button" class="button button-large ls-0 nott button-rounded"
                                            onclick="royalty()">Calculate</button>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 pb-2 pr-4 pl-4" style="background-color: #388977;">
                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">Other Distribution Channels :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-normal m-0 font-weight-semibold" name="otherRoyalty"
                                                    id="otherRoyalty"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">truesign Store :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-larger m-0 font-weight-semibold" name="obRoyalty"
                                                    id="obRoyalty"></label>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">Minimum Paperback MRP :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-normal m-0 font-weight-semibold" name="spmrp"
                                                    id="spmrp"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="row horizontal-center">
                                            <div class="col-sm-8 col-form-label">
                                                <label class="m-0">Suggested Ebook MRP :</label>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="text-larger m-0 font-weight-semibold" name="semrp"
                                                    id="semrp"></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-4" style="font-size: 12px;">Author Earnings shown above are exclusive
                            of taxes. It is subjected to change as per the current production cost / promotional
                            discount.</div>
                    </div>
                    <div class="col-lg-1 m-0 d-none d-md-none d-lg-block"></div>
                </div>
            </div>
             
            

        </section>

    </section>




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