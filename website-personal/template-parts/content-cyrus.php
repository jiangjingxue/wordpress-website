<div class="container-fluid">
    <div class="row page-padding px-5">
        <div class="col-md-3 ps-3">
                <div class="sticky-top sticky-offset" style="z-index: auto">
                <div class="d-inline-flex flex-column">
                <a href="<?php echo site_url('/projects'); ?>" class="btn btn-info rounded-pill btn-sm my-3">Go back to Projects</a>
                <nav class="nav nav-pills bg-light flex-column overflow-auto" style="border:1.5px solid black;border-radius:10px">
                    <a class="nav-link link-dark table-of-content py-1" style="background-color: #d3d3d3">Table of Content</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyCyrusIntro">Introduction</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyCyrusMechElec">Mechanical & Electrical</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyCyrusControl">Control System Design</a>
                    <a class="nav-link link-dark table-heading py-1" href="#scrollspyCyrusResult">Result</a>
                </nav>
                </div>
                </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-9">
                    <div class="article-padding my-3">
                        <article class="markdown" data-bs-target="#navbar-toc" data-bs-offset="0" tabindex="0">
                            <h1 class="project-big-title">Robot Vacuum Gen-1</h1>
                            <p class="lead py-3">
                            I designed a robot vacuum from scratch. I implemented a relatively sophisticated low-level control system for regulating the robot’s linear and angular velocity, utilizing various concepts in control theory such as system identification, pole placement, feedforward control and cascade control. 
                            </p>
                            <p class="lead">To develop the robot vacuum, I went through CAD modelling, 3D printing, sensor driver development, communication system design, control system design, and automatic speech recognition system design. </p>

                            <h2 id="scrollspyCyrusIntro" class="scroll-heading">Introduction</h2>
                            <p>In the summer of 2022, I had an idea of what makes a good cleaning robot and I went for it. I took on this project because I wanted to take a more rigorous path by familiarizing myself with every subsystem of a cleaning robot. That’s why I decided to design one from scratch.</p>

                            <h2 id="scrollspyCyrusMechElec" class="scroll-heading">Mechanical & Electrical</h2>
                            <h3 class="py-1">CAD Modelling and 3D-Printing</h3>
                            <p>I used SolidWorks to design the base of the robot vacuum.</p>
                            <div class="row mb-3" style="margin-left: 4rem;margin-right:4rem">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/yelloworca.jpg" ); ?>" class="img-fluid rounded img-vid-media" alt="...">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/orca1.jpg" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                            </div>
                            <p>Once modelling is finsihed, save the SolidWorks part in STL file format and import it to the slicer software. The slicer software I used was Ultimaker Cura.</p>
                            <div style="margin-left: 4rem;margin-right:4rem;">
                            <div class="ratio ratio-16x9 mb-3">
                                <video preload="metadata" controls poster="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/print2.png" ); ?>"> 
                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/printing.mp4" ); ?>" type="video/mp4">
                                </video>
                            </div>
                            </div>
                            <p>The printing time of the base was 82 hours.</p>

                            <h3 class="py-1">System Block Diagram</h3>
                            <p>The block diagram of the robot is shown below.</p>
                            <figure class="figure" style="margin-left: 5rem;margin-right:5rem">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/blockdiagram.jpg" ); ?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption"><p>Block diagram of the robot vacuum<p></figcaption>
                            </figure>
                            <div class="row mb-3" style="margin-left: 4rem;margin-right:4rem">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/robot-topview.jpg" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/robot-elec1.jpg" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                            </div>
                            <h3 class="py-1">Final Assembly</h3>
                            <p>The D-shape design is proven to be very effective at cleaning the corners.</p>
                            <div class="row mb-3" style="margin-left: 4rem;margin-right:4rem">
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/robot-front1.jpg" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/robot-back.jpg" ); ?>" class="img-fluid rounded" alt="...">
                                </div>
                            </div>

                            
                            
                            
                            <h2 id="scrollspyCyrusControl" class="scroll-heading">Control System Design</h2>
                            <p></p>
                            <h3 class="py-1">Linear and Angular Velocity Control of Differential Drive Robot</h3>
                            <p>I designed a cascade controller to control the robot’s linear and angular velocity. The outer loop uses a PI controller for handling the linear velocity and another PI controller for handling the angular velocity. The inner loop uses two PI controllers with feedforward actions for regulating the left and right motor velocity.</p>
                            <figure class="figure text-center">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/cascade-block.png" ); ?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-center"><p>Cascade controller for handling the linear and angular velocity of the robot<p></figcaption>
                            </figure>
                            <p>Two reasons facilitate this controller design:</p>
                            <ol>
                                <li>Supplying the same analog voltage (or the same PWM signal) to a motor does not guarantee that the motor will run at the same speed under all circumstances.</li>
                                <li>In the presence of wheel slippages,  open-loop control based on differential drive kinematics is insufficient for regulating the robot’s linear and angular velocity.</li>
                            </ol>
                                
                            <h3 class="py-1">DC Motor System Identification</h3>
                            <p>
                            To identify the transfer function of the DC motor, I excite the system with step changes and record the output wheel angular velocity in RPM. STM32 controllers offer a handy tracing feature called <code style="font-size: 110%;background:#f1f3f4">Instrumentation Trace Macrocell (ITM)</code>, which allows you to export internal CPU activities in real time without impacting the performance. I used this functionality to trace the wheel angular velocity variable in memory to prepare data for system identification. Measured data is shown below.                                                           
                            </p>
                            <figure class="figure" style="margin-left: 8rem;margin-right:8rem">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/measured-data-1.jpg" ); ?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-center"><p>Measured velocity response with step input of 13.35V at t = 2.7s <p></figcaption>
                            </figure>
                            <p>
                            If assume there is negligible inductance in the coils, the system dynamics of a DC motor can be approximated as a first-order system. The transfer function of the DC motor is identified by selecting gain \( K \) and time constant \( \tau \) until the simulated model output matches the measured data.
                            </p>
                            <p>The DC gain and time constant can be estimated graphically. In practice, the DC gain is the ratio of the magnitude of the steady-state step response to the magnitude of the step input. The time constant is the time it takes for the system to reach 63% of its steady-state value.</p>

                            <p>The first-order transfer function of the DC motor is:</p>
                            <div class="mathJax">
                            \[ P(s) = \frac{\dot{\theta}(s)}{V(s)} \ = \frac{K}{\tau s + 1} = \frac{10.075}{0.0417 s + 1} \]
                            </div>
                            <button onclick="showMath1()" class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" aria-expanded="false">
                                Show Calculation
                            </button>
                            <div id="mathDiv1" class="hiddenDiv mathJax p-4">
                            \[ 
                            \begin{aligned}
                                & \omega_{\text{steady}} = \frac{\omega_{\text{upper}} + \omega_{\text{lower}}}{2} = \frac{136 + 133}{2} = 134.5 \, \text{RPM} \\ 
                                \\ 
                                & K = \frac{\omega_{\text{steady}}}{V_{\text{input}}} = \frac{134.5 \, \text{RPM}}{13.35 \, \text{Volts}} = \color{#FF0000}{10.075} \\ 
                                \\ 
                                & 0.63 \times \omega_{\text{steady}} = 0.63 \times 134.5 = 84.735 \text{ RPM} \\ 
                                \\ 
                                & \tau = 2.8146 - 2.76 - \text{Input Delay} = 2.8146 - 2.765 - 0.0079 = \color{#FF0000}{0.0417} \\ 
                            \end{aligned}
                            \]
                            </div>
                            <figure class="figure" style="margin-left: 8rem;margin-right:8rem">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/identified-plant-5.jpg" ); ?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-center"><p>Measured output data (blue) and the identified plant model response (red).<p></figcaption>
                            </figure>
                            <p>From the graph, the first-order approximation of our DC motor is relatively accurate. Now we have a plant model we can examine the open-loop step response of the DC motor to extract a voltage-velocity mapping, which will help us to design the feedforward term of our controller. The voltage-velocity relationship is shown below. </p>

                            <figure class="figure" style="margin-left: 8rem;margin-right:8rem">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/volt-vel-relationship.jpg" ); ?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-center"><p>Voltage-Velocity mapping starting from 6V to 14V<p></figcaption>
                            </figure>
                            <p>The mapping when the voltage is under 6 volts is omitted because the non-linearity of the DC motor is more pronounced at lower voltage. In addition to modelling difficulties, the motor may stall when operating with insufficient current.</p>

                            
                            <h3 class="py-1">Motor Speed Controller Design using Pole Placement</h3>
                            <p>
                                I used a proportional-integral feedback controller with feedforward compensation to control the wheel’s angular velocity.  The feedforward term addresses a major limitation of feedback control: the system won’t apply control effort until an error occurs. The Feedforward term makes the robot react faster, and the feedback controller can do less work. The controller block diagram is shown below. 
                            </p>
                            <figure class="figure text-center" style="margin-left: 2rem;margin-right:2rem">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/control-block-4.png" ); ?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-center"><p>Combined feedforward and feedback controller block diagram<p></figcaption>
                            </figure>

                            <p>The PI + feedforward controller equation is given below:</p>
                            <div class="mathJax">
                                \[ u(t) = K_p ( br(t) - y(t) )+ K_i \int_{0}^{t} e(\tau) \, d\tau  + K_{ff} r(t)\]
                            </div>
                            <p>Where \( K_p,K_i,K_{ff} \) are tunable parameters and \( b \) is an additional parameter to make proportional action act only on part of the reference velocity.</p>
                            <p>To design the controller using pole placement, we choose the control gains  \(K_p,K_i\) to place the closed-loop poles in some desired locations that satisfy the performance requirements.</p>
                            <div class="mathJax">
                            \[ 
                            \begin{aligned}
                                \\
                                & \text{percentage overshoot requirements:} 
                                & 5\% \leq \text{PO} \leq 10\% \\ 
                                \\ 
                                & \text{settling time requirements:}
                                & 0.3 \leq T_s \leq 0.5  \\ 
                                \\
                            \end{aligned}
                            \]
                            </div>
                            <p>The shaded region in the below graph shows the acceptable locations for the two closed-loop poles.</p>
                            <button onclick="showMath2()" class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" aria-expanded="false">
                                Show Calculation
                            </button>
                            <div id="mathDiv2" class="hiddenDiv mathJax p-4">
                            \[ 
                            \begin{aligned}
                                & \text{To be updated}
                            \end{aligned}
                            \]
                            </div>
                            <figure class="figure text-center" style="margin-left: 8rem;margin-right:8rem">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/pole-place2.png" ); ?>" class="figure-img img-fluid rounded" alt="..." style="width:80%">
                                <figcaption class="figure-caption text-center"><p>Locating closed-Loop poles in the s-plane to satisfy requirements on settling time and percentage overshoot<p></figcaption>
                            </figure>
                            <p>We can choose the closed-loop poles to be \(-10 \pm j12\). And based on the pole locations, the control gains \(K_p,K_i\) that satisfy the requirements can be determined: </p>
                            <div class="mathJax">
                            \[
                            \begin{aligned}
                                & K_p = 10
                                \\ 
                                & K_i = 0.1
                            \end{aligned}
                            \]
                            </div>
                            <button onclick="showMath3()" class="btn btn-outline-dark btn-sm dropdown-toggle mb-3" type="button" aria-expanded="false">
                                Show Calculation
                            </button>
                            <div id="mathDiv3" class="hiddenDiv mathJax p-4">
                            \[ 
                            \begin{aligned}
                                & \text{To be updated}
                            \end{aligned}
                            \]
                            </div>

                            <h3 class="py-1">Integrator Anti-Windup Scheme</h3>
                            <p>I used the back-calculation method to avoid windup. This method does not reset the integrator instantaneously but dynamically with a constant \(K_w\). The constant \(K_w\) determines how quickly the integral term is reset. It should be set to a value larger than \(K_i\) because the integrator should reset faster than it accumulates once saturation occurs.</p>
                            <figure class="figure text-center" style="margin-left: 2rem;margin-right:2rem">
                                <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/anti-windup-new.png" ); ?>" class="figure-img img-fluid rounded" alt="...">
                                <figcaption class="figure-caption text-center"><p>PI + feedforward controller with anti-windup<p></figcaption>
                            </figure>
                            <p><span style="font-weight:500;color:#FF2400">Important: </span>Anti-Windup block should act on the final control output \(v\), and not only on the feedback output.<p>

                            <h3 class="py-1">Tuning</h3>
                            <p>Since our closed-loop system is not strictly a canonical second-order system due to the presence of zero in the denominator, the true behaviour of our closed-loop system will be faster and more oscillatory. In addition, factors such as load disturbances, sensor noise, plant uncertainty, and sampling interval all affect the actual system behaviour. Therefore, experimental tuning is still necessary to ensure stability and performance.</p>
                            <p>We can use the calculated gains determined from system identification and pole placement as a starting point to guide us in tuning the controller.</p>
                            <div class="mathJax">
                            \[
                            \begin{aligned}
                                & u(t) = K_p ( br(t) - y(t) )+ K_i \int_{0}^{t} e(\tau) \, d\tau  + K_{ff} r(t) \\
                                \\ 
                                & \text{Where,} \\ 
                                & K_{ff} = 10.035 \\
                                & K_p = 10 \\
                                & K_i = 0.1 \\
                                & b = 0.5 \\
                            \end{aligned}
                            \]
                            </div>

                            <p>The following videos demonstrate how proportional \(P_1\) , integral \(I_1\), controller output \(v_1\), saturated output \(u_1\) react to a reference wheel velocity of 80 RPM.</p>
                            <div style="margin-left: 8rem;margin-right:8rem;">
                            <div class="ratio ratio-16x9 mb-3">
                                <video preload="metadata" controls poster="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/tuning-screen.png" ); ?>"> 
                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/tuning.mp4" ); ?>" type="video/mp4">
                                </video>
                            </div>
                            </div>

                            <h2 id="scrollspyCyrusResult" class="scroll-heading">Result</h2>
                            <h3 id="scrollspyCyrusDemo" class="py-1">Successful control of robot's linear velocity on different floor surfaces</h3>
                            <p>Robot drives forward at a linear velocity of 0.3 m/s and no angular velocity. </p>
                            <div class="row">
                                <div class="col">
                                    <div class="ratio ratio-4x3">
                                        <video preload="metadata" controls poster="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/control-screen1.png" ); ?>"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/linear-control-1.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="ratio ratio-4x3">
                                        <video preload="metadata" controls poster="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/control-screen2.png" ); ?>"> 
                                            <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/linear-control-2.mp4" ); ?>" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <h3 class="py-1">Successful control of robot's angular velocity</h3>
                            <p>Robot rotates in place at a angular velocity of 0.4 rad/s </p>
                            <div style="margin-left: 4rem;margin-right:4rem;">
                            <div class="ratio ratio-16x9">
                                <video preload="metadata" controls poster="<?php echo esc_url( get_template_directory_uri() . "/assets/images/cyrus/control-screen3.png" ); ?>"> 
                                    <source src="<?php echo esc_url( get_template_directory_uri() . "/assets/videos/cyrus-rotate.mp4" ); ?>" type="video/mp4">
                                </video>
                            </div>
                            </div>
                            

                            
                            



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


<script>
    function showMath1() {
        var myDiv = document.getElementById("mathDiv1");
        var style = window.getComputedStyle(myDiv);
        if (style.display === "none") {
            myDiv.style.display = "block";
        } else {
            myDiv.style.display = "none";
        }
    }
    function showMath2() {
        var myDiv = document.getElementById("mathDiv2");
        var style = window.getComputedStyle(myDiv);
        if (style.display === "none") {
            myDiv.style.display = "block";
        } else {
            myDiv.style.display = "none";
        }
    }
    function showMath3() {
        var myDiv = document.getElementById("mathDiv3");
        var style = window.getComputedStyle(myDiv);
        if (style.display === "none") {
            myDiv.style.display = "block";
        } else {
            myDiv.style.display = "none";
        }
    }
</script>

