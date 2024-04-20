<div class="container-fluid">
    <div class="row page-padding px-5">
        <div class="col-md-3 ps-3">
                <div class="sticky-top sticky-offset" style="z-index: auto">
                <div class="d-inline-flex flex-column">
                <a href="<?php echo site_url('/projects'); ?>" class="btn btn-info rounded-pill btn-sm my-3">Go back to Projects</a>
                <nav class="nav nav-pills bg-light flex-column overflow-auto" style="border:1.5px solid black;border-radius:10px">
                    <a class="nav-link link-dark table-of-content py-1" style="background-color: #d3d3d3">Table of Content</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspySemanticIntro">Introduction</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspySemanticDataset">Dataset Overview</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspySemanticPre">Preprocessing</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspySemanticTrain">Model Training</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspySemanticInfer">Real-time Inference</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspySemanticResult">Result</a>
                </nav>
                </div>
                </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-9">
                    <div class="article-padding my-3">
                        <article class="markdown" data-bs-target="#navbar-toc" data-bs-offset="0" tabindex="0">
                            <h1 class="project-big-title">Semantic Segmentation</h1>
                            <p class="lead py-3">
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>

                            <h2 id="scrollspySemanticIntro" class="scroll-heading">Introduction</h2>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <h2 id="scrollspySemanticDataset" class="scroll-heading">Dataset Overview</h2>
                            <h3 class="py-1">Features</h3>
                            <ul >
                                <li> Indoor scene images of typical North American homes</li>
                                <li> Pixel-level semantic segmentation</li>
                                <li> 24 classes </li>
                                <li> 12,000 raw images</li> 
                                <li> 214 annotated images with fine annotations</li> 
                                <li> Well-illuminated & Poor lighting conditions</li>
                                <li> Manually selected frames
                                    <ul>
                                        <li>Decent number of dynamic objects </li> 
                                        <li>Decent number of transparent objects. i.e windows </li> 
                                        <li>Varying layout, floor area and degree of clutreredness</li>
                                    </ul>
                                </li>
                            </ul>
                            <h3 class="py-1">Labelling Policy</h3>
                            <p > Labeled foreground objects must never have holes. If there is some background visible through some foreground object, it is considered to be part of the foreground. Regions that are highly mixed with two or more classes are labeled with the foreground class. Examples: coffe table in front of a floor-to-ceiling window(everything table), door with transparent opening (everything door).</p>
                            
                            <h3 class="py-1">Class List</h3>
                                <p>There are 24 classes in the dataset. Classes are grouped into 7 categories.</p>
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">Group</th>
                                        <th scope="col">Classes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">surface</th>
                                        <td>drivable surface, carpet</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">human</th>
                                        <td>person</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">pet</th>
                                        <td >cat, dog</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">structure</th>
                                        <td >wall, door, ceiling, window, toilet, kitchen counter, cabinet</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">furniture</th>
                                        <td >chair, table, couch, bed</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">appliance</th>
                                        <td >oven, fridge, dishwasher, trash can, charging cord</td>
                                        </tr>
                                        <th scope="row">other</th>
                                        <td > plant, box, background</td>
                                        </tr>
                                    </tbody>
                                </table>
                            <h3 class="py-1">Example</h3>
                            <p>
                                Example images in the custom dataset are shown below.
                            </p>
                            <div class="row mb-3 g-3">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/wallystudy_02_01351_leftImg8bit.png" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/unity_00_00421_leftImg8bit.png" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/foundry_00_00931_leftImg8bit.png" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                            </div>
                            <div class="row mb-3 g-3">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/wallystudy_02_01351_gtFine_color.png" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/unity_00_00421_gtFine_color.png" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/foundry_00_00931_gtFine_color.png" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                            </div>

                        
                            <h2 id="scrollspySemanticPre" class="scroll-heading">Preprocessing</h2>
                            <h3 class="py-1">Data Collection</h3>
                            <p>
                             The data collection process involves driving the Roomba around the house and recording 720p videos at 30fps.  
                             I deliberated scenarios that a home cleaning robot would typically encounter during a cleaning session and ensured these scenarios were captured in the video recordings. For example, people opening and closing the fridge, people walking in the kitchen area, the toilet seat with the lid up and lid down and robot cleaning under the couch.
                            </p>
                            <div class="row row-cols-3">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/frontenac_00_22171.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A opened fridge</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/studyroom_02_07591.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A person walking by the countertop</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/frontenac_00_16441.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A toilet seat with the lid up</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/wallystudy_02_07861.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A view from under a couch</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <h3 class="py-1">Data Annotation</h3>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <h3 class="py-1">Data Augmentation</h3>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <h3 class="py-1">Writing Custom Datasets, DataLoaders in PyTorch</h3>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>



                            <h2 id="scrollspySemanticTrain" class="scroll-heading">Model Training</h2>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>

                            <h2 id="scrollspySemanticInfer" class="scroll-heading">Real-time Inference</h2>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>

                            <h2 id="scrollspySemanticResult" class="scroll-heading">Result</h2>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>
                            <p>
                                "This tutorial simply shows how to configure and open the ZED, print its serial number and close the camera. This is the most basic tutorial and a good start for using the ZED SDK."   
                            </p>


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