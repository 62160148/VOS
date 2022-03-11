<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<!-- Data Table -->
<script>
  $(document).ready(function() {
    $("#list_table").DataTable();
  });
</script>
<!-- End Data Table -->

<body class="g-sidenav-show   bg-gray-100">
  <!-- <div class="min-height-300 bg-primary position-absolute w-100"></div> -->
  <main class="main-content position-relative border-radius-lg ">
      <div class="container-fluid py-4">
        <div class="row">
          <!-- <div class="col-12"> -->
          <div class="card mb-4">
            <!-- ปุ่มดำเนินการเพิ่ม -->
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-2 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
              <div class="container-fluid py-2 px-1">
              <h3>User Management (จัดการข้อมูลสมาชิก)</h3>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                  <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn bg-gradient-info btn-block mb-3" data-bs-toggle="modal" data-bs-target="#ModalAddGroup">
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Add User
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
            <!-- End Navbar -->
            <!-- ปุ่มดำเนินการเพิ่ม  -->
            <div class="card-header pb-0">
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-2" id="list_table">
                    <thead>
                      <tr>
                        <th class="text-center text-uppercase opacity-7">#</th>
                        <th class="text-uppercase opacity-7">User</th>
                        <th class="text-uppercase opacity-7">Email Address</th>
                        <th class="nav-item dropdown">
                          <div class="text-center text-uppercase opacity-7">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                              Role
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                              <li><a class="dropdown-item" href="#">User</a></li>
                              <li><a class="dropdown-item" href="#">Admin</a></li>
                            </ul>
                          </div>
                        </th>
                        <th class="text-center text-uppercase opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0">1</p>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img class="avatar avatar-sm me-3" src="<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\Cute_cat.jpg' ?>">

                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">A Meow</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">meow63160XX@go.buu.ac.th</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Admin</span>
                        </td>

                        <td class="align-middle text-center">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-link text-warning text-gradient px-3 mb-0">
                            <i class="far fa-edit me-2"></i>Edit</button>
                          <!-- <br> -->
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                            <i class="far fa-trash-alt me-2"></i>Delete</button>
                        </td>

                      </tr>
                      <tr>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0">2</p>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img class="avatar avatar-sm me-3" src="<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\Cute_cat.jpg' ?>">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">B Meow</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">meow63160XX@go.buu.ac.th</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">Admin</span>
                        </td>
                        <td class="align-middle text-center">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-link text-warning text-gradient px-3 mb-0">
                            <i class="far fa-edit me-2"></i>Edit</button>
                          <!-- <br> -->
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                            <i class="far fa-trash-alt me-2"></i>Delete</button>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0">3</p>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img class="avatar avatar-sm me-3" src="<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\Cute_cat.jpg' ?>">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">C Meow</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">meow63160XX@go.buu.ac.th</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-info">User</span>
                        </td>
                        <td class="align-middle text-center">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-link text-warning text-gradient px-3 mb-0">
                            <i class="far fa-edit me-2"></i>Edit</button>
                          <!-- <br> -->
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#ModalDeleteAssessor">
                            <i class="far fa-trash-alt me-2"></i>Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
     
  </main>
</body>

</html>