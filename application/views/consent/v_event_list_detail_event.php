<!DOCTYPE html>
<html lang="en">

<head> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
table, th, td   {
    border: 1px solid #d2d6da !important; 
    box-shadow: 1px 1px;
}
.btn-sm{
    margin-bottom: 0!important;
    border-radius: 1rem!important;
}
img {
    border-radius: 50%;
}

#event_image {
    border: 1px solid #d2d6da !important; 
     
}

</style>
</head>
<body class="g-sidenav-show   bg-gray-100">
    <main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4 ">   
        <div class="row">
        <!-- <div class="col-12"> -->
        <div class="card mb-4">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-2 shadow-none border-radius-xl " id="navbarBlur" navbar-scroll="true">
                <div class="container-fluid py-2 px-1">
                    <h2>Manage Event (จัดการหน้าอีเว้นท์)</h2>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- รายการอีเว้นท์  -->
            <div class="card-header pb-0 ">
                <h2>รายการอีเว้นท์</h2>
                <h3>Form Add Event</h3>
                <form  action="<?php echo site_url() ?>Event_Management/Event_Management_insert_event" method="post" enctype="multipart/form-data" name="event">
                <div class="row">
                    <div class="col-md-6">
                    <!-- แบบฟอร์ม  -->
                    
                        <!-- คำพิมพ์ใหญ่ -->
                        <b> Event Name :
                        <input type="text" class="form-control"   placeholder="ชื่อหัวข้อโหวต" name="event_name" required>
                        Detail :
                        <textarea type="text" class="form-control" placeholder="รายละเอียด" name="event_detail" required></textarea> 
                        <div class="row">
                            <div class="col-md-6">
                                Start Date :
                                <input class="form-control" type="datetime-local"  name="event_start_date"required >
                                </div><div class="col-md-6">
                                End Date :
                                <input class="form-control" type="datetime-local" name="event_end_date" required>
                            </div>
                        </div>
                        <?php date_default_timezone_set("Asia/Bangkok"); $datenow= date("Y-m-d")."T".date("H:i:s")?>
                        <!-- Create By :
                        <input type="text" class="form-control"  value = "<?php echo $per_event[0]->per_name." ".$per_event[0]->per_lastname ?>" disabled>
                        Create Date  :
                        <input class="form-control" type="datetime-local"  name="event_create_date"  value = "<?php echo  $datenow?>" disabled>   -->
                        Image Cover :
                        <div>
                        <input type="file" name="event_image" id="event_image" accept="image/*"></div>
                        </b>
                        <br>
                        </div>
                        <center>
                        <button class="btn btn-primary" type="submit">
                        Add Data</button>
                        </center> </form>
            </div>
        </div>
        </div>
    </div>
    </main>               
</body>
</html>
<script>
//script
</script>