<div class="container-fluid">
    <div class="row page-padding px-5">
        <div class="col-md-3 ps-3">
                <div class="sticky-top sticky-offset" style="z-index: auto">
                <div class="d-inline-flex flex-column">
                <a href="<?php echo site_url('/projects'); ?>" class="btn btn-info rounded-pill btn-sm my-3">Go back to Projects</a>
                <nav class="nav nav-pills bg-light flex-column overflow-auto" style="border:1.5px solid black;border-radius:10px">
                    <a class="nav-link link-dark table-of-content py-1" style="background-color: #d3d3d3">Table of Content</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyDubinsIntro">Introduction</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyDubinsDesign">Design</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyDubinsCode">Code Review</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyDubinsResult">Result</a>
                </nav>
                </div>
                </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-9">
                    <div class="article-padding my-3">
                        <article class="markdown" data-bs-target="#navbar-toc" data-bs-offset="0" tabindex="0">
                            <h1 class="project-big-title">Dubin's Optimal Path Planner</h1>
                            <figure class="figure text-center mt-3 mb-0">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/dubins/coverage-path.png" ); ?>" class="figure-img img-fluid rounded img-vid-media" alt="..." style="max-width: 90%">
                            </figure>
                            <p class="lead py-3">
                                Dubin’s curve is commonly used to generate paths for wheeled robots. One commercial use of Dubin's curve can be found in high-end robot vacuum cleaners. For example, the image shown above is the coverage path of a cleaning robot over a room, the curves between the straight-line segments are connected by Dubin’s curves. 
                                Dubin’s curve provides the shortest curvature-constrained path connecting two points, such a path is especially suitable for commercial cleaning robots, a type of non-holonomic vehicle with limited manuverabilty. 
                                In this project, I implemented Dubin’s path planner using C++ to connect the straight-line path segments generated from a coverage path planner. 
                                In addition, I integrated the Dubin's planner into the ROS2 ecosystem and tested it on a physical robot vacuum.   
                            </p>

                            <h2 id="scrollspyDubinsIntro" class="scroll-heading">Introduction</h2>
                            <p>
                            This Dubin’s path planner takes the input coverage plan generated from a coverage planner and outputs a sequence of waypoints connecting the straight-line segments in the input coverage plan. Dubin’s curve allows the robot to move to the adjacent straight line with constant speed, creating elegant, predictable cleaning behaviours perceived by human users. 
                            </p>
                            <h2 id="scrollspyDubinsDesign" class="scroll-heading">Design</h2>
                            <h3 class="py-1 mt-3">Planner Design</h3>
                            <p>
                            The planner class consists of six public methods corresponding to the six types of possible Dubin’s path: RSR, RSL, LSR, LSL, RLR, and LRL. 
                            In addition, the planner class includes a generate_path() method to select the shortest path type as the final path type. The planner class also has a private member variable named minimum turning radius, which places a curvature constraint on the generated path. 
                            Finally, the planner class has an interpolation method to allow the user to control the number of waypoints for the generated path.
                            </p>
                            <h3 class="py-1 mt-3">ROS2 Integration</h3>
                            <p> In progress </p>

                            <h2 id="scrollspyDubinsCode" class="scroll-heading">Code Review</h2>
                            <h3 class="py-1">Generate Path Waypoints</h3>
                            <p>
                            <code style="font-size: 110%;background:#f1f3f4">Pose2d</code> is a tuple that stores the position and orientation. 
                            </p>
                            <div class="ui-tabs pb-3">
                                <ul class="ui-tabs-nav">
                                    <li class="ui-tabs-tab ui-tabs-active" tabindex="0">
                                        <a tabindex="-1">C++</a>
                                    </li>
                                </ul>
                            <div class="highlight">
                                <pre class="m-0 p-3" tabindex="0" style="color:#272822;background-color:#fafafa;">
                                <code>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Populate the start pose and the goal pose </span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">Pose2d start{start_x,start_y,start_yaw_rad};</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">Pose2d goal{goal_x,goal_y,goal_yaw_rad};</span>
                                    </span>
                                    <span style="display:flex;height:21px;">
                                        <span></span>
                                    </span>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Create a dubins curve object</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111"> DubinsPath dubins_obj = DubinsPath(minimum_turning_radius,step_size);</span>
                                    </span>
                                    <span style="display:flex;height:21px;">
                                        <span></span>
                                    </span>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Generate plan </span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">Poses2d path; </span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">path = dubins_obj.generatePath(start,goal);</span>
                                    </span>
                                </code>
                                </pre>
                                </div>
                            </div>

                            
                            
                            <h2 id="scrollspyDubinsResult" class="scroll-heading">Result</h2>
                            <p>
                                Three of the six type of possible paths generated from the Dubin's Planner:
                            </p>
                            <div class="row row-cols-3">
                                <div class="col">
                                    <figure class="figure">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/dubins/dubins-RSL-cropped.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                    </figure>
                                    <figcaption class="figure-caption text-center">RSL</figcaption>
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/dubins/dubins-RSR-1.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                    <figcaption class="figure-caption text-center">RSR</figcaption>
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/dubins/dubins-LRL-2.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                    <figcaption class="figure-caption text-center">LRL</figcaption>
                                </div>                                
                            </div>
                            <h3 id="scrollspyFrontierResultDemo" class="py-1 mt-3">Demo</h3>
                            <p> Demo in progress </p>
                            


                            <footer class="footer-section text-center text-lg-start bg-body-tertiary text-muted">
                            <div class="text-start py-4">
                                © 2024 Copyright:
                                <a class="text-reset" style="text-decoration:none">Jingxue Jiang. All rights reserved.</a>
                            </div>
                            </footer>
                        </article>
                        <footer class="tutorial-footer"></footer>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
                
            </div>
        </div>
    </div>
</div>

