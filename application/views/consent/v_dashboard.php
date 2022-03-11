<!--
    /*
    * v_dashboard
    * dashboard detail
    * @input -
    * @output -
    * @author Phatchara Khongthandee Thitima Popila and Ponprapai Atsawanurak
    * @Create date : 2565-01-25
    */
-->
<!-- CSS -->
<style>
.card-header:first-child 
{
    border-radius: 1rem 1rem 1rem 1rem
}

.btn
{
    margin-bottom: 0rem;
}

h4 
{
    margin-top: 1rem;
}

</style>
<!-- End CSS -->

<head>
    <meta charset="utf-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>


<!-- Start HTML -->
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <head>
                <h1>Report (ผลการโหวต)</h1>
            </head>
        </div>
        <!-- End card-header -->
    </div>
    <!-- End card -->
    
    <div class="card-body">
        <div class="container-fluid py-4">
            <!-- Start Card Data -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                                            <h5 class="font-weight-bolder">
                                                $53,000
                                            </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+55%</span>
                                                since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                            <h5 class="font-weight-bolder">
                                                2,300
                                            </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                                                since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                            <h5 class="font-weight-bolder">
                                                +3,462
                                            </h5>
                                        <p class="mb-0">
                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                                since last quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                            <h5 class="font-weight-bolder">
                                                $103,430
                                            </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+5%</span> than
                                                last month
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Data -->
            <br>

            <!-- Start Table List -->
            <div class="row">
                <div class="card mb-4">
                    <div class="card-body px-2 pt-2 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0" id="list_table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Open</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Close</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Report</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <!-- # -->
                                    <td>1</td>
                                    <!-- Title -->
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img class="avatar avatar-sm me-3"
                                                    src="<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\Powerpuff-Girls.jpg' ?>">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xxl text-secondary mb-0">มกุล 0</p>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- Open -->
                                    <td>07/03/2565 13:00:00</td>
                                    <!-- Close -->
                                    <td>07/03/2565 16:00:00</td>
                                    <!-- Status -->
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-danger">Close</span>
                                    </td>
                                    <!-- Button Report -->
                                    <td class="align-middle text-center text-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Report
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img class="avatar avatar-sm me-3"
                                                    src="<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\Powerpuff-Girls.jpg' ?>">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xxl text-secondary mb-0">มกุล 1</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>07/03/2565 13:00:00</td>
                                    <td>07/03/2565 16:00:00</td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Open</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Report
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img class="avatar avatar-sm me-3"
                                                    src="<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\Powerpuff-Girls.jpg' ?>">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xxl text-secondary mb-0">มกุล 2</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>07/03/2565 13:00:00</td>
                                    <td>07/03/2565 16:00:00</td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Open</span>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Report
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Table List -->
        </div>
        <!-- End container-fluid py-4 -->
    </div>
    <!-- End card-body -->
</div>
<!-- End HTML -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" align="center">
                <div class="modal-title" id="ModalLabel" id="img">
                    <!-- icon -->
                    <img src=<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\download.png' ?> width="150" height="150">
                    <h4><b>ยืนยันการดาวน์โหลด</b></h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">ยกเลิก</button>
                <button type="button" class="btn bg-gradient-success">ยืนยัน</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->


<!-- Data Table -->
<script>
$(document).ready(function() {
    $("#list_table").DataTable();
});
</script>
<!-- End Data Table -->