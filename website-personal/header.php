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
    <title>Jingxue Jiang's Home Page</title>
    <meta name="description" content="The home page provides an welcome message to the visitors and a purpose statement, it also contains a picture of myself">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <?php wp_head(); ?>

</head>
<body>
    <header>
    <section class="wave-section">
    <div class="wave-body">
        <div class="container-fluid wave-text-container">
            <div class="row">
                <div class="master p-3 fixed-top" style="background: none">
                    <div class="master-inner px-5">
                        <nav class="site-nav navbar navbar-expand-lg navbar-light">
                            <div class="site-nav-inner container-fluid px-4">
                                <a class="site-title navbar-brand" href="<?php echo site_url(''); ?>">J</a>
                                <button type="button" class="btn btn-outline-light rounded-pill navbar-mode" id="modebuttonhome">Mode</button>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation" style="background:#E1C16E">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
                                    <ul class="site-links navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active mx-2" aria-current="page" href="<?php echo site_url(''); ?>">HOME</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active mx-2" href="<?php echo site_url('/about'); ?>">ABOUT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active mx-2" href="<?php echo site_url('/projects'); ?>">PROJECTS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active mx-2" href="<?php echo site_url('/connect'); ?>" tabindex="-1">CONNECT</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav> 
                    </div>
                </div>
            </div>
            <div class="row" style="height:75%">
                    <div class="col d-flex flex-column justify-content-end headline">
                        <h1 class="headline-name" id="mtext0">Jingxue Jiang</h1>
                        <p class="headline-title" id="mtext">roboticist • engineer</p>
                    </div>        
            </div>
        </div>
    </div>
</section>
        
    </header>
    