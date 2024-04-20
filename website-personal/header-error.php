<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XN06CJMB91"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XN06CJMB91');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page - 404 Not Found</title>
    <meta name="description" content="This is the error page, it should direct user to the home page">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    <?php wp_head(); ?>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class = "navbar-nav mb-2 mb-lg-0">
                    <li class = "nav-item px-5">
                        <a class= "nav-link active" href="<?php echo site_url(''); ?>">HOME</a>
                    </li>
                    <li class = "nav-item px-5">
                        <a class= "nav-link active" href="<?php echo site_url('/about'); ?>">ABOUT</a>
                    </li>
                    <li class = "nav-item px-5">
                        <a class= "nav-link active" href="<?php echo site_url('/projects'); ?>">PROJECTS</a>
                    </li>
                    <li class = "nav-item px-5">
                        <a class= "nav-link active" href="<?php echo site_url('/blog'); ?>">BLOG</a>
                    </li>
                    <li class = "nav-item px-5">
                        <a class= "nav-link active" href="<?php echo site_url('/connect'); ?>">CONNECT</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex p-2 bd-highlight name-location justify-content-center">
            <h1 class="name">Jingxue <b>Jiang</b></h1>
        </div>
        <div class="d-flex p-2 bd-highlight name-location justify-content-center">
            <p class="location">Kingston,ON | <b>CA</b></p> 
        </div>
        
    </header>