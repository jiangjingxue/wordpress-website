<div class="container-fluid left-aligned-container projectlist">
<div class="row text-start pt-5">
    <div class="button-container">
        <button type="button" class="btn btn-outline-primary" onclick="clearAll()">All</button>
        <button type="button" class="btn btn-outline-primary" onclick="filter('hardware')">Hardware</button>
        <button type="button" class="btn btn-outline-primary" onclick="filter('software')">Software</button>
    </div>
</div>
<div class="container_cards row text-start">
  <div class="row row-cols-1 row-cols-lg-4 g-4">
    <!-- Card 5 -->
    <div class="col ">
      <div class="card border-light h-100"> 
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/semantic/unity_00_00421_gtFine_color copy.png" ); ?>" class="card-img-top" alt="semantic segmentation image">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">Semantic Segmentation for Indoor Robot Navigation</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">hardware,software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SemanticRead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#SemanticDemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>
    <!-- Card 4 -->
    <div class="col">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/frontier/view-center.jpg" ); ?>" class="card-img-top" alt="Detected frontiers in Rviz">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">Improved Frontier-based Autonomous Exploration Algorithm</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">hardware,software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frontierRead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#frontierDemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div> 
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col ">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/chevy.png" ); ?>" class="card-img-top" alt="A blue Chevrolet electric vehicle">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">Self-Driving Chevrolet Bolt EV</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">hardware,software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ChevyRead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ChevyDemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>

    <!-- Card 1 -->
    <div class="col ">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/orcanew.jpg" ); ?>" class="card-img-top" alt="A blue home robot">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">3D-Printed Home Robot</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">hardware,software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#VacuumZeroRead">Read</button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#VacuumZeroDemo">Demo</button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col ">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/create3new.jpg" ); ?>" class="card-img-top" alt="A black robot vaccuum with stereo camera and lidar sensor">
        <div class="card-body ">
          <h5 class="card-title display-1 fs-4">Robot Vacuum</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">hardware,software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#VacuumOneRead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#VacuumOneDemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>
    <!-- Card 6 -->
    <div class="col">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/voronoi.png" ); ?>" class="card-img-top" alt="A voronoi diagram">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">Floorplan Decluttering Algorithm Design</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#VoronoiRead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#VoronoiDemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>
    <!-- Card 7 -->
    <div class="col ">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/perfect_bell.jpg" ); ?>" class="card-img-top" alt="A bell-shaped trajectory">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">MPC Controller Design</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MPCRead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#MPCDemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>
    <!-- Card 8 -->
    <div class="col ">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/perfect_line.jpg" ); ?>" class="card-img-top" alt="A straight line trajectory">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">MPC Auto-Tuning Tool</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MPCGARead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#MPCGADemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>
    <!-- Card 9 (Least important) -->
    <div class="col">
      <div class="card border-light h-100">
        <img src="<?php echo esc_url( get_template_directory_uri() . "/assets/images/mywebsite.jpg" ); ?>" class="card-img-top" alt="screenshot of this website">
        <div class="card-body">
          <h5 class="card-title display-1 fs-4">This website</h5>
          <p class="card-text" style="font-size:xx-small; color:white;">software</p>
        </div>
        <div class="card-footer">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#WebRead">
              Read
          </button>
          <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#WebDemo">
              Demo
          </button>
          <a href="https://github.com/jiangjingxue" class="btn btn-tertiary btn-sm btn-outline-dark">Code</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
