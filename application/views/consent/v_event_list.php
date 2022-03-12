<style>
table {
    text-align: center;
    align-items: center;
}

/* 
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
} */
</style>
<div class="container-fluid py-4">
    <div class="card-header" id="card_radius">
        <div class="text-end">
            <a href='#' id='download_link' onClick='javascript:ExcelReport();' class="btn btn-secondary float-right"><i
                    class="fa fa-download"></i>&emsp;Excel</a>
        </div>
        <h2>Manage Event (จัดการหน้าอีเว้นท)</h2>
    </div>
    <div class="card-body">
        <div class="card-header" id="card_radius" style="background-color: #F8F8F8">
            <h4>
                รายการ Event
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
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 0</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 1</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 2</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 3</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 4</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 5</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 6</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 7</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 8</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>
                                <div class="image-cropper"><img
                                        src="https://int-studentblog.dtu.dk/-/media/subsites/int-studentblog/group-work/2015_08_22_dtu_introdag_0135_web-72dpi_2.jpg?h=627&la=da&mw=940&w=940&hash=E7E705F39561142F1337B58AED4FF06E9AB62967"
                                        width="50" height="50"> มกุล 9</div>
                            </td>
                            <td>11/3/2021 13:00:00</td>
                            <td>11/3/2021 17:00:00</td>
                            <td> <i class='fa-solid fa-plus'></i></td>
                            <td><i class='fa fa-edit' style="color:#cfb017;"></i></td>
                            <td>
                                <div onclick="deleteRow(this)">
                                    <i class='fa fa-trash' style="color: red;"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <center><a href="<?php echo site_url() . 'Report/Report/show_report_all'; ?>"
                class="btn btn-secondary float-center"><i class="fas fa-arrow-alt-circle-left"></i> Back</a></center>
    </div>
</div>
<script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("example").deleteRow(i);
}
</script>