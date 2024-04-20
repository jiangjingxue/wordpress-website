<!-- Read -->
<div class="modal fade" id="SemanticRead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="SemanticReadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h3 class="modal-title" id="SemanticReadLabel">Semantic Segmentation for Indoor Robot Navigation</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h4 class="modal-title-description" style="margin-top:0.5em"> Provide cleaning robot a richer understanding of your personal space</h4>
             </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/couch.png" ); ?>" class="img-fluid" alt="">
                    </div> 
                    <div class="row mt-3">
                        <p>
                        During the summer of 2023, I read over fifty research papers on coverage planning algorithms for cleaning robots. Almost all research focuses heavily on coverage efficiency, rather than the interpretability and predictability of the planned path. I remember vividly a particular coverage strategy called the Backtracking Spiral Algorithm, which uses spiral filling paths to ensure complete coverage. It may be efficient in covering the space, but I would probably be very disturbed if I ever witnessed a robot move in a spiral in the middle of the night in my living room. 
                        </p>
                        <p>
                        A mobile robot that operates in people’s intimate space cannot drive like an industrial robot in a factory, its behaviour has to be predictable and conforms to social norms. 
                        </p>
                        <p>
                        The lack of semantic information about the surroundings limits the robot’s ability to plan predictable paths. I knew semantic segmentation is pivotal for self-driving cars to plan collision-free paths in a dynamic urban street, so why not use it on indoor mobile robots that also demand a richer representation of their surroundings? 
                        </p>
                        <p>
                        Luckily, I had the opportunity to explore my idea in CISC452, an upper-year elective course on Neural Networks. The course has an open-ended project component that requires a team of 3-4 to investigate and modify an existing machine learning/deep learning model. I went beyond the course expectations by building a custom indoor dataset, implementing a state-of-the-art segmentation network with different backbone architectures and running inference in real-time on a robot vacuum. 
                        </p>

                    </div> 
                    <div class="row">
                        <h1 class="display-1 fs-2">Motivation for Custom Dataset</h1>
                        <p> 
                        After investigating many publicly available image segmentation datasets: Microsoft COCO, PASCAL-Context, Cityscapes, KITTI, CamVid, ADE20K, and SUN-RGBD, NYUv2. 
                        I’ve realized that none of the public semantic segmentation datasets are specifically designed for indoor robot navigation applications. 
                        For example, Microsoft COCO and PASCAL-Context datasets are multi-domain datasets containing many irrelevant objects for robotics applications, such objects as grass, sky, elephant, airplane etc. 
                        Moreover, Cityscapes, KITTI and CamVid are meant for use with self-driving cars to understand urban street scenes. 
                        ADE20K and SUN-RGBD contain indoor scenes, but their images are taken from eye level (50 inches above the floor) and do not accurately reflect the operating environment of a typical indoor mobile robot. 
                        <strong>Therefore, I decided to build a custom dataset has the following distinct characteristics:</strong> 
                        </p>
                        <ul class="list-group list-group-numbered align-items-start mb-3">
                            <li class="list-group-item border-0">The dataset contains only indoor scenes recorded in typical North American homes</li>
                            <li class="list-group-item border-0">Images in the dataset are captured from the perspective of a driving robot vacuum, at an height 4 inches above the ground plane</li>
                        </ul>
                        <!-- <div class="col-sm mt-2 mb-2">
                            <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/studyroom.png" ); ?>" class="img-fluid rounded mx-auto d-block" alt="Responsive image" width="70%" height="auto">
                        </div> -->
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Dataset Overview</h1>
                        <p class="lead"> The Orca Dataset focuses on semantic understanding of indoor home scenes. 
                            It comprises of stereo video sequences with the resolution of 1280 by 720 pixels 
                            recorded in homes of more than 20 houses and apartments across Canada while driving a specially equipped robot vacuum.
                            See <a href="#examples">Examples</a> for example frames.
                        </p>
                        <h1 class="display-1 fs-4">Features</h1>
                        <div class="container-fluid px-4">
                            <p> Polygon annotations</p>
                            <ul >
                                <li> Pixel-level semantic segmentation </li>
                            </ul>
                            <p> Complexity </p>
                            <ul>
                                <li> 24 classes </li>
                                <li> See <a href="#class-def">Class List</a> for a list of all classes and have a look at the applied <a href="#labeling-policy">Labeling Policy</a>.</li>
                            </ul>
                            <p> Diversity </p>
                            <ul >
                                <li> 20+ houses and apartments</li>
                                <li> Well-illuminated & Dark lighting conditions</li>
                                <li> Manually selected frames
                                    <ul>
                                        <li>Decent number of dynamic objects </li> 
                                        <li>Decent number of glasses and windows for advanced training </li> 
                                        <li>Varying layout, floor area and degree of clutreredness</li>
                                        <li>Blurry frames are removed</li>
                                    </ul>
                                </li>
                            </ul>
                            <p> Volume </p>
                            <ul > 
                                <li> 12,000 raw images </li> 
                                <li> 198 annotated images with fine annotations</li> 
                            </ul>
                        </div>
                        <h1 class="display-1 fs-4" id="labeling-policy">Labeling Policy</h1>
                        <p > Labeled foreground objects must never have holes, i.e. if there is some background visible through some foreground object, it is considered to be part of the foreground. Regions that are highly mixed with two or more classes are labeled with the foreground class. Examples: coffe table in front of a floor-to-ceiling window(everything table), door with transparent opening (everything door).</p>
                        <h1 class="display-1 fs-4" id="class-def">Class List</h1>
                        <div class="container-fluid">
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
                        </div>
                        <h1 class="display-1 fs-4" id="examples">Examples</h1>
                        <div class="container-fluid"> 
                            <div class="row row-cols-3 row-cols-lg-3 mb-4">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/unity_00_00421_leftImg8bit.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/foundry_00_00931_leftImg8bit.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/wallystudy_02_01351_leftImg8bit.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                            </div>     
                            <div class="row row-cols-3 row-cols-lg-3 mb-4">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/unity_00_00421_gtFine_color.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/foundry_00_00931_gtFine_color.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/wallystudy_02_01351_gtFine_color.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Data Collection</h1>
                        <p>I was responsible for data collection and the processing of raw video streams captured from the stereo camera. 
                            I visited the homes of my friends and peers to collect training data for the segmentation model. 
                            The data-gathering device is a Roomba equipped with a ZED2 stereo camera.
                        </p>
                        <div class="container-fluid"> 
                        <div class="row row-cols-1 row-cols-lg-3">
                                <div class="col">
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/data-gathering-roomba.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Data-gathering Roomba equipped with a sterero camera</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                </div>
                            </div>   
                        </div>
                        <p>
                             The data collection process involves driving the Roomba around the house and recording 720p videos at 30fps.  
                             I deliberated scenarios that a home cleaning robot would typically encounter during a cleaning session and ensured these scenarios were captured in the video recordings. For example, people opening and closing the fridge, people walking in the kitchen area, the toilet seat with the lid up and lid down and robot cleaning under the couch.
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-2 row-cols-lg-4">
                                <div class="col">
                                    <figure class="figure">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/frontenac_00_22171 copy.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                    <figcaption class="figure-caption text-start">A opened fridge</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/studyroom_02_07591 copy.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                    <figcaption class="figure-caption text-start">A person walking by the countertop</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/frontenac_00_16441 copy.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                    <figcaption class="figure-caption text-start">A toilet seat with the lid up</figcaption>
                                    </figure>
                                </div>
                                <div clas="col">
                                    <figure class="figure">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/wallystudy_02_07861 copy.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                    <figcaption class="figure-caption text-start">A view from under a couch</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>   
                        <p>
                            Since the ZED camera concatenates left and right images into a single frame and streams them in one video stream, 
                            I wrote a <a href="https://github.com/jiangjingxue">C++ script</a> to retrieve only the left images from the concatenated frame. The script produces a video stream in mp4 format that contains only frames from the left camera.
                            A single raw frame from a video stream is shown below,
                        </p>
                        <div class="container-fluid"> 
                        <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/concatenated_img.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A single frame from the video stream is a concatenated image</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <p>The next step is to convert the extracted video stream to images. But there is a problem: a 5-minute 30fps video yields 9000 images and features many similar scenes. It is preferable to sort out similar frames as there is usually no significant change from two consecutive frames at 30 frames per second. 
                            I could’ve used a dissimilarity measure (sum of absolute difference of all pixels) and a sharpness measure (variance of its laplacian) to eliminate similar frames. 
                            However, I opted for a filter-based method to speed up the development time. I used a filter to extract a single frame every 30 frames.  
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-1 mb-4">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/dataflow-diagram-datacollection.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Data Annotation</h1>
                        <p>
                        Data annotation was the most time-consuming task of this project. We didn’t have the time and money to outsource the data annotation tasks, so we had to get our hands dirty and do the annotation ourselves. Our initial goal was to label a few hundred images, but it was quickly proven to be a stretch. We used the annotation software CVAT to annotate the raw images with polygon masks for semantic segmentation tasks. 
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-3 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/cvat_screenshot.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Computer Vision Annotation Software CVAT</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <p> 
                        We could not label all the data, so each person is only responsible for annotating the data collected from one particular location. 
                        We annotated 198 images gathered from 4 different homes to train the semantic segmentation network. 
                        </p>
                        <p> 
                            A lot of thought went into the creation of the class list. The most apparent classes are drivable surfaces and carpets. 
                            The segmentation of drivable surfaces and carpets can provide the robot with information on where it can drive. 
                            When deciding which object should be included in the class list, we only considered those objects that reside on the ground plane because objects that do not reside on the ground add little to no value to a navigating robot. 
                            For example, a water bottle on top of a kitchen counter can not aid a driving robot in finding a good path. This is why some appliances are added to the class list(ovens, fridges, dishwashers) while some are not (microwaves, kitchen ventilators). 
                            We also considered objects that do not vary from home to home to include in the class list. For example, every home has walls, doors, toilets, etc.
                        </p>
                        <p>
                        An object is labelled unknown if it resides on the ground and is not in the class list. An object that does not reside on the ground and is not in the class list is labelled as either a wall or an existing class. 
                        In the third image from the <a href="#examples">examples</a>, the curtains are labelled as the wall class.
                        A door frame is considered part of the door and is treated as the door class. See the second image from the <a href="#examples">examples</a> for an illustration. 
                        The kitchen cabinets are considered part of the kitchen counter. 
                        </p>
                        <p>
                        If I could rework the data annotation part, I would spend more time working on the definitions of each object in the class list. When verifying the quality of the annotations, many images had to be relabelled due to differing interpretations of the definition of an object.
                        </p>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Pytorch Custom Dataset and DataLoader</h1>
                        <p>
                        I wrote a <a href="https://github.com/jiangjingxue">custom Dataset Class in Python</a>  to allow PyTorch DataLoader to load our dataset. This is a crucial step because PyTorch Dataloader enables us to pass samples in mini-batches, reshuffle the data at every epoch, and use multiprocessing to speed up data retrieval. 
                        The Custom Dataset Class has a function to return the number of samples in our dataset, and a function to return a single sample from the dataset. I also implemented functions to encode and decode the mask(annotated image) to allow us to train only the classes we are interested in. Classes with train ID 255 were ignored during training and evaluation. 
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/custom_dataset_class.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A list of all classes</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Data Augmentation</h1>
                        <p>
                        Given the time constraints, it was unrealistic to amass large quantities of data and manually label them, so I had to look for other ways to prevent overfitting and make the model more general. I used several data augmentation techniques on the training images to help the model generalize better. This is done by randomly cropping 720 by 720 patches from the original image, flipping them horizontally, and randomly changing the brightness, contrast, saturation, and hue using PCA colour augmentation.
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-2 row-cols-lg-4">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/frontenac_00_15061 copy.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">The Original 1280 x 720 image</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/toilet-flipped.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A flipped bathroom scene</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/toilet-color-jitter.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">ColorJitter applied at 0.5 for all parameters</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/cropped-toilet.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-center">Crop a 720 × 720 patch</figcaption>
                                    </figure>
                                </div>
                            </div>   
                        </div>
                        <p>
                        RandomCrop crops an input image at a random location. The original images in the dataset are of resolution 1280 by 720, so I used a square crop of size 720 to avoid cutting out important parts of the image. However, Random cropping may not be the best strategy because it may take a crop close to the edge and into the darkness beyond the image. I suspect cropping strategies such as FiveCrop or TenCrop are better at retaining important information and more suitable for my custom dataset because they crop the image into four corners and the central crop. The cropping strategy and the size of the cropping area need to be carefully selected to prevent the loss of important information. 
                        </p>
                        <p>
                        RandomHorizontalFlip randomly reflects an input image on the horizontal axis. This augmentation technique can be used for our semantic segmentation task because of the translational invariance property provided by CNN. Professor Hazem offered this insight to me during an after-class discussion on convolution operation. 
                        </p>
                        <p>
                        After cropping, flipping and applying colour jitter to the original image, I transformed the image into a PyTorch tensor and normalized the tensor image. The Dataflow diagram for the training images is shown below,
                        </p>
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-1 mb-4">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/dataflow-diagram-augumentation.png" ); ?>" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Model Training</h1>
                    </div>
                    <div class="row">
                        <h1 class="display-1 fs-2">Result</h1>
                        <p class="lead">
                        In this section, I discuss the segmentation performance of the DeepLabv3plus network trained on the custom indoor dataset and how it compares with other state-of-the-art segmentation networks. I also present the real-time inference result of the trained network. 
                        </p>
                        <h1 class="display-1 fs-4">Segmentation Performance of Drivable Surface</h1>
                        <p>
                        From the three backbone architectures we tested, the ResNet-50 backbone is the winner at segmenting drivable surfaces from obstacles. It performed competitively with previous research work with a 99.2 IoU (previous research work achieved 99.6 IoU using the same setup trained on the CityScapes dataset). Our dataset is much smaller (198 images) than the Cityscapes dataset (5000 images) but achieved similar results. ResNet-50 backbone shined when the scene had no definite, easily distinguishable drivable boundary, for example, the space under the white cabinet next to the toilet seat. 
                        </p>
                        <div class="row row-cols-1 row-cols-lg-2">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/resnet_toilet.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Segmentation of Drivable Surface using ResNet-50 backbone. From left to right: input image, ground truth, and prediction</figcaption>
                                    </figure>
                                </div>
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/mobilenet_toilet.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">Segmentation of Drivable Surface using MobileNet-v2 backbone</figcaption>
                                    </figure>
                                </div>
                         </div> 
                         <p>
                         The Above scene demonstrates a scenario where a portion of the drivable surface is hidden. Notice the area underneath the white cabinet is not annotated in the ground truth image, yet the network with ResNet-50 backbone can infer that there must be space underneath the cabinet. In contrast, the network with MobileNet-v2 as the backbone fails to interpret the space under the cabinet.
                         </p>

                        <h1 class="display-1 fs-4">Segmentation Performance of Common Household Items</h1>

                        <h1 class="display-1 fs-4">Real-time Inference Performance</h1>
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
<div class="modal fade" id="SemanticDemo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="SemanticDemoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header d-block">
                <div class="d-flex">
                    <h2 class="modal-title" id="SemanticDemoLabel">Demo</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
             </div>
            <div class="modal-body">
                <div class="container"> 
                    <div class="row">
                        <p class="lead">
                        If you'd like to see the model running in real-time on a robot, please <a href="#realtime">click here</a>
                        </p>
                        <h1 class="display-1 fs-2 fw-bold">Segmentation Demonstration</h1> 
                        <div class="container-fluid"> 
                            <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/demo-1.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A hallway in a house. From left to right: input image, ground turth, and prediction</figcaption>
                                    </figure>
                                </div>
                            </div> 
                            <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/demo-2.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A oven in a kitchen</figcaption>
                                    </figure>
                                </div>
                            </div> 
                            <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/demo-3.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A toilet in a bathroom</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/demo-4.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A person sitting on a bed</figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <figure class="figure">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/demo-5.jpg" ); ?>" class="figure-img img-fluid rounded" alt="">
                                        <figcaption class="figure-caption text-start">A poorly-illuminated room</figcaption>
                                    </figure>
                                </div>
                            </div>                      
                        </div>
                    </div>

                    <div class="row">
                        <h1 class="display-1 fs-2 fw-bold" id="realtime">Real-Time Inference on a Driving Mobile Robot</h1> 
                        <div class="container-fluid">
    `                       <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-touch="false" data-bs-interval="false"">
                            <!-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div> -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <div class="ratio ratio-21x9">
                                        <video controls preload="none"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/real-time-door.mp4" ); ?>" type="video/mp4">
                                        </video>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <div class="ratio ratio-21x9">
                                        <video controls preload="none"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/real-time-sofa.mp4" ); ?>" type="video/mp4">
                                        </video>
                                </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>`
                            <p class="lead pt-0 mt-0"> 
                            Overall, I am happy with its real-time segmentation performance, given that I only used 198 training images and trained for only 10,000 iterations.
                            </p>
                            <!-- <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <div class="ratio ratio-21x9">
                                        <video controls preload="auto"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/real-time-door.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-lg-1">
                                <div class="col">
                                    <div class="ratio ratio-21x9">
                                        <video controls preload="auto"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/real-time-sofa.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div> -->
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