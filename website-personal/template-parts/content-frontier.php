<div class="container-fluid">
    <div class="row page-padding px-5">
        <div class="col-md-3 ps-3">
                <div class="sticky-top sticky-offset" style="z-index: auto">
                <div class="d-inline-flex flex-column">
                <a href="<?php echo site_url('/projects'); ?>" class="btn btn-info rounded-pill btn-sm my-3">Go back to Projects</a>
                <nav class="nav nav-pills bg-light flex-column overflow-auto" style="border:1.5px solid black;border-radius:10px">
                    <a class="nav-link link-dark table-of-content py-1" style="background-color: #d3d3d3">Table of Content</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyFrontierIntro">Introduction</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyFrontierDetection">Frontier Detection</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyFrontierSelection">Target Selection</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyFrontierNavigate">Navigate to Target</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyFrontierCode">Code Review</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyFrontierResult">Result</a>
                </nav>
                </div>
                </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-9">
                    <div class="article-padding my-3">
                        <article class="markdown" data-bs-target="#navbar-toc" data-bs-offset="0" tabindex="0">
                            <h1 class="project-big-title">Improved Frontier-based Autonomous Exploration</h1>
                            <figure class="figure text-center mt-3 mb-0">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/view-center.jpg" ); ?>" class="figure-img img-fluid rounded img-vid-media" alt="..." style="max-width: 50%">
                            </figure>
                            <p class="lead py-3">
                            In frontier-based exploration, the robot explores the environment by continuously detecting and moving toward frontier edges. Usually, the centroid of each detected frontier edge is computed, and the closest centroid is assigned to the robot for exploration. However, insufficient resolution inherent in low-cost LiDAR sensors introduces misclassified cells in the occupancy grid map, causing the frontier detection algorithm to produce spurious frontier points. These spurious frontier points move the centroids towards known regions, resulting in low exploration efficiency in complex environments. In this work, I present a method to minimize the effect of spurious frontier points. I have tested this approach with a mobile platform and a low-cost lidar, in three real indoor environments with varying densities. The experiment result showed a 15% improvement in exploration efficiency compared to previous research work. 
                            </p>

                            <h2 id="scrollspyFrontierIntro" class="scroll-heading">Introduction</h2>
                            <p>
                            Exploration through an unknown environment is a fundamental task for autonomous robots. An important goal of exploration is mapping the previously unknown area to create a representation of the environment. 
                            </p>
                            <p>
                            The most common and robust exploration strategy is the frontier-based exploration strategy. The main idea behind frontier-based exploration is to guide the robot to frontiers, defined as the boundary between unknown space and known space. 
                            </p>
                            <p>
                            Frontier-based exploration uses an occupancy grid map to represent the environment. It processes the occupancy grid to detect frontier edges. Once frontier edges are detected, a target point is selected and assigned to the robot for exploration. 
                            </p>
                            <p>
                            LiDAR sensors are often used for creating occupancy grid maps. LiDAR sensors with insufficient resolution for the exploration task can result in the frontier detection algorithm producing spurious frontier points, leading to low exploration efficiency. Due to the high cost of LiDAR sensors, commercial applications often require solutions that work well with inexpensive hardware. My focus is to develop an efficient exploration solution that overcomes the limitation of low-resolution LIDAR sensors. I present a new frontier selection scheme to effectively minimize the effect of spurious frontier points. 
                            </p>
                            <figure class="figure text-center mb-3">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/false-frontiers4.png" ); ?>" class="figure-img img-fluid rounded img-vid-media" alt="..." style="max-width:50%">
                                <figcaption class="figure-caption"><p>Occupnacy grid with scattered, misidentified cells that are not hit by the laser beams<p></figcaption>
                            </figure>
                            
                            
                            <h2 id="scrollspyFrontierDetection" class="scroll-heading">Frontier Detection</h2>
                            <p>
                            Frontier detection is a component of exploration algorithms. Its goal is to detect the frontiers present in the occupancy grid map.  The frontier detection algorithm I used is based on BFS. This algorithm uses an outer BFS to search for frontier points connected to the robot's position and an inner BFS to search for contiguous frontier points. The advantage of this algorithm is it does not process the entire map data to detect frontiers. 
                            </p>
                            <figure class="figure text-center mb-3">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/detected-frontier.png" ); ?>" class="figure-img img-fluid rounded img-vid-media" alt="..." style="max-width:50%">
                                <figcaption class="figure-caption"><p>Detected frontiers (Red points)<p></figcaption>
                            </figure>
                            
                            <h2 id="scrollspyFrontierSelection" class="scroll-heading">Target Selection</h2>
                            <p>
                            Once frontier edges are detected, a frontier point is selected and assigned to the robot for exploration. Usually, the centroid of each frontier edge is calculated, and the centroid closest to the robot is used as the exploration target. However, the detected frontier edges may include a significant amount of false frontier points resulting from insufficient LiDAR resolution. These false frontier points draw the centroid into the known region. Therefore, it is necessary to remove those false frontier points in the frontier edges. 
                            </p>
                            <figure class="figure text-center mb-0">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/detected-frontier-false.png" ); ?>" class="figure-img img-fluid rounded img-vid-media" alt="..." style="max-width:50%">
                                <figcaption class="figure-caption"><p>False frontier points (Points inside the green rectangle)<p></figcaption>
                            </figure>
                            <p>
                            My target selection scheme differs from the centroid-based approach commonly used in literature. By modelling the frontier edges as polylines, the false frontier points can be effectively removed, and a line which best represents the actual boundary between the known region and the unknown region can be extracted. After the extraction process, the midpoint on each extracted line segment is computed. 
                            </p>
                            <figure class="figure text-center mb-0">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/centroid-line-4.png" ); ?>" class="figure-img img-fluid rounded img-vid-media" alt="..." style="max-width:50%">
                                <figcaption class="figure-caption"><p>Modelling of the frontier edges (Green line)<p></figcaption>
                            </figure>
                            <p class="mb-5">
                            The midpoints are then evaluated according to a cost function.The midpoint with the lowest cost is assigned to the robot for exploration. The cost function considers the size of the extracted frontier edge and its distance from the robot. 
                            </p>
                            
                            <h2 id="scrollspyFrontierNavigate" class="scroll-heading">Navigating to Target</h2>
                            <p>
                            The midpoint with the lowest cost is sent to the Nav2 behaviour tree that implements a navigation behaviour from a starting point to a goal point. The robot cancels the current navigation task if it has not made enough progress toward the target, and that location is added to a list containing inaccessible targets. The following video demonstrates the robot replanning’s behaviour once a target is perceived as unreachable. 
                            </p>
                            <div class="ratio ratio-16x9 mx-auto d-block mb-3 img-vid-media" style="max-width:70%">
                                <video preload="metadata" controls poster="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/inacessible-target1.png" ); ?>"> 
                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/frontier-md.mp4" ); ?>" type="video/mp4">
                                </video>
                            </div>
                            <p class="mb-5">The video shows the robot encounters an inaccessible target that lies outside the occupancy grid map, drops the current mission and recomputes a new exploration target. </p>

                            <h2 id="scrollspyFrontierCode" class="scroll-heading">Code Review</h2>
                            <h3 class="py-1">Detect Frontiers</h3>
                            <p>
                            The structure <code style="font-size: 110%;background:#f1f3f4">FrontierSegment</code> stores the size, cost, centroid, midpoint, endpoints and a list of frontier points associated with the segment.
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
                                        <span style="color:#75715e">// Create a vector to store frontiers</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">std::vector&ltFrontierSegment&gt frontier_segments;</span>
                                    </span>
                                    <span style="display:flex;height:21px;">
                                        <span></span>
                                    </span>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Create a frontier detector object</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">auto detector = std::make_shared&ltWavefrontFrontierDetector&gt();</span>
                                    </span>
                                    <span style="display:flex;height:21px;">
                                        <span></span>
                                    </span>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Search for frontiers</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">detector->searchFrontierSegments(frontier_segments,pose,costmap);</span>
                                    </span>
                                </code>
                                </pre>
                                </div>
                            </div>

                            <h3 class="py-1">Model Frontiers</h3>
                            <p>
                            Once all frontier segments are detected, remove misclassified frontier points by modelling each frontier segment as a polyline.
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
                                        <span style="color:#75715e">// Create a frontier modeller object</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">auto modeller = std::make_shared&ltFrontierModeller&gt();</span>
                                    </span>
                                    <span style="display:flex;height:21px;">
                                        <span></span>
                                    </span>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Pass the detected frontier segments to the modeller</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">modeller->extract(frontier_segments);</span>
                                    </span>
                                </code>
                                </pre>
                                </div>
                            </div>

                            <h3 class="py-1">Select Exploration Target</h3>
                            <p>
                                Once the modelling is done, determine the next exploration target according to a cost function. The midpoint of the frontier segments with the lowest cost is selected as the target.
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
                                        <span style="color:#75715e">// Create a ROS message to store the target point</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">geometry_msgs::msg::Point target;</span>
                                    </span>
                                    <span style="display:flex;height:21px;">
                                        <span></span>
                                    </span>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Select exploration target</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">bool result = selectExploreTarget(frontier_segments,target)</span>
                                    </span>
                                </code>
                                </pre>
                                </div>
                            </div>

                            <h3 class="py-1">Send Target to the Navigation Stack</h3>
                            <p>
                                If a valid exploration target exist, initialize a navigation task.
                            </p>
                            <div class="ui-tabs pb-5">
                                <ul class="ui-tabs-nav">
                                    <li class="ui-tabs-tab ui-tabs-active" tabindex="0">
                                        <a tabindex="-1">C++</a>
                                    </li>
                                </ul>
                            <div class="highlight">
                                <pre class="m-0 p-3" tabindex="0" style="color:#272822;background-color:#fafafa;">
                                <code>
                                    <span style="display:flex;">
                                        <span style="color:#75715e">// Send navigation goal</span>
                                    </span>
                                    <span style="display:flex">
                                        <span style="color:#111">sendNavigationGoal(target);</span>
                                    </span>
                                </code>
                                </pre>
                                </div>
                            </div>


                            <h2 id="scrollspyFrontierResult" class="scroll-heading">Result</h2>
                            <h3 class="py-1">Test Environments</h3>
                            <p>
                                Three real environments with different specificities were considered:
                            </p>
                            <div class="row row-cols-3 row-cols-lg-4 justify-content-center" style="max-width:100%">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/test-env-1.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-center fw-bold">LOBBY</figcaption>
                                        <figcaption class="figure-caption text-center">210m<sup>2</sup></figcaption>
                                        <figcaption class="figure-caption text-center">Medium Density</figcaption>
                                        <figcaption class="figure-caption text-center">Open</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/test-env-2-2.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-center fw-bold">STUDY AREA</figcaption>
                                        <figcaption class="figure-caption text-center">194m<sup>2</sup></figcaption>
                                        <figcaption class="figure-caption text-center">High Density</figcaption>
                                        <figcaption class="figure-caption text-center">Open</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/test-env-3.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-center fw-bold">SMALL HOUSE</figcaption>
                                        <figcaption class="figure-caption text-center">80m<sup>2</sup></figcaption>
                                        <figcaption class="figure-caption text-center">Low Density</figcaption>
                                        <figcaption class="figure-caption text-center">Mutiple Rooms</figcaption>
                                    </figure>
                                </div>
                            </div>  
                            <h3>Performance in real environments</h3>
                            <p>
                            I tested both my exploration strategy and a baseline strategy in three indoor environments. The results are recorded in the table below. The efficiency metric was defined as the total floor area over the total exploration time.
                            </p>
                            <div class="row row-cols-1 row-cols-lg-1 justify-content-center pb-3">
                                <div class="col-lg-9">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover border-secondary">
                                        <thead>
                                            <tr>
                                            <th scope="col"></th>
                                            <th scope="col" colspan="2" class="fw-bold fst-italic">Lobby</th>
                                            <th scope="col" colspan="2" class="fw-bold fst-italic">Study Area</th>
                                            <th scope="col" colspan="2" class="fw-bold fst-italic">Apartment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">Target Selection Strategy</th>
                                            <td>Centroid</td>
                                            <td>My Method</td>
                                            <td>Centroid</td>
                                            <td>My Method</td>
                                            <td>Centroid</td>
                                            <td>My Method</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Exploration Time(s)</th>
                                            <td>10min38s</td>
                                            <td>9min07s</td>
                                            <td>11min46s</td>
                                            <td>10min13s</td>
                                            <td>3min46s</td>
                                            <td>3min42s</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Efficiency(m<sup>2</sup>/s)</th>
                                            <td>0.33</td>
                                            <td class="table-info">0.384</td>
                                            <td>0.275</td>
                                            <td class="table-info">0.316</td>
                                            <td>0.354</td>
                                            <td class="table-info">0.36</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>                          
                            </div>
                            <h3 id="scrollspyFrontierResultDemo" class="py-1 mt-3">Demo</h3>
                            <p>Cyrus is exploring a large study room with many obstacles. Notices the stop-and-go behaviour, which is very characteristic of frontier-based exploration algorithms(detect&#x2192select&#x2192navigate). Also, Cyrus has explored the environment twice to ensure the completeness of the map. The exploration time can be further improved if a less rigid termination criterion is used. However, there’s a tradeoff between exploration efficiency and map completeness. </p>
                            <div class="ratio ratio-16x9 mx-auto d-block mb-3 img-vid-media" style="max-width:70%">
                                <video preload="metadata" controls poster="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/roomba-kitchen1.png" ); ?>"> 
                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/full-x4-nowater-compress.mp4" ); ?>" type="video/mp4">
                                </video>
                            </div>



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