<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?page=dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?page=contact" class="nav-link">About Us</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-user"></i>
        </a>
      </li> -->
      <li class="dropdown user user-menu">
        <a class="nav-link"  href="#" buttonclass="dropdown-toggle" data-toggle="dropdown"> 
          <span class="fas fa-user"></span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
              <div class="user-panel mt-3 pb-3 mb-3 ">
                <div class="image">
                  <span class="fas fa-user"></span>
                  <p>
                    <h5><span class="hidden-as"><?php echo $_SESSION['nama'];?></span></h5>
                  </p>
                  <p>
                    <?php echo $_SESSION['level'];?>                    
                  </p>                
                </div>
                <div class="text-left">
               <a href="index.php?page=profile" class="btn btn-default btn-flat">Profile</a>
               <a href="keluar.php" class="btn btn-default btn-flat">Sign out</a>
            </div>
              </div>
            
          </p>
        </ul>       
  </nav>  
  
  