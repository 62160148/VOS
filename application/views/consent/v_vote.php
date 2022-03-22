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
</style>

<body>
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <h3 class="text-center">รายการเปิดโหวต</h3>
        </div>
    </div>
    <div class="container-fluid">

        <div class="card">
            <div class="row justify-content-center p-4">
                <?php for ($i = 0; $i < count($arr_event); $i++) { ?>
                <div class="card mr-2" style="width: 25rem;">
                    <br>
                    <h5 class="text-center">ชื่อหัวข้อโหวต</h5>
                    <div class="card-body">
                        <img class="card-img-top" src="../assests/image/event/<?php echo $arr_event[$i]->evt_image ?>"
                            alt="Card image cap" width="800px"><br><br>
                        <p class="card-text">
                            <?php echo 'วันที่ : ' . date("d/m/y H:i:s", strtotime($arr_event[$i]->evt_start_date)) . ' - ' . date("d/m/y H:i:s", strtotime($arr_event[$i]->evt_end_date)) ?>
                        </p>
                        <!-- <p class="card-text"><?php echo 'จำนวนสมาชิก' ?></p> -->
                        <a href="#" class="btn btn-primary ">ดูรายละเอียด</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>