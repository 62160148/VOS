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
                                    <form>
                                        <div class="form-group">
                                            <label class="form-control-label">Student ID</label>
                                            <input class="form-control" type="text" id="student_id">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label">Name</label>
                                            <input class="form-control" type="text" id="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="example-email-input" class="form-control-label">Email</label>
                                            <input class="form-control" type="email" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password-input"
                                                class="form-control-label">Password</label>
                                                <div class=" show-password">

                                                    <input class="form-control " type="password" value="password" id="password">
                                                    <i class="material-icons visibility">visibility_off</i>
                                                </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-control-label">Cluster</label>
                                            <input class="form-control" type="text" id="cluster">
                                        </div>

                                        <label class="form-control-label">Role</label>
                                        <div>

                                            <input type="radio" id="User" name="User">
                                            <label class="custom-control-label" for="customRadioInline1">User</label>

                                            <input type="radio" id="Admin" name="Admin">
                                            <label class="custom-control-label" for="customRadioInline1">Admin</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
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

</html>

<script>
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
