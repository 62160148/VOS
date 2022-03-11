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

.show-password i{
    user-select: none;
    top: 10px;
    right: 10px;
    position: absolute;
}

.m-65{
    padding: 15px;
    margin-right: 65px;
}

.d-n{
    display: none;
}

.img-user{
    border-radius: 184px;
    width: 300px;
    height: 300px;
    background-position: center;
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
                                    <img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg"
                                        id="output" width="400" class="img-user" />
                                    <div class="profile-pic">

                                        <label class="btn btn-outline-primary d-grid gap-2 mt-3" for="file">
                                            <span class="glyphicon glyphicon-camera"></span>
                                            <span>Change Image</span>
                                        </label>
                                        <input id="file" type="file" onchange="loadFile(event)" class="d-n"/>

                                    </div>
                                </div>


                                <div class="col-6">
                                    <form id="submit" action="">
                                        <div class="form-group">
                                            <label class="form-control-label">Student ID</label>
                                            <input class="form-control" type="text" id="student_id" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Name</label>
                                            <input class="form-control" type="text" id="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="form-control-label">Email</label>
                                            <input class="form-control" type="email" id="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password-input"
                                                class="form-control-label">Password</label>
                                                <div class=" show-password">

                                                    <input class="form-control " type="password" value="password" id="password" required>
                                                    <i class="material-icons visibility">visibility_off</i>
                                                </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-control-label">Cluster</label>
                                            <input class="form-control" type="text" id="cluster" required>
                                        </div>

                                        <label class="form-control-label">Role</label>
                                        <div id="role">

                                            <input type="radio" id="user" class="role" name="Role" value="user"  required>
                                            <label class="custom-control-label" for="customRadioInline1">User</label>

                                            <input type="radio" id="admin" class="role" name="Role" value="admin"  required>
                                            <label class="custom-control-label" for="customRadioInline1">Admin</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary submit">Submit</button>


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

$(document).ready(function(){
    $('form').submit(function(e){
        const input_student_id = $('#student_id').val()
        const input_name = $('#name').val()
        const input_email = $('#email').val()
        const input_password = $('#password').val()
        const input_cluster = $('#cluster').val()
        const input_Roler =   $('input[name=Role]:checked', '#role').val()

     console.log(input_student_id);
     console.log(input_name);
     console.log(input_email);
     console.log(input_password);
     console.log(input_cluster);
     console.log(input_Roler);
      

        if(true){
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Add User Success',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                confirmButtonColor: '#66d432',
                timer: 1500
            })
            $('#student_id').val("")
            $('#name').val("")
            $('#email').val("")
            $('#password').val("")
            $('#cluster').val("")
            $('input[name=Role]').prop('checked', false);
            // $('input[name=Role]', '#role').val("")
        }else{

        }

        e.preventDefault();
    });
});


// input_student_id.addEventListener('change', function(e) {
//     console.log(e)
// });

// btn_submit.addEventListener('click', function(e) {
//    e.def
//     console.log( $('#student_id').val())
//     Swal.fire({
//         position: 'center',
//         icon: 'success',
//         title: 'Add User Success',
//         showConfirmButton: true,
//         confirmButtonText: 'OK',
//         confirmButtonColor: '#66d432',
//         timer: 1500
//     })
// //     Swal.fire(
// //         title: 'Add User Success',
// //         icon: 'success',
// //         confirmButtonText: 'Yes, delete it!',
// // )

// });



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
