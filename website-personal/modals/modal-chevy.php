<!-- Read -->
<div class="modal fade" id="ChevyRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ChevyReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="ChevyReadLabel">Self-Driving Chevrolet Bolt EV</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">Design Team competing in the SAE AutoDrive Challenge</h4>
             </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <p class="lead"> 
                        After an eventful summer, it was bittersweet to return to school for the start of the 2022-2023 school year. 
                        With the intention of gaining relevant technical experience in the field of robotics and autonomous vehicles,
                         I joined Queen’s AutoDrive Team as the control system lead to compete in the AutoDrive Challenge Series hosted by General Motors and SAE International,  
                         where participating university teams will develop and demonstrate an autonomous passenger vehicle that can navigate urban driving courses.
                         During my time with the team, I was the sole developer of the Speed controller and the Stanley Steering Controller.    
                        </p>

                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Control Architecture</h1>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/controls/block-3.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Control Architecture Block Diagram</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <p> 
                        The above figure describes the high-level architecture of our controller. The inputs to the controller are the desired path (waypoints), the current pose of the vehicle (position and heading) and the current velocity of the vehicle. The controller then outputs a front wheel steering angle and a torque. An integral controller is added to the feedforward term that directly maps the target acceleration to torque to eliminate steady-state error and constant disturbance. 
                        </p>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Steering Control</h1>
                        <p class="lead">
                        A steering controller is responsible for computing the steering angle that adjusts a vehicle’s current pose to match a reference pose. In the following subsections, I explain my motivation for using the Stanley Steering Control. I also discuss how I computed each term in the Dynamic Stanley Steering Control Law, namely the cross-track error, the heading error, the active damping term and the overshoot compensation term.
                        </p>
                        <h1 class="display-1 fs-4">Motivation for using the Stanley Steering Controller</h1>
                        <p>
                        I decided to implement a Stanley Steering Controller because of three reasons. First, the  Stanley Steering Controller uses a non-linear control law that is proven to be globally stable under the assumption that the vehicle has negligible inertia. This assumption is effective in low-speed driving. In theory, the Stanley Steering Controller is going to be very effective in low-speed maneuvers. Since the Intersection Challenge does not require our autonomous vehicle to engage in high-speed, aggressive maneuvers, Stanley Controller is a safe choice. Second, the Stanley Steering Controller consumes a negligible amount of computational resources. Finally, the tracking performance of the Stanley Steering Controller is verified repeatedly in real-world autonomous off-road driving and achieved consistently good performance. The top speed tested on Stanley Controller is 42mph on a dirt road and 71 mph on pavement. 
                        </p>
                        <h1 class="display-1 fs-4">Control Law</h1>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-3 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/controls/kinematic-model.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Kinematic vehicle model used to derive the steering control law</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <h1 class="display-1 fs-4">Implementation of the Stanley Steering Controller</h1>
                        <h1 class="display-1 fs-4">Parameter Tuning</h1>
                        <p>
                    
                        </p>
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
<div class="modal fade" id="ChevyDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ChevyDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="ChevyDemoLabel">Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <ul style="color:#fff">
                    <li>Operating System: Linux 22.04</li>
                    <li>Middleware: ROS2</li>
                    <li>Hardware: Intel Rack Server, NovAtel GNSS unit</li>
                </ul>
             </div>
            <div class="modal-body"> 
                <div class="container"> 
                    <div class="row">
                        <h4>Path-following demo</h4> 
                        <p></p>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-1 mb-4">
                        <div class="col-lg-8">
                            <div class="ratio ratio-16x9">
                                <video controls preload="none"> 
                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/path_follow.mp4" ); ?>" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="col-lg-2">
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

