<style>
    .card.card-profile-bottom {
        margin-top: 5em;
    }

    .user {
        text-align: center;
    }

    .user-detail {
        float: left;
        padding: 10px;
        text-align: center;
    }

    .user-list {
        /* padding-top: auto;
    padding-right: 30px;
    padding-bottom: auto;
    padding-left: 150px; */
        margin-left: auto;
        margin-right: auto;
    }

    .card {
        margin-right: 20px !important;
        margin-top: 20px !important;
    }

    #header {
        margin-top: 20px !important;
    }

    #chart-container {
        width: 640px;
        height: auto;
    }

    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
</style>

<body>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h3 class="mb-0" id="header">&emsp;<?php echo $arr_event->evt_name . ' (' . $arr_event->evt_detail . ')' ?></h3>
                    </div>
                    <div class="col-6 text-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success mb-0 btn-lg canter" data-bs-toggle="modal" data-bs-target="#ModalVote">โหวต</button>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <h5 class="mb-0">&emsp;&emsp;<?php echo 'โหวต : ' . date("d/m/y H:i:s", strtotime($arr_event->evt_start_date)) . ' - ' . date("d/m/y H:i:s", strtotime($arr_event->evt_end_date)) ?></h5>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center p-4">
                <div class="card-body p-3">
                    <div class="row" id="count_graph">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header bg-transparent">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <h5 class="text-black mb-0">กราฟแสดงผลการคะแนนการโหวต</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <figure class="highcharts-figure">
                                        <div id="container"></div>
                                    </figure>
                                    <!-- <canvas id="myChart" class="chart-canvas"></canvas> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-fotter p-3">
                    <h5 class="mb-0">&emsp;&emsp;หมายเหตุ</h5><br>
                    <h5 class="mb-0">&emsp;&emsp;คะแนนของฉัน : 100 คะแนน</h5>
                    <?php $point = $_SESSION['UsPoint']; ?>
                    <h5 class="mb-0">&emsp;&emsp;คะแนนคงเหลือ : <?php echo $point; ?> คะแนน</h5>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Start modal add group assessor -->
<div class="modal fade" id="ModalVote" tabindex="-1" role="dialog" aria-labelledby="ModalVoteTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h5 class="modal-title" id="ModalVoteLabel">บันทึกการลงคะแนน</h5>
                </center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?php echo site_url() . 'Vote/vote_cluster'; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <!-- Group name -->
                        <label for="recipient-name" class="col-form-label">มกุล</label>
                        <select class="form-select" id="cluster" name="cluster" aria-label="Default select example">
                            <option disabled selected>กรุณาเลือกมกุล...</option>
                            <option value="1">มกุล 0 ระบบ ..</option>
                            <option value="2">มกุล 1 ระบบ ..</option>
                            <option value="3">มกุล 2 ระบบ ..</option>
                            <option value="4">มกุล 3 & 9 ระบบ ..</option>
                            <option value="5">มกุล 4 ระบบ ..</option>
                            <option value="6">มกุล 5 ระบบ ..</option>
                            <option value="7">มกุล 6 ระบบ ..</option>
                            <option value="8">มกุล 7 ระบบ ..</option>
                            <option value="9">มกุล 8 ระบบ ..</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">คะแนน</label>
                        <input type="number" min="1" max="100" class="form-control" id="point" name="point" placeholder="1-100">
                    </div>
                    <input type="text" id="evt_id" name="evt_id" class="form-control" value="<?php echo $arr_event->evt_id ?>" hidden>
                    <?php $per_id = $_SESSION['UsPer_ID']; ?>
                    <input type="text" id="per_id" name="per_id" class="form-control" value="<?php echo $per_id ?>" hidden>
                </div>
                <div class="modal-footer">
                    <!-- ปุ่มปิด modal -->
                    <a href="">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
                    </a>
                    <!-- ปุ่มบันทึก -->
                    <a href="">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End modal add group assessor -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    $(document).ready(function() {
        get_data();
    });

    function get_data() {
        $.ajax({
            type: 'post',
            url: '<?php echo site_url() . "/Vote/get_point"; ?>',
            data: {},
            dataType: 'json',
            success: function(json_data) {
                set_graph(json_data['cluster']);
            }
        });
    }

    // Create the chart
    function set_graph(cluster) {

        arr_cluster = [];
        arr_score = [];

        for (i = 0; i < cluster.length; i++) {
            console.log(cluster[i].top_name);
            console.log(cluster[i].pot_point);

            arr_cluster.push(cluster[i].top_name);
            arr_score.push(parseInt(cluster[i].pot_point));
        }


        const chart = Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'กราฟแสดงผลการคะแนนการโหวต'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                categories: arr_cluster,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'คะแนนโหวต'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{point.key}</span><br>',
                pointFormat: 'คะแนน : <b>{point.y:.2f}%</b>',
                shared: true,
                useHTML: true
            },

            series: [{
                type: 'column',
                colorByPoint: true,
                showInLegend: false,
                data: arr_score

            }]
        });
    }
</script>