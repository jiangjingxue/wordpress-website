<section class="main-content-section p-5" id="mbackground">
    <div class="initial-content px-4">
        <div class="container-fluid main-container pb-3">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-section">
                        <div class="sidebar-item">
                            <div class="sidebar-content">
                                <div class="d-flex flex-column justify-content-between">
                                    <div class="py-2 author-headshot">
                                        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/headshot-1.jpg" ); ?>" class="img-fluid" alt="headshot">
                                    </div>
                                    <div class="py-2 author-content" id="mtext1">Jingxue Jiang</div>
                                    <div class="py-2 author-urls-wrapper">
                                        <ul class="author-urls">
                                            <li>
                                                <a href="https://maps.app.goo.gl/bWBGrxLXDJ2K6iin8" style="text-decoration:none;color:black">
                                                    <i class="fa-regular fa-map" aria-hidden="true" style="font-size:19px;color:grey"></i>
                                                    <span class="label" id="mtext2">Kingston,ON,CA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:jingxue07@gmail.com" style="text-decoration:none;color:black">
                                                    <i class="fa-regular fa-envelope" style="font-size:20px;color:grey"></i>
                                                    <span class="label" id="mtext3">Email</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/" style="text-decoration:none;color:black">
                                                    <i class="fa-brands fa-linkedin-in" aria-hidden="true" style="font-size:22px;color:blue"></i>
                                                    <span class="label" id="mtext4">LinkedIn</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/jiangjingxue" style="text-decoration:none;color:black">
                                                    <i class="fa-brands fa-github" aria-hidden="true" style="font-size:19px;color:red" ></i>
                                                    <span class="label" id="mtext5">Github</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content-section px-5">
                        <p class="intro-content lead" id="mtext6">
                            Welcome to my website, where I hope to share my past projects, current plans and a bit about myself.  I am an undergraduate student at Queen’s University in the Computer Engineering Program. 
                        </p>
                        <a href="<?php echo site_url('/projects'); ?>" class="btn btn-info btn-lg rounded-pill" role="button">My Latest Projects</a>
                        <!-- <button type="button" class="btn btn-info btn-lg rounded-pill">See my projects</button> -->
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="second-sidebar-section">
                        <div class="sidebar-item">
                            <div class="sidebar-content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
        const savedBackground = sessionStorage.getItem('theme-bg');
        const savedfontColor = sessionStorage.getItem('font-color');
        if(savedBackground){
            document.getElementById('mbackground').style.backgroundColor = savedBackground; // Reset to default background color
        };

        if(savedfontColor){
            // document.getElementById('mtext0').style.color = savedfontColor;
            // document.getElementById('mtext').style.color = savedfontColor;
            document.getElementById('mtext1').style.color = savedfontColor;
            document.getElementById('mtext2').style.color = savedfontColor;
            document.getElementById('mtext3').style.color = savedfontColor;
            document.getElementById('mtext4').style.color = savedfontColor;
            document.getElementById('mtext5').style.color = savedfontColor;
            document.getElementById('mtext6').style.color = savedfontColor;
        }
</script>

<script>
  // Get the elements
  var buttonElementHome = document.getElementById('modebuttonhome');
  // Set the initial state

  // Mode Home
  function changeModeHome(){
    var themeColor = sessionStorage.getItem('font-color');

    if(themeColor == null){
      document.getElementById('mbackground').style.backgroundColor = '#212124'; // Change to a different background color using hex code
    //   document.getElementById('mtext0').style.color = 'white';
    //   document.getElementById('mtext').style.color = 'white';
      document.getElementById('mtext1').style.color = 'white';
      document.getElementById('mtext2').style.color = 'white';
      document.getElementById('mtext3').style.color = 'white';
      document.getElementById('mtext4').style.color = 'white';
      document.getElementById('mtext5').style.color = 'white';
      document.getElementById('mtext6').style.color = 'white';

      sessionStorage.setItem('theme-bg','#212124');
      sessionStorage.setItem('theme-bg1','#3e3e42');
      sessionStorage.setItem('font-color','white');

    } else if (themeColor == 'white'){
      document.getElementById('mbackground').style.backgroundColor = ''; // Reset to default background color
    //   document.getElementById('mtext0').style.color = '';
    //   document.getElementById('mtext').style.color = '';
      document.getElementById('mtext1').style.color = '';
      document.getElementById('mtext2').style.color = '';
      document.getElementById('mtext3').style.color = '';
      document.getElementById('mtext4').style.color = '';
      document.getElementById('mtext5').style.color = '';
      document.getElementById('mtext6').style.color = '';
      document.getElementById('mtext6').style.color = '';       

      sessionStorage.setItem('theme-bg','#efefef');
      sessionStorage.setItem('theme-bg1','white');
      sessionStorage.setItem('font-color','black');

    } else {
      document.getElementById('mbackground').style.backgroundColor = '#212124'; // Change to a different background color using hex code
    //   document.getElementById('mtext0').style.color = 'white';
    //   document.getElementById('mtext').style.color = 'white';
      document.getElementById('mtext1').style.color = 'white';
      document.getElementById('mtext2').style.color = 'white';
      document.getElementById('mtext3').style.color = 'white';
      document.getElementById('mtext4').style.color = 'white';
      document.getElementById('mtext5').style.color = 'white';
      document.getElementById('mtext6').style.color = 'white';

      sessionStorage.setItem('theme-bg','#212124');
      sessionStorage.setItem('theme-bg1','#3e3e42');
      sessionStorage.setItem('font-color','white');


    }
    // Toggle the state
    isColorsChanged = !isColorsChanged;
  }

  // Attach the function to the button click event
  buttonElementHome.addEventListener('click', changeModeHome);

</script>







