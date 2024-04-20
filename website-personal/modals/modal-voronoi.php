<!-- Read -->
<div class="modal fade" id="VoronoiRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="VoronoiReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="VoronoiReadLabel">Floorplan Decluttering</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">An graph-based approach to extract a clean environment map as a preliminary step to robot coverage planning</h4>
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
<div class="modal fade" id="VoronoiDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="VoronoiDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="VoronoiDemoLabel">Floorplan Decluttering Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <ul style="color:#fff">
                    <li>Operating System: Linux 20.04</li>
                    <li>Hardware: Jetson Orin </li>
                </ul>
             </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <h4>Removal of Small Obstacles</h4> 
                        <p> (left) original occupancy grid map, (right) processed occupancy grid map</p>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 mb-4">
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/before.png" ); ?>" class="img-fluid" alt="" width = "100%" height="auto">
                        </div>
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/after.png" ); ?>" class="img-fluid" alt="" width = "100%" height="auto">
                        </div>
                    </div>
                    <div class="row">
                        <h4>Merging of Obstacles</h4> 
                        <p></p>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 mb-4">
                        <div class="col">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/circled.png" ); ?>" class="img-fluid" alt="" width = "100%" height="auto">
                        </div>
                        <div class="col"> </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>