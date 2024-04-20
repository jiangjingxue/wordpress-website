<!-- Read -->
<div class="modal fade" id="VacuumOneRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="VacuumOneReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="VacuumOneReadLabel">Robot Vacuum</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">A robot vacuum designed to systematically clean the floor</h4>
             </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <p>If you are familiar with robots, you'll know that any non-trivial robot needs a map of the environment to understand where it is and how to get to places, the robot must build a representation of its surroundings before any navigation operations can happen. </p> 
                        <p>When you buy a new high-end vacuum robot, the very first thing you need to do is an <strong>initial mapping run</strong> that allows the robot to learn the layout of your home. During the mapping run, the robot drives all over your home without cleaning the floor. <strong>The mapping run can take several hours before a full map is ready.</strong> Sometimes it may take up to 9 hours if you have a large house or if your house has a complex layout. Imagine how great it would be if you can avoid the lengthy initial mapping process and have the robot start cleaning right out of the box.</p>
                        <p>To make this happen, I propose a <strong>coverage method that allows the robot to systematically clean the space while building a map of the environment.</strong> At the end of the coverage algorithm, the robot should have cleaned a significant portion of the floor and created a complete map of the home. </p>
                        <p>In this project, I focus on designing the coverage algorithm which is a core technology in commericial cleaning robots. In addition, I have also introduced several subtle features that many commercial robot vacuums lack that I think are going to make the cleaning robot’s behaviour more predictable to human users.</p>
                        <p>One such feature is <strong>smart charging.</strong> This feature was inspired by my friend’s comments on her Roomba, “The Roomba always starts vacuuming for no reason”.  So what happened in my friend’s case was that the Roomba returned to the docking station to recharge when the cleaning session was not finished, and then it resumed its interrupted cleaning session once the battery was fully charged, but the recharging process took too long which gave my friend a false impression that the cleaning session was completed. This is why reducing the recharging time is extremely important to improve user experiences. The smart charging feature allows the robot vacuum to <strong>charge partially</strong> and <strong>resume operation as soon as the battery level is sufficient to complete the remaining cleaning jobs.</strong> </p>
                        <p>Imagine you are cleaning your home and a phone call comes in, you go to another room to pick up the call, and once you handle the call, you resume whatever you were doing before the phone call. A cleaning robot should be able to do that as well. The <strong>memory feature</strong> does exactly this. When a cleaning session is interrupted by unexpected events, the robot goes on to handle the event, once the event is successfully handled, the cleaning robot will <strong>recall memories to return to the last spot it cleaned before the interruption.</strong> </p>
                    </div>
                    <div class="row"> 
                        <h3>Decision-Making Architecture</h3>
                        <div class="col-sm mt-3 mb-2">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/st_light.jpg" ); ?>" class="img-fluid rounded mx-auto d-block" alt="Responsive image" width="70%" height="auto">
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
<div class="modal fade" id="VacuumOneDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="VacuumOneDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="VacuumOneDemoLabel">Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <ul style="color:#fff">
                    <li>Operating System: Linux 20.04</li>
                    <li>Middleware: ROS2</li>
                    <li>Hardware: Jetson Orin & Raspberry Pi 4</li>
                </ul>
             </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <h4>State Transition Demostration</h4> 
                        <p> The robot enters the idle state after power on, then transition to the docked state and start checking if there is sufficient battery to support the current cleaning task. After making sure there is sufficient battery, the robot undocks from the station to enter the map analyzing state in which frontiers are computed. After deliberating an appropriate initial position in the room to begin the cleaning session, the robot will transition to the navigating state, which is not shown in ths video as a robot is sitting on my desk.</p>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-1 mb-4">
                        <div class="col-lg-8">
                            <div class="ratio ratio-16x9">
                                <video controls preload="auto"> 
                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/undocking.mp4" ); ?>" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                    <div class="row">
                        <h4>Cell Cleaning Demostration</h4> 
                        <p> In development, coming soon !!!</p>
                        <p> However, the autonomous exploration algorithm is completed and a demo is available, feel free to check it out. The exploration algorithm will be integrated into the area coverage algorithm to allow the robot clean the space without a-prior map.</p>
                    </div>
                    <div class="row">
                        <h4>Coverage Efficiency Demostration</h4> 
                        <p> In development, coming soon !!! </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>