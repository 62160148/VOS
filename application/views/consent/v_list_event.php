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

    #header{
        margin-top: 20px !important;
    }
</style>

<body>
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <h3>&nbsp;&nbsp;รายการเปิดโหวต</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="row justify-content-center p-4">
                <?php for ($i = 0; $i < count($arr_event); $i++) { ?>
                    <div class="card mr-2" style="width: 28rem;">
                        <br>
                        <h5 class="text-center" id="header"><?php echo $arr_event[$i]->evt_name ?></h5>
                        <div class="card-body">
                            <img class="card-img-top" src="../assests/image/event/<?php echo $arr_event[$i]->evt_image ?>" alt="Card image cap" height="200px" width="800px"><br><br>
                            <p class="card-text">
                                <b>รายละเอียด :</b> <?php echo $arr_event[$i]->evt_detail ?><br>
                                <b>โหวต : </b><?php echo date("d/m/y H:i:s", strtotime($arr_event[$i]->evt_start_date)) . ' - ' . date("d/m/y H:i:s", strtotime($arr_event[$i]->evt_end_date)) ?>
                            </p>
                            <!-- <p class="card-text"><?php echo 'จำนวนสมาชิก' ?></p> -->
                            <center><a href="<?php echo site_url() . 'Vote/vote/' . $arr_event[$i]->evt_id; ?>" class="btn btn-primary float-center"><i class="fas fa-search text-white"></i>&nbsp;&nbsp;ดูรายละเอียด</a></center>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>