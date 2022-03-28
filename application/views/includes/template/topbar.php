<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">

      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center nav-link text-white font-weight-bold px-0">
            Name : <?php echo $_SESSION['UsFullName'] . ' ' . $_SESSION['UsLastName']; ?>
            <?php $role = $_SESSION['Usrole'];
            if ($role == 1) { ?>
              <span class="d-sm-inline d-none">&ensp;Role : Member |&ensp;</span>
            <?php } else { ?>
              <span class="d-sm-inline d-none">&ensp;Role : Admin |&ensp;</span>
            <?php } ?>
            <a href="<?php echo site_url() . 'Login/logout' ?>" class="nav-link text-white font-weight-bold px-0">
              <i class="fas fa-sign-out-alt"></i>
              <span class="d-sm-inline d-none">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->