

<div class="initial-content-projects py-4" id="mbackgroundproj">
    <div class="container-fluid left-aligned-container"> 
        <div class="row">  
            <div class="col-md-2">
                <div class="sticky-top sticky-offset">
                <div class="sidebar-section pe-3">
                        <div class="sidebar-item">
                            <div class="sidebar-content">
                                <div class="d-flex flex-column justify-content-between">
                                    <div class="py-2 author-headshot-project">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/headshot-1.jpg" ); ?>" class="img-fluid" alt="headshot">
                                    </div>
                                    <div class="py-2 author-content" id="mtextproj16">Jingxue Jiang</div>
                                    <div class="py-2 author-urls-wrapper">
                                        <ul class="author-urls">
                                            <li>
                                                <a href="https://maps.app.goo.gl/bWBGrxLXDJ2K6iin8" style="text-decoration:none;color:black">
                                                    <i class="fa-regular fa-map" aria-hidden="true" style="font-size:19px;color:grey"></i>
                                                    <span class="label" id="mtextproj15">Kingston,ON,CA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:jingxue07@gmail.com" style="text-decoration:none;color:black">
                                                    <i class="fa-regular fa-envelope" style="font-size:20px;color:grey"></i>
                                                    <span class="label" id="mtextproj14">Email</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/" style="text-decoration:none;color:black">
                                                    <i class="fa-brands fa-linkedin-in" aria-hidden="true" style="font-size:22px;color:blue"></i>
                                                    <span class="label" id="mtextproj13">LinkedIn</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/jiangjingxue" style="text-decoration:none;color:black">
                                                    <i class="fa-brands fa-github" aria-hidden="true" style="font-size:19px;color:red"></i>
                                                    <span class="label" id="mtextproj12">Github</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="inner-section">
                    <header class="ps-4">
                        <h1 class="project-page-title" id="mtextproj11">Projects</h1>
                    </header>
                    <section class="project-navigation-bar my-4 ps-4">
                        <ul class="category-list">
                            <li>
                                <a class="active-button category-button" href="#" data-category="all">All</a>
                            </li>
                            <li>
                                <a  class="category-button" href="#" tabindex="-1" aria-disabled="true" data-category="controls">Controls</a>
                            </li>
                            <li>
                                <a class="category-button" href="#" tabindex="-1" aria-disabled="true" data-category="pathplanning">Path-Planning</a>
                            </li>
                            <li>
                                <a class="category-button" href="#" tabindex="-1" aria-disabled="true" data-category="vision">Computer-Vision</a>
                            </li>
                            <li>
                                <a class="category-button" href="#" tabindex="-1" aria-disabled="true" data-category="mappreprocessing">Map-Preprocessing</a>
                            </li>
                            <li>
                                <a class="category-button" href="#" tabindex="-1" aria-disabled="true" data-category="other">Other</a>
                            </li>
                        </ul>                
                    </section>
                    <section class="inner-content p-4" id="mbackgroundproj1">
                            <div class="row pb-5 pathplanning proj1">
                                <div class="col-md-4">
                                    <div class="background-coverage">
                                        <div class="video-container" onmouseover="playVideo('video1')" onmouseout="pauseVideo('video1')">
                                            <div class="ratio ratio-16x9">
                                                <video preload="metadata" loop muted id="video1"> 
                                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/coverage_compressed_unmuted.mp4" ); ?>" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                        <div class="project-text-section" id="mtextproj1">
                                            <div class="d-inline-flex flex-column bd-highlight">
                                                <div class="project-title bd-highlight">
                                                    <h2 style="padding: 0px; margin: 0px;">Coverage Planning for Cleaning Robot</h2>
                                                </div>
                                                <div class="project-subtitle bd-highlight">
                                                    <p style="padding: 0px; margin: 0px;">Linux • C++ • ROS2</p>
                                                </div>
                                                <div class="project-description bd-highlight">
                                                    <p>I implemented a complete coverage planner allowing robot vacuums to systematically clean an indoor space without an environment map.</p>
                                                </div>
                                                <div class="project-buttons project-left-buttons bd-highlight">
                                                    <div class="d-grid gap-2 d-flex justify-content-start">
                                                        <!-- <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#frontierRead">Learn More</button> -->
                                                        <!-- <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#frontierDemo">Demo</button> -->
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#CoverageDemoModal">
                                                        Play Demo
                                                        </button>
                                                        <div class="modal fade" id="CoverageDemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Happy Cleaning, Cheers!</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="padding: 0;">
                                                                        <!-- Embed local video using HTML5 video tag -->
                                                                        <div class="ratio ratio-16x9">
                                                                        <video id="DemoPlayer" preload="auto" controls>
                                                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/coverage_compressed_unmuted.mp4" ); ?>" type="video/mp4">
                                                                        </video>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- <a href="" class="btn btn-info rounded-pill btn-sm">Play Demo</a>  -->
                                                        <!-- <a href="<?php echo site_url('/projects/frontier'); ?>" class="btn btn-info rounded-pill btn-sm">Learn More</a> -->
                                                        <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                    </div> 
                                                </div>
                                            </div>   
                                        </div>
                                </div>
                            </div>

                            <div class="row pb-5 pathplanning proj2">
                                <div class="col-md-4">
                                    <div class="background-frontier">
                                    <div class="video-container" onmouseover="playVideo('video2')" onmouseout="pauseVideo('video2')">
                                        <div class="ratio ratio-16x9">
                                            <video preload="metadata" loop muted id="video2"> 
                                                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/frontierx4-fade.mp4" ); ?>" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                        <div class="project-text-section" id="mtextproj2">
                                            <div class="d-inline-flex flex-column bd-highlight">
                                                <div class="project-title bd-highlight">
                                                    <h2 style="padding: 0px; margin: 0px;">Autonomous Exploration</h2>
                                                </div>
                                                <div class="project-subtitle bd-highlight">
                                                    <p style="padding: 0px; margin: 0px;">Linux • C++ • ROS2</p>
                                                </div>
                                                <div class="project-description bd-highlight">
                                                    <p>I designed an improved frontier exploration algorithm enabling wheeled robots to explore and map unknown indoor environments autonomously.</p>
                                                </div>
                                                <div class="project-buttons project-left-buttons bd-highlight">
                                                    <div class="d-grid gap-2 d-flex justify-content-start">
                                                        <!-- <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#frontierRead">Learn More</button> -->
                                                        <!-- <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#frontierDemo">Demo</button> -->
                                                        <!-- <a href="<?php echo site_url('projects/frontier#scrollspyFrontierResultDemo'); ?>" class="btn btn-info rounded-pill btn-sm">Play Demo</a>  -->
                                                        <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#FrontierDemoModal">
                                                        Play Demo
                                                        </button>
                                                        <div class="modal fade" id="FrontierDemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Good Job, Cyrus !</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="padding: 0;">
                                                                        <!-- Embed local video using HTML5 video tag -->
                                                                        <div class="ratio ratio-16x9">
                                                                        <video id="DemoPlayer" preload="metadata" controls>
                                                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/full-x4-nowater-compress.mp4" ); ?>" type="video/mp4">
                                                                        </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="<?php echo site_url('/projects/frontier'); ?>" class="btn btn-primary rounded-pill btn-sm">Learn More</a>
                                                        <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                    </div> 
                                                </div>
                                            </div>   
                                        </div>
                                </div>
                            </div>

                            <div class="row pb-5 controls proj3">
                                <div class="col-md-4">
                                    <div class="background-autodrive">
                                    <div class="video-container" onmouseover="playVideo('video3')" onmouseout="pauseVideo('video3')">
                                        <div class="ratio ratio-16x9">
                                            <video preload="metadata" loop muted id="video3"> 
                                                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/path_follow.mp4" ); ?>" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                        <div class="project-text-section" id="mtextproj3">
                                            <div class="d-inline-flex flex-column bd-highlight">
                                                <div class="project-title bd-highlight">
                                                    <h2 style="padding: 0px; margin: 0px;">Control System Design for Self-Driving EV</h2>
                                                </div>
                                                <div class="project-subtitle bd-highlight">
                                                    <p style="padding: 0px; margin: 0px;">Linux • Python • ROS2</p>
                                                </div>
                                                <div class="project-description bd-highlight">
                                                    <p>
                                                        I designed a velocity and a path-tracking controller for an electric vehicle sponsored by General Motors.
                                                    </p>
                                                </div>
                                                <div class="project-buttons project-left-buttons bd-highlight">
                                                    <div class="d-grid gap-2 d-flex justify-content-start">
                                                        <!-- <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#ChevyDemo">Play Demo</button> -->
                                                        <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#StanleyDemoModal">
                                                        Play Demo
                                                        </button>
                                                        <div class="modal fade" id="StanleyDemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Hands off the steering wheel !</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="padding: 0;">
                                                                        <!-- Embed local video using HTML5 video tag -->
                                                                        <div class="ratio ratio-16x9">
                                                                        <video id="DemoPlayer" preload="metadata" controls>
                                                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/path_follow.mp4" ); ?>" type="video/mp4">
                                                                        </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#ChevyRead">Learn More</button>
                                                        <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                    </div> 
                                                </div>
                                            </div>   
                                        </div>
                                </div>
                            </div>

                            <div class="row pb-5 controls proj4">
                                <div class="col-md-4">
                                    <div class="background-cyrus proj-right-img">
                                    <div class="video-container" onmouseover="playVideo('video4')" onmouseout="pauseVideo('video4')">
                                        <div class="ratio ratio-16x9">
                                            <video preload="metadata" loop muted id="video4"> 
                                                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/cyrus-rotate.mp4" ); ?>" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                        <div class="project-text-section" id="mtextproj4">
                                            <div class="d-inline-flex flex-column bd-highlight">
                                                <div class="project-title bd-highlight">
                                                    <h2 style="padding: 0px; margin: 0px;">Home Robot with Automatic Speech Recognition</Ri:a></h2>
                                                </div>
                                                <div class="project-subtitle bd-highlight">
                                                    <p style="padding: 0px; margin: 0px;">Linux • C • STM32 </p>
                                                </div>
                                                <div class="project-description bd-highlight">
                                                    <p>
                                                    I designed a 3D-printed home robot capable of recognizing human speech. I also implemented the hardware-level control system for the robot.
                                                    </p>
                                                </div>
                                                <div class="project-buttons project-right-buttons bd-highlight">
                                                    <div class="d-grid gap-2 d-flex justify-content-start">
                                                        <!-- <a href="<?php echo site_url('/projects/cyrus#scrollspyCyrusDemo'); ?>" class="btn btn-info rounded-pill btn-sm">Play Demo</a>  -->
                                                        <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#WillyDemoModal">
                                                        Play Demo
                                                        </button>
                                                        <div class="modal fade" id="WillyDemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Nice Job, Willy!</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="padding: 0;">
                                                                        <!-- Embed local video using HTML5 video tag -->
                                                                        <div class="ratio ratio-16x9">
                                                                        <video id="DemoPlayer" preload="metadata" controls>
                                                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/cyrus-rotate.mp4" ); ?>" type="video/mp4">
                                                                        </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <a href="<?php echo site_url('/projects/cyrus'); ?>" class="btn btn-primary rounded-pill btn-sm">Learn More</a>
                                                        <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                    </div> 
                                                </div>
                                            </div>   
                                        </div>
                                </div>
                            </div>


                            <div class="row pb-5 vision proj5">
                                <div class="col-md-4">
                                    <div class="background-semantic proj-right-img">
                                        <!-- <div class="video-container" onmouseover="playVideo('video5')" onmouseout="pauseVideo('video5')">
                                            <div class="ratio ratio-16x9">
                                                <video preload="metadata" loop muted id="video5"> 
                                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/real-time-sofa.mp4" ); ?>" type="video/mp4">
                                                </video>
                                            </div>
                                        </div> -->
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/unity_girl.png" ); ?>" class="img-fluid image-alternative" alt="unity view">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-text-section" id="mtextproj5">
                                        <div class="d-inline-flex flex-column bd-highlight">
                                            <div class="project-title bd-highlight">
                                                <h2 style="padding: 0px; margin: 0px;">Semantic Segmentation of Indoor Scenes</h2>
                                            </div>
                                            <div class="project-subtitle bd-highlight">
                                                <p style="padding: 0px; margin: 0px;"> Python • C++ • PyTorch • CUDA</p>
                                            </div>
                                            <div class="project-description bd-highlight">
                                                 <p>I led a team of three to train and infer a neural network capable of segmenting household items using a custom indoor dataset of 12000 images.</p>
                                            </div>
                                            <div class="project-buttons project-right-buttons bd-highlight">
                                                <div class="d-grid gap-2 d-flex justify-content-start">
                                                    <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#SemanticDemoModal">
                                                        Play Demo
                                                        </button>
                                                        <div class="modal fade" id="SemanticDemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Inferencing in real-time!</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="padding: 0;">
                                                                        <!-- Embed local video using HTML5 video tag -->
                                                                        <div class="ratio ratio-21x9">
                                                                        <video id="DemoPlayer" preload="metadata" controls>
                                                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/real-time-sofa.mp4" ); ?>" type="video/mp4">
                                                                        </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <button type="button" class="btn btn-primary rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#SemanticRead">Learn More</button>
                                                    <!-- <a href="<?php echo site_url('/projects/semantic'); ?>" class="btn btn-info rounded-pill btn-sm">Learn More</a> -->
                                                    <!-- <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#SemanticDemo">Demo</button> -->
                                                    <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                </div> 
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-5 pathplanning proj6">
                                <div class="col-md-4">
                                    <div class="background-dubins">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/dubins/dubins-RSL-cropped.png" ); ?>" class="img-fluid image-alternative" alt="dubin's curve">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-text-section" id="mtextproj6">
                                        <div class="d-inline-flex flex-column bd-highlight">
                                            <div class="project-title bd-highlight">
                                                <h2 style="padding: 0px; margin: 0px;">Dubin's Optimal Path Planner</h2>
                                            </div>
                                            <div class="project-subtitle bd-highlight">
                                                <p style="padding: 0px; margin: 0px;">C++ • ROS2 • Eigen</p>
                                            </div>
                                            <div class="project-description bd-highlight">
                                                <p>I implemented a dubin’s path planner enabling wheeled robots to execute radius-constrained turns at a fixed velocity.</p>
                                            </div>
                                            <div class="project-buttons project-left-buttons bd-highlight">
                                                <div class="d-grid gap-2 d-flex justify-content-start">
                                                    <a href="<?php echo site_url('/projects/dubins'); ?>" class="btn btn-primary rounded-pill btn-sm">Learn More</a>
                                                    <!-- <a href="<?php echo site_url('/projects/dubins#scrollspyDubinsResult'); ?>" class="btn btn-info rounded-pill btn-sm">Demo</a>  -->
                                                    <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                </div> 
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                
                            </div>

                            
                            <div class="row pb-5 controls proj7">
                                <div class="col-md-4">
                                    <div class="background-mpc proj-right-img">
                                        <div class="video-container" onmouseover="playVideo('video6')" onmouseout="pauseVideo('video6')">
                                            <div class="ratio ratio-16x9">
                                                <video preload="metadata" loop muted id="video6"> 
                                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/mpc-speed.mp4" ); ?>" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-text-section" id="mtextproj7">
                                        <div class="d-inline-flex flex-column bd-highlight">
                                            <div class="project-title bd-highlight">
                                                <h2 style="padding: 0px; margin: 0px;">Linear Model Predictive Controller for Unicycle Trajectory Tracking</h2>
                                            </div>
                                            <div class="project-subtitle bd-highlight">
                                                <p style="padding: 0px; margin: 0px;">Matlab • Optimization Toolbox • Robotics System Toolbox</p>
                                            </div>
                                            <div class="project-description bd-highlight">
                                                <p>I designed a model predictive controller for trajectory tracking</p>
                                            </div>
                                            <div class="project-buttons project-right-buttons bd-highlight">
                                                <div class="d-grid gap-2 d-flex justify-content-start">
                                                        <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#MPCDemoModal">
                                                        Play Demo
                                                        </button>
                                                        <div class="modal fade" id="MPCDemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <!-- <h5 class="modal-title" id="exampleModalLabel">Inferencing in real-time!</h5> -->
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="padding: 0;">
                                                                        <!-- Embed local video using HTML5 video tag -->
                                                                        <div class="ratio ratio-16x9">
                                                                        <video id="DemoPlayer" preload="metadata" controls>
                                                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/mpcbestpath.mp4" ); ?>" type="video/mp4">
                                                                        </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <a href="<?php echo site_url('/projects/mpc'); ?>" class="btn btn-primary rounded-pill btn-sm">Learn More</a>
                                                    <!-- <a href="<?php echo site_url('/projects/mpc#scrollspyMPCResult'); ?>" class="btn btn-info rounded-pill btn-sm">Demo</a>  -->
                                                    <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                </div> 
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-5 controls proj8">
                                <div class="col-md-4">
                                    <div class="background-mpctuner">
                                        <div class="video-container" onmouseover="playVideo('video7')" onmouseout="pauseVideo('video7')">
                                            <div class="ratio ratio-16x9">
                                                <video preload="metadata" loop muted id="video7"> 
                                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/mpc-tuning.mp4" ); ?>" type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-text-section" id="mtextproj8">
                                        <div class="d-inline-flex flex-column bd-highlight">
                                            <div class="project-title bd-highlight">
                                                <h2 style="padding: 0px; margin: 0px;">Self-Tuning LMPC Controller Based on Evolutionary Algorithm</h2>
                                            </div>
                                            <div class="project-subtitle bd-highlight">
                                                <p style="padding: 0px; margin: 0px;">Matlab • Optimization Toolbox • Robotics System Toolbox</p>
                                            </div>
                                            <div class="project-description bd-highlight">
                                                <p>
                                                    I designed a tuning software to automatically tune the prediction horizon and the penalty matrix of a trajectory tracking model predictive controller.
                                                </p>
                                            </div>
                                            <div class="project-buttons project-left-buttons bd-highlight">
                                                <div class="d-grid gap-2 d-flex justify-content-start">
                                                <button type="button" class="btn btn-info rounded-pill btn-sm" data-bs-toggle="modal" data-bs-target="#MPCTuningDemoModal">
                                                        Play Demo
                                                        </button>
                                                        <div class="modal fade" id="MPCTuningDemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <!-- <h5 class="modal-title" id="exampleModalLabel">Inferencing in real-time!</h5> -->
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="padding: 0;">
                                                                        <!-- Embed local video using HTML5 video tag -->
                                                                        <div class="ratio ratio-16x9">
                                                                        <video id="DemoPlayer" preload="metadata" controls>
                                                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/mpc-tuning.mp4" ); ?>" type="video/mp4">
                                                                        </video>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <a href="<?php echo site_url('/projects/mpc-tuner'); ?>" class="btn btn-primary rounded-pill btn-sm">Learn More</a>
                                                    <!-- <a href="<?php echo site_url('/projects/mpc-tuner#scrollspyEAMPCResult'); ?>" class="btn btn-info rounded-pill btn-sm">Demo</a>  -->
                                                    <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                </div> 
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row pb-5 mappreprocessing proj9">
                                <div class="col-md-4">
                                    <div class="background-voronoi proj-right-img">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/voronoi/foundry-floorplan.jpg" ); ?>" class="img-fluid image-alternative" alt="personal website">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-text-section" id="mtextproj9">
                                        <div class="d-inline-flex flex-column bd-highlight">
                                            <div class="project-title bd-highlight">
                                                <h2 style="padding: 0px; margin: 0px;">Fast Neighbour Relation Extraction in Occupancy Grid Map using Voronoi Diagram</h2>
                                            </div>
                                            <div class="project-subtitle bd-highlight">
                                                <p style="padding: 0px; margin: 0px;">C++ • OpenCV</p>
                                            </div>
                                            <div class="project-description bd-highlight">
                                                <p>I developed a Voronoi-based technique to clean cluttered occupancy grid map.</p>
                                            </div>
                                            <div class="project-buttons project-right-buttons bd-highlight">
                                                <div class="d-grid gap-2 d-flex justify-content-start">
                                                    <a href="<?php echo site_url('/projects/voronoi'); ?>" class="btn btn-primary rounded-pill btn-sm">Learn More</a>
                                                    <!-- <a href="<?php echo site_url('/projects/voronoi#scrollspyVoronoiResult'); ?>" class="btn btn-info rounded-pill btn-sm">Demo</a>  -->
                                                    <a href="https://github.com/jiangjingxue" class="btn btn-secondary rounded-pill btn-sm">Code</a>
                                                </div> 
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                            <div class="row pb-5 other proj10">
                                <div class="col-md-4">
                                    <div class="background-web">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/web-silver1.png" ); ?>" class="img-fluid image-alternative" alt="personal website">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-text-section" id="mtextproj10">
                                        <div class="d-inline-flex flex-column bd-highlight">
                                            <div class="project-title bd-highlight">
                                                <h2 style="padding: 0px; margin: 0px;">This Website</h2>
                                            </div>
                                            <div class="project-subtitle bd-highlight">
                                                <p style="padding: 0px; margin: 0px;">HTML • CSS • JavaScript</p>
                                            </div>
                                            <div class="project-description bd-highlight">
                                                <p>I designed this website</p>
                                            </div>
                                            <div class="project-buttons project-left-buttons bd-highlight">
                                                <div class="d-grid gap-2 d-flex justify-content-start">
                                                    <!-- <a href="<?php echo site_url('/projects/website'); ?>" class="btn btn-info rounded-pill btn-sm">Learn More</a> -->
                                                </div> 
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                
                            </div>



                    </section>
                </div>
            </div>
            <!-- <div class="col-lg-2">
                <div class="right-sidebar-section"></div>
            </div> -->
        </div> 
    </div>
</div>

<script>
        const savedBackground = sessionStorage.getItem('theme-bg');
        const savedBackground1 = sessionStorage.getItem('theme-bg1');
        const savedfontColor = sessionStorage.getItem('font-color')
        if(savedBackground){
            document.getElementById('mbackgroundmaster').style.backgroundColor = savedBackground; // Change to a different background color using hex code
            document.getElementById('mbackgroundproj').style.backgroundColor = savedBackground; // Reset to default background color
        };
        if(savedBackground1){
          document.getElementById('mbackgroundproj1').style.backgroundColor = savedBackground1; // Change to a different background color using hex code
        };
        if(savedfontColor){
          document.getElementById('mtextproj1').style.color = savedfontColor;
          document.getElementById('mtextproj2').style.color = savedfontColor;
          document.getElementById('mtextproj3').style.color = savedfontColor;
          document.getElementById('mtextproj4').style.color = savedfontColor;
          document.getElementById('mtextproj5').style.color = savedfontColor;
          document.getElementById('mtextproj6').style.color = savedfontColor;
          document.getElementById('mtextproj7').style.color = savedfontColor;
          document.getElementById('mtextproj8').style.color = savedfontColor;
          document.getElementById('mtextproj9').style.color = savedfontColor;
          document.getElementById('mtextproj10').style.color = savedfontColor;
          document.getElementById('mtextproj11').style.color = savedfontColor;
          document.getElementById('mtextproj12').style.color = savedfontColor; 
          document.getElementById('mtextproj13').style.color = savedfontColor; 
          document.getElementById('mtextproj14').style.color = savedfontColor;
          document.getElementById('mtextproj15').style.color = savedfontColor; 
          document.getElementById('mtextproj16').style.color = savedfontColor; 

        }
</script>

<script>
  // Get the elements
  var buttonElementProject = document.getElementById('modebuttonproject');
  // Set the initial state

  function changeModeProject(){
    var themeColor = sessionStorage.getItem('font-color');

    if(themeColor == null){
      document.getElementById('mbackgroundmaster').style.backgroundColor = '#212124	'; // Change to a different background color using hex code
      document.getElementById('mbackgroundproj').style.backgroundColor = '#212124	'; // Change to a different background color using hex code
      document.getElementById('mbackgroundproj1').style.backgroundColor = '#3e3e42'; // Change to a different background color using hex code
      document.getElementById('mtextproj1').style.color = 'white';
      document.getElementById('mtextproj2').style.color = 'white';
      document.getElementById('mtextproj3').style.color = 'white';
      document.getElementById('mtextproj4').style.color = 'white';
      document.getElementById('mtextproj5').style.color = 'white';
      document.getElementById('mtextproj6').style.color = 'white';
      document.getElementById('mtextproj7').style.color = 'white';
      document.getElementById('mtextproj8').style.color = 'white';
      document.getElementById('mtextproj9').style.color = 'white';
      document.getElementById('mtextproj10').style.color = 'white';
      document.getElementById('mtextproj11').style.color = 'white';
      document.getElementById('mtextproj12').style.color = 'white';
      document.getElementById('mtextproj13').style.color = 'white';
      document.getElementById('mtextproj14').style.color = 'white';
      document.getElementById('mtextproj15').style.color = 'white'; 
      document.getElementById('mtextproj16').style.color = 'white'; 



      sessionStorage.setItem('vanta-bg','#016064');
      sessionStorage.setItem('theme-bg','#212124');
      sessionStorage.setItem('theme-bg1','#3e3e42');
      sessionStorage.setItem('font-color','white');
      
    } else if (themeColor == 'white') {
      document.getElementById('mbackgroundmaster').style.backgroundColor = '#efefef'; // Reset to default background color
      document.getElementById('mbackgroundproj').style.backgroundColor = ''; // Reset to default background color
      document.getElementById('mbackgroundproj1').style.backgroundColor = ''; // Reset to default background color
      document.getElementById('mtextproj1').style.color = '';
      document.getElementById('mtextproj2').style.color = '';
      document.getElementById('mtextproj3').style.color = '';
      document.getElementById('mtextproj4').style.color = '';
      document.getElementById('mtextproj5').style.color = '';
      document.getElementById('mtextproj6').style.color = '';
      document.getElementById('mtextproj7').style.color = '';
      document.getElementById('mtextproj8').style.color = '';
      document.getElementById('mtextproj9').style.color = '';
      document.getElementById('mtextproj10').style.color = '';
      document.getElementById('mtextproj11').style.color = '';
      document.getElementById('mtextproj12').style.color = '';
      document.getElementById('mtextproj13').style.color = '';
      document.getElementById('mtextproj14').style.color = '';
      document.getElementById('mtextproj15').style.color = ''; 
      document.getElementById('mtextproj16').style.color = ''; 



      sessionStorage.setItem('vanta-bg','#758393');
      sessionStorage.setItem('theme-bg','#efefef');
      sessionStorage.setItem('theme-bg1','white');
      sessionStorage.setItem('font-color','black');

    } else {
      document.getElementById('mbackgroundmaster').style.backgroundColor = '#212124	'; // Change to a different background color using hex code
      document.getElementById('mbackgroundproj').style.backgroundColor = '#212124	'; // Change to a different background color using hex code
      document.getElementById('mbackgroundproj1').style.backgroundColor = '#3e3e42'; // Change to a different background color using hex code
      document.getElementById('mtextproj1').style.color = 'white';
      document.getElementById('mtextproj2').style.color = 'white';
      document.getElementById('mtextproj3').style.color = 'white';
      document.getElementById('mtextproj4').style.color = 'white';
      document.getElementById('mtextproj5').style.color = 'white';
      document.getElementById('mtextproj6').style.color = 'white';
      document.getElementById('mtextproj7').style.color = 'white';
      document.getElementById('mtextproj8').style.color = 'white';
      document.getElementById('mtextproj9').style.color = 'white';
      document.getElementById('mtextproj10').style.color = 'white';
      document.getElementById('mtextproj11').style.color = 'white';
      document.getElementById('mtextproj12').style.color = 'white';
      document.getElementById('mtextproj13').style.color = 'white';
      document.getElementById('mtextproj14').style.color = 'white';
      document.getElementById('mtextproj15').style.color = 'white';
      document.getElementById('mtextproj16').style.color = 'white';  


      sessionStorage.setItem('vanta-bg','#016064');
      sessionStorage.setItem('theme-bg','#212124');
      sessionStorage.setItem('theme-bg1','#3e3e42');
      sessionStorage.setItem('font-color','white');
    }
    // Toggle the state
    isColorsChanged = !isColorsChanged;
  }

  // Attach the function to the button click event
  buttonElementProject.addEventListener('click', changeModeProject);

</script>

<script>
  // Function to play the specified video
  function playVideo(videoId) {
    var video = document.getElementById(videoId);
    var video_container = video.parentElement.parentElement;

    // video.style.display = 'block';
    video.play();
  }

  // Function to pause the specified video
  function pauseVideo(videoId) {
    var video = document.getElementById(videoId);
    var video_container = video.parentElement.parentElement;
    
    // video.style.background = 'url(./assets/images/frontier/roomba-view-169-low.jpg)'; // Replace with your background image path
    // video.style.display = 'none';

    video.pause();
  }
</script>

<script>
  $(document).ready(function () {
    // Initial state: Show all items
    filterItems('all');

    // Click event handler for category list items
    $('.category-list .category-button').click(function () {
      var category = $(this).data('category');
      filterItems(category);

      // Update list item styles for active state
      $('.category-list .category-button').removeClass('active-button');
      $(this).addClass('active-button');
    });

    // Function to filter items based on category
    function filterItems(category) {
      if (category === 'all') {
        // Show all items
        $('.inner-content .row').fadeIn();
      } else {
        // Hide all items
        $('.inner-content .row').hide();
        // Show only items with the selected category
        $('.inner-content .row.' + category).fadeIn();
      }
    }
  });
</script>


<script>
  document.querySelectorAll('.modal').forEach(function(modal) {
    var videoPlayer = modal.querySelector('video');

    modal.addEventListener('show.bs.modal', function () {
      if(videoPlayer) {
        videoPlayer.play();
      }
    });

    modal.addEventListener('hide.bs.modal', function () {
      if(videoPlayer) {
        videoPlayer.pause();
      }
    });
  });
</script>


