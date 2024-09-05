<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Book Slider</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item {
            display: flex;
        }
        .carousel-item img {
            width: 100%;
            height: auto;
        }
        /* Ensuring each column gets 20% width on large screens */
        .col-lg-2 {
            flex: 0 0 20%;
            max-width: 20%;
        }
    </style>
</head>
<body>

<div id="bookCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <!-- First Set of Books -->
        <div class="carousel-item active">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book1.jpg" alt="Book 1" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book2.jpg" alt="Book 2" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book3.jpg" alt="Book 3" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book4.jpg" alt="Book 4" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book5.jpg" alt="Book 5" class="img-fluid">
            </div>
        </div>
        <!-- Second Set of Books -->
        <div class="carousel-item">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book6.jpg" alt="Book 6" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book7.jpg" alt="Book 7" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book8.jpg" alt="Book 8" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book9.jpg" alt="Book 9" class="img-fluid">
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <img src="book10.jpg" alt="Book 10" class="img-fluid">
            </div>
        </div>
        <!-- Add more sets if needed -->
    </div>
    
    <!-- Controls -->
    <a class="carousel-control-prev" href="#bookCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#bookCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
