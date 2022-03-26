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
</style>
<div class="container-fluid py-4">
    <div class="card-header" id="card_radius">
        <!-- <div class="text-end">
            <a href='#' id='download_link' onClick='javascript:ExcelReport();' class="btn btn-secondary float-right"><i
                    class="fa fa-download"></i>&emsp;Excel</a>
        </div> -->
        <h2>Manage Event (จัดการหน้าอีเว้นท)</h2>
    </div>
    <div class="card-body">
        <div class="card-header" id="card_radius" style="background-color: #F8F8F8">
            <h4>
                รายการ Event <?php {
                                    echo "  ";
                                } ?><a class="btn icon-btn btn-info" href="<?php echo site_url() ?>Event_Management/show_event_list_detail_event">
                    <span class="glyphicon btn-glyphicon glyphicon-share img-circle text-info"></span>
                    ADD
                </a>
            </h4>
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
                        <input type="hidden"  name="EventID" value="<?php echo $arr_event[$i]->evt_id ?>">
                         
                       
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
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;  font-size: 2em;"></i>
                                </div>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
     
</div>
<script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("example").deleteRow(i);
}
</script>