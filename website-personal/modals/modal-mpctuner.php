<!-- Read -->
<div class="modal fade" id="MPCGARead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MPCGAReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="MPCGAReadLabel">Automatic Tuning of Model Predictive Control based on Genetic Algorithm</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">A short description</h4>
             </div>
            <div class="modal-body">
                Demo is available
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Demo -->
<div class="modal fade" id="MPCGADemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MPCGADemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="MPCGArDemoLabel">Automated Tuning Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <ul style="color:#fff">
                    <li>Operating System: MacOS</li>
                    <li>Software: Matlab</li>
                    <li>Processor: 2 GHz Quad-Core Intel Core i5</li>
                </ul>
             </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <h4>Auto-Tuning</h4>
                        <p>Prediction horizon and weights in the penalty matrices are being tuned automatically by the evolutionary algorithm.</p>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-1 mb-4">
                        <div class="col">
                            <video height="240vh" controls preload="none"> 
                                <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/autotuner.mp4" ); ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="row"></div>
                    <div class="row"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>