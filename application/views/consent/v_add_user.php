<!--
    /*
    * v_add_user
    * Add User
    * @input -
    * @output -
    * @author Jaraspon Seallo
    * @Create date : 2565-03-10
    */
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
</head>

<style>
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');

.input-container {
    width: 60%;
    margin: 50px 10px;
    display: flex;
    align-items: center;
    border: 1px solid #aaa;
    border-radius: 3px;
}

.input-container input {
    padding: 10px;
    width: 100%;
    font-size: 16px;
    border: 0;
    outline: none;
    color: #333;
}

i {
    margin: 0 10px;
    color: #aaa;
    cursor: default;
}

.show-password {
    position: relative;
}

.show-password i {
    user-select: none;
    top: 10px;
    right: 10px;
    position: absolute;
}

.m-65 {
    padding: 15px;
    margin-right: 65px;
}

.d-n {
    display: none;
}

.img-user {
    border-radius: 184px;
    width: 300px;
    height: 300px;
    background-position: center;
}

.card-header {
    user-select: none;
}

#role {
    display: flex;
    align-items: center;
}

.input-role {
    margin: 0;
    margin-right: 20px;
    margin-left: 7px;
}

.submit {
    padding: 12px 80px;
}
</style>

<body class="g-sidenav-show   bg-gray-100">


    <div class="container-fluid py-4">
        <div class="row ">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Add User (เพิ่มข้อมูลสมาชิก)</h4>


                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-auto m-65">
                                    <div id="uploaded_image">
                                    </div>
                                    <!-- <img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg"
                                        id="output" width="400" class="img-user" /> -->
                                    <img src="http://localhost/VOS/assests/image/default-profile.jpg" id="output"
                                        width="400" class="img-user" />
                                    <div class="profile-pic">
                                        <form method="post" id="upload_image" align="center"
                                            enctype="multipart/form-data">

                                            <label class="btn btn-outline-primary d-grid gap-2 mt-3" for="image_file">
                                                <span class="glyphicon glyphicon-camera"></span>
                                                <span>Change Image</span>
                                            </label>
                                            <input id="image_file" type="file" class="d-n" name="image_file" />
                                        </form>

                                    </div>
                                </div>


                                <div class="col-6">
                                    <form id="submit" action="">
                                        <div class="form-group">
                                            <label class="form-control-label">Student ID</label>
                                            <input class="form-control" type="text" id="student_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">First Name</label>
                                            <input class="form-control" type="text" id="firstname" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Last Name</label>
                                            <input class="form-control" type="text" id="lastname" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="form-control-label">Email</label>
                                            <input class="form-control" type="email" id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password-input"
                                                class="form-control-label">Password</label>
                                            <div class=" show-password">

                                                <input class="form-control " type="password" value="password"
                                                    id="password" required>
                                                <i class="material-icons visibility">visibility_off</i>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-control-label">Cluster</label>
                                            <input class="form-control" type="text" id="cluster" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label">Score</label>
                                            <input class="form-control" type="text" id="score" required>
                                        </div>

                                        <label class="form-control-label">Role</label>
                                        <div id="role">

                                            <input type="radio" id="user" class="role" name="Role" value="1" required>
                                            <label class="custom-control-label input-role " for="user">User</label>

                                            <input type="radio" id="admin" class="role" name="Role" value="2" required>
                                            <label class="custom-control-label  input-role" for="admin">Admin</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary submit mt-4  ">Submit</button>


                                    </form>
                                </div>
                            </div>



                            <div class="card-body px-0 pt-0 pb-2">
                            </div>
                        </div>
                    </div>
                </div>


            </div>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// const btn_submit = document.querySelector('.submit');
// const input_student_id = document.querySelector('#student_id');
// const input_name = document.querySelector('#name');
// const input_email = document.querySelector('#email');
// const input_password = document.querySelector('#password');
// const input_cluster = document.querySelector('#cluster');
// const input_Roler = document.querySelector('#Role');




$(document).ready(function() {
    let url_image = ''
    $('#upload_image').on('change', function(e) {
        e.preventDefault();
        if ($('#image_file').val() == '') {
            alert("Please Select the File");
        } else {
            $.ajax({
                url: "/VOS/User_Management/upload_image",
                //base_url() = http://localhost/tutorial/codeigniter
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    let res = JSON.parse(data)
                    console.log('data :>> ', '<?php echo base_url(); ?>');
                    $('#output').attr("src", '<?php echo base_url(); ?>' + res.url);
                    url_image = res.url
                    console.log('url_image :>> ', url_image);
                }
            });
        }
    });





    $('form').submit(function(e) {
        e.preventDefault();

        const input_student_id = $('#student_id').val()
        const input_firstname = $('#firstname').val()
        const input_lastname = $('#lastname').val()
        const input_email = $('#email').val()
        const input_password = $('#password').val()
        const input_cluster = $('#cluster').val()
        const input_score = $('#score').val()
        const input_roler = $('input[name=Role]:checked', '#role').val()

        $.ajax({
            url: "/VOS/User_Management/add_user",
            type: "post",
            data: {
                input_student_id,
                input_firstname,
                input_lastname,
                input_email,
                input_password,
                input_cluster,
                input_score,
                input_roler,
                input_image: url_image
            },
            success: function(response) {
                let res = JSON.parse(response)
                console.log('response :>> ', response);
                if (res?.status) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Add User Success',
                        showConfirmButton: true,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#66d432',

                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.replace('/VOS/User_Management/show_user_management')
                        }
                    })
                    $('#student_id').val("")
                    $('#firstname').val("")
                    $('#lastname').val("")
                    $('#email').val("")
                    $('#password').val("")
                    $('#cluster').val("")
                    $('#score').val("")
                    $('input[name=Role]').prop('checked', false);

                    $('#output').attr("src", '<?php echo base_url(); ?>' +
                        "assests/image/default-profile.jpg");
                  
                    // $('input[name=Role]', '#role').val("")
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Add User Error',
                        text: res?.mess,
                        showConfirmButton: false,
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#66d432',
                        timer: 5000
                    })
                }


                // You will get response from your PHP page (what you echo or print)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Add User Error',
                    showConfirmButton: false,
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#66d432',
                    timer: 1500
                })
                console.log(textStatus, errorThrown);
            }
        });



    });
});




const visibilityToggle = document.querySelector('.visibility');

const input = document.querySelector('.show-password input');

var password = true;

visibilityToggle.addEventListener('click', function() {
    if (password) {
        input.setAttribute('type', 'text');
        visibilityToggle.innerHTML = 'visibility';
    } else {
        input.setAttribute('type', 'password');
        visibilityToggle.innerHTML = 'visibility_off';
    }
    password = !password;

});
</script>

</html>