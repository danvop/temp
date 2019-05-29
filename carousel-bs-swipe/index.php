<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- BOOTSTRAP SECTION -->
    
    <link rel="stylesheet" href="bootstrap.css">
    

    <title>BS-slide-swipe</title>

</head>
<body>
    <div class="container">
        <!-- Don't forget swipe="true" -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" swipe="true">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/300x200?text=1" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/300x200/AAAAAA/FFFFFF?text=2" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/300x200?text=3" class="d-block w-100" alt="...">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        </div> 
    </div>
</body>
<!-- BOOTSTPAP slider relied on bootstrap.js and jQuery -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="bootstrap.js"></script>
</html>