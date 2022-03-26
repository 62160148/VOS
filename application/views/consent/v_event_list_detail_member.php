<!DOCTYPE html>
<html lang="en">

<head> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>
</script>
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
</style>
</head>

<!-- Data Table -->
 
<!-- End Data Table -->

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
              <h2>Manage Event </h2>
     
              </div>
            </nav>
            <!-- End Navbar -->
        
            <div class="card-header pb-0 ">
               
              <h2>รายการอีเว้นท์</h2>
              <h3>ข้อมูล Event ที่ต้องการเพิ่มมกุล</h3>
              <div class="row">
                <div class="col-md-6">
              
                <form  action="<?php echo site_url() ?>Event_Management/event_management_update_event" method="post" enctype="multipart/form-data" name="event" >
                <input type="hidden"   name="event_id" value="<?php echo $event_id ?>";>
                <b> Event Name :
                <input type="text" class="form-control"   value = " <?php echo $event[0]->evt_name ?>" name="event_name" required>
                Detail :
                <textarea type="text" class="form-control" placeholder="รายละเอียด" name="event_detail" ><?php echo $event[0]->evt_detail ?>
                </textarea> 
            <div class="row">       
                <div class="col-md-6">
            Start Date :
            
            
            <?php $fulldate = $event[0]->evt_start_date;   $time =  substr($fulldate,11);  $date =  substr($fulldate,0,10);  ?>
            <input class="form-control" type="datetime-local" value="<?php echo  $date."T".$time ?>"  name="event_start_date"required> 
            </div><div class="col-md-6">
            End Date :
            <?php $fulldate = $event[0]->evt_end_date;   $time =  substr($fulldate,11);  $date =  substr($fulldate,0,10);  ?>
            <input class="form-control" type="datetime-local" value="<?php echo  $date."T".$time ?>" name="event_end_date"  required>
         </div>
            </div>
            <!-- Create By :
              <input type="text" class="form-control" placeholder="นายกท่านหนึ่ง"  value = "นายกท่านหนึ่ง">
              Create Date  :
        <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" > -->
                </b>
                <br> 
                <h4> ตัวเลือก  
                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ModalAddchoice">
                <i class="fa fa-plus" aria-hidden="true"></i>
                เพิ่มตัวเลือก</button></h4><br>
            </tbody>
            <table class="table   " style="width : 100% " id="example ">
                         <!-- หัวตาราง  -->

                         <?php if(count($event_choice)!=0){?>
                        <tr>
                            <th class="text-center"  style="width: 15%">#</th>
                            <th style="width:70%">Choice</th>
                            
                            <th class="text-center"style="width :15%">Del</th>
                        </tr>
                        <?php }?>
                    <!-- เนื้อหาตาราง  -->
                    
                    <?php for( $i=0;$i<count($event_choice);$i++){ ?>
                        <tr>
                            <td class="text-center"><?php echo   $i +1 ?></td>
                            <td>
                                <div class="image-cropper">
                                <?php echo $event_choice[$i]->top_name;?></div>
                            </td>

                            <td class="text-center">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#ModalDeletechoice<?php echo $i?>">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            
                            </td>
                        </tr>
                                        <!-- Start modal delete choice -->
                                        <div class="modal fade" id="ModalDeletechoice<?php echo $i; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="ModalDeletechoiceTitle" aria-hidden="true">
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
                                                        href="<?php echo base_url().'Event_Management/event_management_delete_choice/'.$event_choice[$i]->top_id; ?>">
                                                        <button type="button"
                                                            class="btn bg-gradient-success">Confirm</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End modal delete group assessor -->
                    <?php } ?> </table>
        </div>
                <!-- หัวข้อเพิ่มมกุล --> 
                <div class="col-md-6">
                <div class="container-fluid py-4 " >
                <h4> มกุล    
                <!-- ปุ่มเพิ่มมกุล -->
                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ModalAddGroup">
                <i class="fa fa-plus" aria-hidden="true"></i>
                เพิ่มมกุล</button></h4>
                <div class="card-body ">
                <!-- ตารางมกุล -->
                <table class="table   " style="width : 100% " id="example ">
                         <!-- หัวตาราง  -->
                         <?php if($amount_cluster[0]->numclus!=0){?>
                        <tr>
                            <th class="text-center"  style="width: 15%">#</th>
                            <th style="width:70%">Cluster</th>
                            
                            <th class="text-center"style="width :15%">Del</th>
                        </tr>
                        <?php }?>
                    <!-- เนื้อหาตาราง  -->
                    
                    <?php for( $i=0;$i<$amount_cluster[0]->numclus;$i++){ ?>
                        <tr>
                            <td class="text-center"><?php echo   $i +1 ?></td>
                            <td>
                                <div class="image-cropper">  <?php echo $cluster[$i]->cls_name ?></div>
                            </td>

                            <td class="text-center">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#ModalDeleteGroup<?php echo $i; ?>">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            
                            </td>
                        </tr>
                                        <!-- Start modal delete group assessor -->
                                        <div class="modal fade" id="ModalDeleteGroup<?php echo $i; ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="ModalDeleteGroupTitle" aria-hidden="true">
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
                                                    
                                                        href="<?php echo base_url().'Event_Management/event_management_delete_member/'.$cluster[$i]->grp_cls_id; ?>">
                                                        <button type="submit"
                                                            class="btn bg-gradient-success">Confirm</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End modal delete group assessor -->
                    <?php } ?>

                </table>
                
                </div>
            </div>
            </div>

            
                

            </div>
            <center>
            <button class="btn btn-primary" type="submit">
                
                Save Data</button>
</center></form>
            </div>
        </div></div></div>

</main>
</body>
</html>


<!-- Start modal add group assessor -->
<div class="modal fade" id="ModalAddGroup" tabindex="-1" role="dialog" aria-labelledby="ModalAddGroupTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAddGroupLabel">เพิ่มมกุล</h5>&nbsp;
                <i class="fas fa-user-plus fa-1x"></i>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url() ?>Event_Management/event_management_insert_member" method="post" enctype="multipart/form-data" name="event">
                    <input type="hidden"   name="event_id" value="<?php echo $event_id ?>";>
                    <select id="select-state" placeholder="เลือกมกุล..." name="newmemeber">
                        <option value="">Select a state...</option>
                        <?php for( $i=0;$i<count($cluster_not_in);$i++){ ?>
                            <option value="<?php echo $cluster_not_in[$i]->cls_id;?>"><?php echo $cluster_not_in[$i]->cls_name;?>
                            <?php } ?>
                    </select>

            </div>
            <div class="modal-footer">
                <!-- ปุ่มปิด modal -->
                <a href="">
                    <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
                </a>
                <!-- ปุ่มบันทึก -->
                <a href="">
                    <button type="Submit" class="btn bg-gradient-success">Submit</button>
                </a>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Start modal add group assessor -->
<div class="modal fade" id="ModalAddchoice" tabindex="-1" role="dialog" aria-labelledby="ModalAddchoiceTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalAddchoiceLabel">เพิ่มตัวเลือก</h5>&nbsp;
                <i class="fas fa-user-plus fa-1x"></i>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url() ?>Event_Management/event_management_insert_choice" method="post" enctype="multipart/form-data" name="event">
                    <input type="hidden"   name="event_id" value="<?php echo $event_id ?>";>
                    ตัวเลือก :
                    <input type="text"   name="newchoice" placeholder="เพิ่มตัวเลือก">

            </div>
            <div class="modal-footer">
                <!-- ปุ่มปิด modal -->
                <a href="">
                    <button type="button" class="btn bg-gradient-danger" data-bs-dismiss="modal">Close</button>
                </a>
                <!-- ปุ่มบันทึก -->
                <a href="">
                    <button type="Submit" class="btn bg-gradient-success">Submit</button>
                </a>
                </form>
            </div>
        </div>
    </div>
</div>





<script>
 

</script>