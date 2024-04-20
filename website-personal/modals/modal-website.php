<!-- Read -->
<div class="modal fade" id="WebRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="WebReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="WebReadLabel">Website Development</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <h4 class="modal-title-description" style="margin-top:0.7em">A custom website developed using HTML, CSS, PHP and Bootstrap</h4>
             </div>
            <div class="modal-body">
                <p>Here is how the website organizes its file structure, it adheres to the design standards set out from the Wordpress Theme Developer Handbook, therefore can be conveniently converted to a custom wordpress theme.</p>
                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/web_structure.png" ); ?>" alt="" height="600vh">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Demo -->
<div class="modal fade" id="WebDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="WebDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="WebDemoLabel">Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             </div>
            <div class="modal-body">
                You've already seen the demo :-) 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>