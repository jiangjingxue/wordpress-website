<!-- Read -->
<div class="modal fade" id="frontierRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="FrontierReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="frontierReadLabel">Mobile Robot Autonomous Exploration</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">An improved frontier exploration algorithm to allow the robot to explore the environment faster</h4>
             </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/roomba-view-169-low.jpg" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="row mt-3">
                    <p class="lead">
                    If you are familiar with robots, you may know that any non-trivial robot needs a map of the environment to understand where it is and how to get to places. The first thing you must do when you get your new robot vacuum is to initiate a mapping run so the robot can learn and map your house. The mapping run can take up to several hours, depending on the size and layout of your home. I wanted to design a robot vacuum that could clean people’s homes right out of the box without performing a lengthy mapping run. The robot must systematically clean people’s houses while exploring the space simultaneously. The autonomous exploration algorithm is a core algorithm that enables this functionality. Since ROS2 does not offer an exploration package, I had to write one from scratch. I implemented a <a href="https://github.com/jiangjingxue">frontier-based exploration algorithm in C++</a> based on a research paper. I integrated the exploration algorithm with the ROS2 framework and tested it on a physical mobile robot. I also improved the exploration efficiency of the algorithm by employing a new target point selection strategy. Finally, I provide a quantitative performance comparison between my method and the method used in previous research work. 
                    </p>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Design</h1>
                        <p> 
                        Frontier-based exploration is the process of continuously detecting frontiers, determining an exploration target to move to, and moving towards it. The process is illustrated in the diagram below.   
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/exploration-process.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Process of frontier-based autonomous exploration</figcaption>
                                    </figure>
                                </div>
                            </div>  
                        </div>
                        <h1 class="display-1 fs-4">Frontier Detection</h1>
                        <p>
                        For frontier detection, I implemented a graph-based frontier detector called Wavefront Frontier Detector based on this <a href="https://journals.sagepub.com/doi/abs/10.1177/0278364913494911">research paper</a>. The input to the frontier detector is the map data created from SLAM. I used the SLAM Toolbox library available in ROS2 to obtain the environment map. The output of the frontier detector is a sequence of frontiers. Frontiers mark regions that separate the free space from the unknown space. Moving to these frontier cells allows a robot to gain the most new information about the environment. 
                        </p>
                        <p>
                        This Wavefront Frontier detector uses an outer BFS and an inner BFS. The outer BFS keeps scanning points in open space that have not been scanned yet. Once a frontier cell is found, an inner BFS is performed to extract all the neighbouring frontier cells. At the end of the extraction process, the extracted frontier cells are saved in a data structure. The scanning policy in the outer BFS ensures that only known areas are examined. 
                        </p>
                        <p>
                        I decided to use this detector because it does not process the entire map to identify frontiers. It is much faster than those computer vision-based detectors that rely on the whole map data to identify frontiers. Even though this detector may deteriorate to searching the entire map towards the end of the exploration, it still meets my needs since I have no intention of using the robot to explore a large environment like a factory. 
                        </p>
                        <h1 class="display-1 fs-4">Selection of Exploration Target</h1>
                        <p>
                        Once frontiers are detected, the robot must select an exploration target to move to. A common approach found in literature is to compute the centroid of all detected frontiers and pick the best centroid as the exploration target following some metric. The robot then navigates to this selected centroid. I tested this target selection method on my Roomba and found two issues associated with this approach.  
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-2 row-cols-lg-4 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/unreachable-target.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Issue 1: Unreachable exploration target causing strange robot behaviour</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/centroid-issue.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Issue 2: Scattered frontier cells(red) drawing the centorid(blue) towards already explored region</figcaption>
                                    </figure>
                                </div>
                            </div>                 
                        </div>
                        <p>
                        The first issue of this centroid-based approach is that the computed centroid may lie outside the accessible area on the map due to localization error and become unreachable for the robot to move to. When I ran the exploration with this selection strategy, the robot would sometimes smash itself straight to the wall because the selected centroid was unreachable in the real world. The second issue is that the scattered frontier cells caused by low certainty sensor readings can draw the centroid toward an already-explored region. This violates the fundamental principle of frontier exploration because the selected exploration target would then not provide the most new information about the environment.
                        </p>
                        <p>
                        To address these two shortcomings, I modelled every detected frontier as a line segment. Modelling frontiers as line segments significantly mitigated the negative effect of scattered frontier cells, as shown in the image below. 
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/myroom.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Modelling detected frontiers(red) as line segments(green).</figcaption>
                                    </figure>
                                </div>
                            </div>     
                        </div>
                        <p>
                        The midpoint on each line segment is then calculated and evaluated according to a cost function. The cost function assesses the quality of the exploration target based on three criteria: distance, size and orientation. The midpoint with the lowest cost is chosen to be the next exploration target.
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/exploration-process-mine.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">My modification</figcaption>
                                    </figure>
                                </div>
                            </div>  
                        </div>
                        <!-- <h1 class="display-1 fs-4">Cost Function</h1> -->
                        <h1 class="display-1 fs-4">State Machine Design</h1>
                        <p>
                        I wrote a <a href="https://github.com/jiangjingxue">finite-state machine in C++</a> to control the flow and logic of my robot’s exploration behaviour. I used the object-oriented design pattern to implement the state machine rather than simple if-else statements because I plan to expand the state machine in the future. 
                        </p>
                        <p>
                        On power-up, the robot enters the Map Analyzing State, where it processes the incoming occupancy grid map, detects the frontiers on the map, modelling the frontiers as line segments and then determines an exploration target. If frontiers are found, and the exploration target is neither an obstacle nor a blacklisted target, the robot sends the exploration target to Nav2 Stack and transitions to the Navigating State. In the case where the selected exploration target is an occupied space, a BFS search is deployed to determine the nearest unoccupied location and this location is then sent to the navigation stack.
                        </p>
                        <p>
                        In the Navigating State, the robot engages the path planner and path-tracking controller to drive to the target point and continuously monitors the navigation status. If the navigation fails, the robot can have two options depending on what causes the navigation failures. If the robot does not make meaningful progress toward the target, the current exploration target is added to a blacklist, and the robot transitions back to the Analyzing State. If the planner server or the controller server fails, the robot enters the IDLE state, and the exploration process terminates.
                        </p>
                        <p>
                        The IDLE State performs cleanup for the navigation stack by cancelling all the asynchronous goals.  
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-3 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/sm-frontier.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">The state machine that controls the robot's exploration behaviour</figcaption>
                                    </figure>
                                </div>
                            </div>  
                        </div>
                        <h1 class="display-1 fs-4">ROS2 Integration</h1>
                        <p>
                        I wrote an <a href="https://github.com/jiangjingxue">action server and action client in C++</a> to initialize the finite state machine. The finite state machine then implements the autonomous exploration behaviour of the robot. The action client sends a goal request to the action server, which contains a max exploration time set by the user. The action server then uses this information to terminate exploration and destroy the state machine when a specified time limit is reached. The action server provides feedback and results to the action client. The result message is a boolean flag that returns success or failure. Feedback messages regarding the elapsed time and the number of exploration targets reached are periodically sent from an action server to an action client with updates about a goal.
                        </p>
                        <p>
                        Below is a list of the publishers, subscribers, and clients that must be initialized and passed to the state machine.
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-4 justify-content-center mb-3">
                                <div class="col">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">Publishers</li>
                                        <li class="list-group-item">Marker</li>
                                        <li class="list-group-item">MarkerArray</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">Subscribers</li>
                                        <li class="list-group-item">HazardDetection</li>
                                        <li class="list-group-item">OccupancyGrid</li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">Action Clients</li>
                                        <li class="list-group-item">NavigateToPoseAction</li>
                                        <li class="list-group-item">UndockAction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>
                        I used the SLAM toolbox with the online asynchronous mode to build the map and allow the robot to localize itself. The input to the SLAM system is the scan message from the RPLidar A1 and a transform from the odometry frame to the base footprint. The SLAM system then outputs an occupancy grid map at 10Hz.
                        </p>
                        <p>
                        I used the default behaviour tree in Nav2 for navigation. The Navigate to Pose with Replanning and Recovery BT uses the grid-based planner and the follow-path controller. This BT replans the global path periodically at 1Hz and will attempt to retry the navigation task 6 times before returning failure. However, during testing, I found that the default planner would plan a global path over an unknown region, the robot would spend a long time on recovery behaviour, and replanning failures happened quite often, so I added additional logic to the state machine to handle the situation where the replanning fails. I settled with the default planner and controller since I didn’t have the time to fiddle with the plugins and XML files. Nonetheless, the exploration performance of the robot turned out great. 
                        </p>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Result</h1>
                        <h1 class="display-1 fs-4"> Algorithm test environments</h1>
                        <p>
                        In order to test the frontier-based autonomous exploration method, three real environments with different specificities were considered:
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-3 row-cols-lg-4 justify-content-center">
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
                        </div>
                        <h1 class="display-1 fs-4">Result in real environments</h1>
                        <p>
                        The frontier exploration algorithm with different exploration selection strategies is tested on three environments presented above. The measured exploration time and the completeness of the map were used as evaluation criteria. The efficiency metric was defined as the total floor area over the exploration time. I did three exploration runs for each target selection strategy, and their average is used to calculate the exploration time. 
                        </p>
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-lg-1 justify-content-center">
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
                        </div>
                        <p>
                        The following video shows the creation of a map for the study area through autonomous exploration. 
                        </p>
                        <p>
                        I used purple sphere markers to represent the selected exploration target. Smaller red spheres are the potential exploration targets. Red dots are the detected frontiers, and the green lines are the modelled line segments. 
                        </p>
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-lg-1 justify-content-center mb-3">
                                <div class="col-lg-7">
                                    <div class="ratio ratio-16x9">
                                        <video controls preload="none"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/explore-rviz.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>
                        Here is the map obtained through autonomous exploration compared to the map built by manually controlling the robot. 
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-3 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/map-manual.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Map built via manual control</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/map-mymethod-2.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Map built from frontier exploration (my method second run)</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/map-mymethod-1.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Map built from frontier exploration (my method first run)</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <p>
                        Below is a video of the robot exploring a 194-meter square study area. The target selection strategy used in this exploration run is based on frontier modelling.
                        </p>
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-lg-1 justify-content-center mb-3">
                                <div class="col-lg-7">
                                    <div class="ratio ratio-16x9">
                                        <video controls preload="none"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/frontier-explore-demo.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>A full length 10-minute exploration run in the study area is available: </p>  
                        
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-lg-1 justify-content-center">
                                <div class="col-lg-7">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/7kyXBEFMjIw?si=o7JOG8SrIjX_1mfg" loading="lazy" title="YouTube video" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                                            

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Demo -->
<div class="modal fade" id="frontierDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="FrontierDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="frontierDemoLabel">Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <h1 class="display-1 fs-2 fw-bold">Autonomous Exploration Demonstration</h1>
                        <p class="lead">The improved frontier exploration algorithm was tested in a study area. The robot explored the 194 m<sup>2</sup> environment in 10 minutes and 13 seconds</p> 
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-lg-1 mb-3">
                                <div class="col">
                                    <div class="ratio ratio-16x9">
                                        <video controls preload="none"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/frontier-explore-demo.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="lead">Full length exploration video is available on youtube</p>
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-lg-1 justify-content-center">
                                <div class="col">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/7kyXBEFMjIw?si=o7JOG8SrIjX_1mfg" loading="lazy" title="YouTube video" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    </div>
                    <div class="row mt-3">
                        <h1 class="display-1 fs-2 fw-bold">Frontier Modelling Demonstration</h1>
                        <p class="lead">The red markers are the detected frontiers, green solid lines are the modelled line segment that best represent a cluster of frontier points. This is the improvement I made to previous centroid-based frontier exploration method.</p>  
                        <div class="container-fluid">
                            <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <div class="ratio ratio-16x9">
                                        <video controls preload="none"> 
                                        <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/frontier_rviz.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <h1 class="display-1 fs-2 fw-bold">Generated Map from Autonomous Exploration</h1> 
                        <p class="lead"> 
                        Here is the map obtained through autonomous exploration compared to the map built manually. 
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/map-manual.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Map built via manual control</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/map-mymethod-2.png" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Map built from autonomous exploration (my method)</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

