<!-- Read -->
<div class="modal fade" id="MPCRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MPCReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="MPCReadLabel">Model Predictive Controller Design For Mobile Robot Trajectory Tracking</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">A short description of the MPC project</h4>
             </div>
            <div class="modal-body">
                <p>Demo is available</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Demo -->
<div class="modal fade" id="MPCDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MPCDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="MPCDemoLabel">Trajectory Tracking MPC Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <ul style="color:#fff">
                    <li>Operating System: MacOS</li>
                    <li>Language: Matlab</li>
                    <li>Processor: 2 GHz Quad-Core Intel Core i5</li>
                </ul>
             </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row mb-3">
                        <h4>Controller Tracking Performance with Bell-shaped Trajectory</h4> 
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 mb-4">
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/perfectbell.gif" ); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/bell_crosstrack.png" ); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <h4>Controller Tracking Performance with Line Trajectory</h4> 
                    </div> 
                    <div class="row row-cols-1 row-cols-lg-2 mb-4">
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/perfectline.gif" ); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/line_crosstrack.png" ); ?>" class="img-fluid" alt="">
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