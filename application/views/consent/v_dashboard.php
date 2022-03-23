<!--
    /*
    * v_dashboard
    * dashboard detail
    * @input -
    * @output -
    * @author Phatchara Khongthandee Thitima Popila and Ponprapai Atsawanurak
    * @Create date : 2565-01-25
    * @Create date : 2565-03-18
    * @Create date : 2565-03-19
    */
-->
<!-- CSS -->
<style>
.card-header:first-child {
    border-radius: 1rem 1rem 1rem 1rem
}

.btn {
    margin-bottom: 0rem;
}

h4 {
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
                <h1>Dashboard</h1>
            </head>
        </div>
        <!-- End card-header -->
    </div>
    <!-- End card -->

    <div class="card-body">
        <div class="container-fluid py-4">
            <!-- Start Card Data -->
            <div class="row">
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Event</p>
                                        <h5 class="font-weight-bolder">
                                            <h4 id="num_event"></h4>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2132/2132729.png" width="80"
                                        height="80">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Member</p>
                                        <h5 class="font-weight-bolder">
                                            <h4 id="num_person"></h4>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1256/1256650.png" width="80"
                                        height="80">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <!-- Start Table List -->
            <div class="row">
                <div class="card mb-4">
                    <div class="card-body px-2 pt-2 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0" id="list_table">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            #</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                            Event Name</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Start Event</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            End Event</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tr>
                                <?php
                                for($i=0; $i<count($arr_event); $i++)
                                {
                                ?>
                                    <!-- # -->
                                    <td><?php echo $i+1 ?></td>
                                    <!-- Title -->
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-xxl text-secondary mb-0">
                                                    <?php
                                                        echo $arr_event[$i]->evt_name
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- Open -->
                                    <td>
                                        <?php
                                            echo $arr_event[$i]->evt_start_date 
                                        ?>
                                    </td>
                                    <!-- Close -->
                                    <td>
                                        <?php
                                            echo $arr_event[$i]->evt_end_date 
                                        ?>
                                    </td>
                                    <!-- Status -->
                                    <?php
                                    if($arr_event[$i]->evt_status == 0)
                                    {
                                    ?>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-danger">
                                            Close
                                        </span>
                                    </td>
                                    <?php
                                    } else if($arr_event[$i]->evt_status == 1)
                                    {
                                    ?>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">
                                            Open
                                        </span>
                                    </td>
                                    <?php
                                    }
                                    ?>
                                    <!-- Action -->
                                    <td class="align-middle text-center text-sm">
                                        <a href="">
                                            <button type="button" class="btn btn-xs button_size"
                                                style="background-color: #596CFF;">
                                                    <i class="fas fa-search text-white"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
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
                    <img src=<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\download.png' ?>
                        width="150" height="150">
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
    
    // get amount event
    $.ajax({
        url: '<?php echo base_url(); ?>Report/show_amount_event_ajax',
        type: 'POST',
        dataType: 'JSON',
        success: function(data) {
            console.log(data.numEvent);
            $("#num_event").html(data.numEvent);
        },
        error: function(data) {
            console.log('error');
        }
    });

    // get amount member
    $.ajax({
        url: '<?php echo base_url(); ?>Report/show_amount_person_ajax',
        type: 'POST',
        dataType: 'JSON',
        success: function(data) {
            console.log(data.numPerson);
            $("#num_person").html(data.numPerson);
        },
        error: function(data) {
            console.log('error');
        }
    });
});
</script>
<!-- End Data Table -->