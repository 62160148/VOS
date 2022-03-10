<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
</head>

<style>
@mixin object-center {
    display: flex;
    justify-content: center;
    align-items: center;
}

$circleSize: 165px;
$radius: 100px;
$shadow: 0 0 10px 0 rgba(255, 255, 255, .35);
$fontColor: rgb(250, 250, 250);

.profile-pic {
    color: transparent;
    transition: all .3s ease;
    @include object-center;
    position: relative;
    transition: all .3s ease;

    input {
        display: none;
    }

    img {
        position: absolute;
        object-fit: cover;
        width: $circleSize;
        height: $circleSize;
        box-shadow: $shadow;
        border-radius: $radius;
        z-index: 0;
    }

    .-label {
        cursor: pointer;
        height: $circleSize;
        width: $circleSize;
    }

    &:hover {
        .-label {
            @include object-center;
            background-color: rgba(0, 0, 0, .8);
            z-index: 10000;
            color: $fontColor;
            transition: background-color .2s ease-in-out;
            border-radius: $radius;
            margin-bottom: 0;
        }
    }

    span {
        display: inline-flex;
        padding: .2em;
        height: 2em;
    }
}

/////////////////////////
// Body styling 🐾
/////////---------->

body {
    height: 100vh;
    background-color: rgb(25, 24, 21);
    @include object-center;

    a:hover {
        text-decoration: none;
    }
}
</style>

<body class="g-sidenav-show   bg-gray-100">


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>Add User (เพิ่มข้อมูลสมาชิก)</h4>


                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="https://cdn.pixabay.com/photo/2017/08/06/21/01/louvre-2596278_960_720.jpg"
                                        id="output" width="400" />
                                    <div class="profile-pic">
                                        <label class="-label" for="file">
                                            <span class="glyphicon glyphicon-camera"></span>
                                            <span>Change Image</span>
                                        </label>
                                        <input id="file" type="file" onchange="loadFile(event)" />

                                    </div>
                                </div>


                                <div class="col">
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
                                            <input class="form-control " type="password" value="password" id="password">
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
var loadFile = function(event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};
</script>