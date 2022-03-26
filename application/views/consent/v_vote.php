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
                                <div class="card-body" id="chart-container">
                                    <canvas id="myChart" class="chart-canvas"></canvas>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>

<script>
    function show_chart(label, data) {
        var bar_charts = document.getElementById("myChart");
        var myChart = new Chart(bar_charts, {
            type: 'bar',
            data: {
                labels: label,
                datasets: [{
                    label: 'Cluster Point',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    }

    function show_all_data() {

        const label = [];
        var check = '';
        const data = [];
        var count = 0;
        const Point = [];
        var cluster = [];
        var score = [];
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url() ?>Vote/get_point",
            dataType: "JSON",
            data: data,
            success: function(data_charts) {
                console.log(data_charts)
                data_charts.forEach((row, index) => {
                    if (index == 0) {
                        label.push(row.top_name);
                        Point.push(row.pot_id);
                        check = row.top_name;
                    } else if (check != row.top_name) {
                        label.push(row.top_name);
                        Point.push(row.pot_id);
                        check = row.top_name;
                    }
                });
                // forEach data_charts
                label.forEach((row_label, index) => {
                    data_charts.forEach((row, index) => {
                        if (row_label == row.top_name) {
                            count++;
                        }
                    });
                    data.push(count);
                    count = 0;
                });
                // forEach label
                $("#count_graph").show();

                show_chart(label, data);

            },
            error: function(res) {

            }
        });

    }
</script>