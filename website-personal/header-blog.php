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
    <title>Jingxue Jiang's Blog Page</title>
    <meta name="description" content="This is an blog page that shares Jingxue Jiang's philosophy and ideas on topics related to robotics">
    
    <style type="text/css">
        * {
            margin: 0;
            padding:0;
        }
        body { overflow:hidden;}
        #my-background{
            width:100%;
            height:100vh;
        }
    </style>
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

    </header>

    
    