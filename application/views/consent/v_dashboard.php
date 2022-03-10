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
//css
<style>
#th {
    text-align: center;
}
</style>

<!-- Start HTML -->
<div class="container-fluid py-4">
    <div class="card">
        <div class="card-header">
            <h2>Report (ผลการโหวต)</h2>
        </div>
        <div class="card-body">
            <div class="container-fluid py-4">
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
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Open</th>
                                <th>Close</th>
                                <th>Status</th>
                                <th>Report</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>1</td>
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
                            <td>07/03/2565 13:00:00</td>
                            <td>07/03/2565 16:00:00</td>
                            <td class="align-middle text-center text-sm">
                                Open
                            </td>
                            <td class="align-middle text-center text-sm">
                                <button type="button" data-toggle="modal" data-target="#Modal_confirm"
                                    class="btn btn-success btn-ml float-right">Report</button>
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
                                Open
                            </td>
                            <td class="align-middle text-center text-sm">
                                <button type="button" data-toggle="modal" data-target="#Modal_confirm"
                                    class="btn btn-success btn-ml float-right">Report</button>
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
                                Open
                            </td>
                            <td class="align-middle text-center text-sm">
                                <button type="button" data-toggle="modal" data-target="#exampleModal"
                                    class="btn btn-success btn-ml float-right">Report</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn bg-gradient-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<!-- End HTML -->