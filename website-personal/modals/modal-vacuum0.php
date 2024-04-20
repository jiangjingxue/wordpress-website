<!-- Read -->
<div class="modal fade" id="VacuumZeroRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="VacuumZeroReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="VacuumZeroReadLabel">3D-Printed Home Robot</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">A failed robot that taught me so many pivotal lessons</h4>
             </div>
            <div class="modal-body">
                Demo is ready 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Demo -->
<div class="modal fade" id="VacuumZeroDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="VacuumZeroDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="VacuumZeroDemoLabel">Home Robot Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <ul style="color:#fff">
                    <li>Middleware: Embedded ROS1</li>
                    <li>Hardware: STM32F4 Microcontroller</li>
                </ul>
             </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <h4> Final Design</h4>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-3 mb-4">
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/robot_front.jpg" ); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/robot_back.jpg" ); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/robot_internal.jpg" ); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row mt-3 mb-2">
                        <h4> Linear and angular velocity control </h4>
                        <p> Two low-level PID controllers with anti-windup mechanism, disturbance rejection and noise filtering are used to regulate the two driven wheels. The on-board linux computer runs a script that transimit control commands decoded from keyboard to the microcontroller.</p>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 mb-2 justify-content-center">
                        <div class="col-lg-3">
                            <video height="300vh" controls preload="none"> 
                                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/robotwood.mp4" ); ?>" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-lg-3">
                            <video height="300vh" controls preload="none"> 
                                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/rotate.mp4" ); ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="row mt-3 mb-2">
                        <h4> Speech Recognition Performance in the Presence of Background Noise </h4>
                        <p> Automatic speech recognition running in real-time on the robot </p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6"> 
                            <video height="300vh" controls preload="none"> 
                                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/rvia.mp4" ); ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <!-- <div class="ratio ratio-21x9">
                    <iframe src="https://www.youtube.com/embed/M9wvtSgJ1YM?si=eZjNBV9sgMmygoSY" title="YouTube video 2"></iframe>           
                </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>