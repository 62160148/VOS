<!DOCTYPE html>
<html>
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

<head>
    <?php date_default_timezone_set('Asia/Bangkok'); ?>

    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
        data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <h6 class="font-weight-bolder text-white mb-0">
                        หน้าจอหลัก
                    </h6>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                </ul>

                </ul>
            </div>
        </div>
    </nav>

</head>

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

</html>
<style>





























































































</style>