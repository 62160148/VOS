<style>
table {
    text-align: center;
    align-items: center;
}

.btn-glyphicon {
    padding: 8px;

    margin-right: 4px;
}

.icon-btn {
    padding: 1px 15px 3px 2px;
    border-radius: 50px;
}


.image-cropper {
    width: 50px;
    height: 50px;
    position: relative;
    overflow: hidden;
    border-radius: 50%;
}

img {
    display: inline;
    margin: 0 auto;
    height: 100%;
    width: auto;
}
.btn-sm{
    margin-bottom: 0!important;
    border-radius: 1rem!important;
}
button{
    border :0px!important;
}
.btn {
    display: unset!important;
}
</style>
<body class="g-sidenav-show   bg-gray-100">
  <!-- <div class="min-height-300 bg-primary position-absolute w-100"></div> -->
  <main class="main-content position-relative border-radius-lg ">
      <div class="container-fluid py-4 ">
        <div class="row">
          <!-- <div class="col-12"> -->
          <div class="card mb-4">
            <!-- ปุ่มดำเนินการเพิ่ม -->
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-2 shadow-none border-radius-xl " id="navbarBlur" navbar-scroll="true">
              <div class="container-fluid py-2 px-1">
              <h3>Manage Event </h3>




              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <div class="input-group">
                    <!-- Button  -->
                    <a href="<?php echo site_url() ?>Event_Management/show_event_list_detail_event">
                      <button type="button" class="btn bg-gradient-info btn-block mb-3">
                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Add Event
                      </button>
                    </a>
                  </div>
                </div>
              </div>
  
              </div>
            </nav>
 
            <div class="table-responsive">
                <table class="table" style="width:100%" id="example">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Open</th>
                            <th>Close</th>
                            <th>Member</th>
                            <th>Edit</th>
                            <th>Del</th>
                        </tr>
                    </thead>
                    <tbody>
                   

                        <?php
                        $No = 1;
                        for ($i = 0; $i < count($arr_event); $i++) { ?>
                <form  action="<?php echo site_url() ?>Event_Management/show_event_list_detail_member" method="post" enctype="multipart/form-data" name="event">
                <input type="hidden"  name="event_id" value="<?php echo $arr_event[$i]->evt_id ?>">
                         
                       
                        <tr>
                            <td style='text-align:center'>
                                <?php {
                                        echo $No++;
                                    } ?></td>

                            <td>
                                <!-- <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 0</div> -->
                                <img class="image-cropper"
                                    src="../assests/image/event/<?php echo $arr_event[$i]->evt_image ?>"
                                    alt="Card image cap" width="800px"><br><br>
                            <td> <?php {
                                            echo $arr_event[$i]->evt_start_date;
                                        } ?></td>
                            <td> <?php {
                                            echo $arr_event[$i]->evt_end_date;
                                        } ?></td>
                            <td>  <button class="btn btn-info btn-sm" type="submit">
                
               + Member</button>
                       </td> 
                            <td><button style="background-color: #F8F8F8"  type="submit">
                 </form>
                <i class='fa fa-edit' style="font-size: 2em; color:#cfb017;"></i></button>  </form></td>
                            <td>
                            
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#ModalDeleteevent<?php echo $i?>">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                             <!-- Start modal delete event -->
                                        <div class="modal fade" id="ModalDeleteevent<?php echo $i; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="ModalDeleteeventTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="col-12 text-end">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="py-3 text-center">
                                                        <div>
                                                            <i class="fas fa-exclamation-triangle fa-8x"
                                                                style="color:#FBD418"></i>
                                                        </div>
                                                        <h4 class="text-gradient text-danger mt-4">
                                                            Confirm Delete ?
                                                            
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- ปุ่มยกเลิกการลบ -->
                                                    <a href="">
                                                        <button type="button" class="btn bg-gradient-danger"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                    </a>
                                                    <!-- ปุ่มยืนยันการลบ -->
                                                    <a
                                                        href="<?php echo base_url().'Event_Management/event_management_delete_event/'.$arr_event[$i]->evt_id ?>">
                                                        <button type="button"
                                                            class="btn bg-gradient-success">Confirm</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End modal delete event -->
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    </div>  
</div>

</main>
                                    </body>
<script>
 
</script>