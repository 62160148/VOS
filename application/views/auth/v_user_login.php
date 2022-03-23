<!--
    /*
    * v_user_login
    * login page
    * @input username & password
    * @output -
    * @author Chakrit Boonrpasert
    * @Create date : 2565-03-19
    */
-->
<!-- CSS -->
<style>
    *,
    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        /* adding: 0; */
    }

    body {
        background: #435363;
        -webkit-animation: bg 5s infinite alternate;
        -moz-animation: bg 5s infinite alternate;
        -o-animation: bg 5s infinite alternate;
        animation: bg 5s infinite alternate;
        /* background-image: linear-gradient(#A29BFE, #6C5CE7);
        background-repeat: no-repeat;
        background-attachment: fixed; */
        height: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        color: white;
        /* font-family: 'Chakra Petch';
        font-size: 14px; */
        font-family: "Montserrat", sans-serif;
        font-size: 14px;
        justify-content: center;
    }

    @-webkit-keyframes bg {
        0% {
            background: #984D6F;
        }

        100% {
            background: #435363;
        }
    }

    @-moz-keyframes bg {
        0% {
            background: #984D6F;
        }

        100% {
            background: #435363;
        }
    }

    @-o-keyframes bg {
        0% {
            background: #984D6F;
        }

        100% {
            background: #435363;
        }
    }

    @keyframes bg {
        0% {
            background: #984D6F;
        }

        100% {
            background: #435363;
        }
    }

    a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        outline: none;
        transition: all 0.2s;
    }

    a:hover,
    a:focus {
        color: #fdc654;
        transition: all 0.2s;
    }

    html {
        height: 100%;
    }

    .login-card {
        padding: 32px 32px 0;
        box-sizing: border-box;
        text-align: center;
        width: 100%;
        display: flex;
        height: 100%;
        max-height: 740px;
        max-width: 350px;
        flex-direction: column;
    }

    .login-card-content {
        flex-grow: 2;
        justify-content: center;
        display: flex;
        flex-direction: column;
    }

    .login-card-footer {
        padding: 32px 0;
    }

    h2 .highlight {
        /* color: #fdc654; */
        color: #FFF;
        text-shadow: rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 1px 0, rgba(0, 0, 0, 0.6) 0 1px, rgba(0, 0, 0, 0.6) 0 1px;
    }

    h2 {
        font-size: 32px;
        margin: 0;
    }

    h3 {
        color: #d61e2d;
        font-size: 14px;
        line-height: 18px;
        margin: 0;
    }

    .header {
        margin-bottom: 50px;
    }

    .logo {
        border-radius: 40px;
        width: 200px;
        height: 200px;
        display: flex;
        justify-content: center;
        margin: 0 auto 16px;
        background: rgba(255, 255, 255, 0.1);
        align-items: center;
    }

    button {
        background: white;
        display: block;
        color: #d61e2d;
        width: 100%;
        border: none;
        border-radius: 40px;
        padding: 12px 0;
        text-transform: uppercase;
        font-weight: bold;
        margin-bottom: 32px;
        outline: none;
    }

    .form-field {
        margin-bottom: 16px;
        width: 100%;
        position: relative;
    }

    .form-field .icon {
        position: absolute;
        background: white;
        color: #d61e2d;
        left: 0;
        top: 0;
        display: flex;
        align-items: center;
        height: 100%;
        width: 40px;
        height: 40px;
        justify-content: center;
        border-radius: 20px;
    }

    .form-field .icon:after {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border: 12px solid transparent;
        border-left: 12px solid white;
        position: absolute;
        top: 8px;
        right: -20px;
    }

    .form-field input {
        border: 1px solid rgba(255, 255, 255, 0.2);
        text-align: center;
        width: 100%;
        border-radius: 16px;
        height: 36px;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        outline: none;
        transition: all 0.2s;
    }

    .form-field input::placeholder {
        color: white;
    }

    .form-field input:hover,
    .form-field input:focus {
        background: white;
        color: #d61e2d;
        transition: all 0.2s;
    }

    .form-field input:hover::placeholder {
        color: #d61e2d;
    }

</style>
<!-- End CSS -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
        function login() { //login user
            $.ajax({
                type: 'POST',
                url: '<?php echo site_url() . 'Login/login' ?>',
                data: {
                    user_name: $('#user_name').val(),
                    user_password: $('#user_password').val()
                },
                success: function(data, status) { // function success
                    var obj = JSON.parse(data)
                    if (obj.length != 0) {
                        setTimeout(function() {
                            window.location.href =
                                '<?php echo site_url() . 'Login/show_user_home/' ?>' + obj.user_per_id
                        }, 500) //function set
                    } //if
                    else {
                        alert('You entered incorrect information.')
                    } //else
                }, //end success
                error: function(status) { //function error
                    alert('You entered incorrect information.')
                } //end error
            });

        } //end login user

    </script>
</head>

<!-- Start HTML -->
<div class="login-card">
    <div class="login-card-content">
        <div class="header">
            <div class="logo">
                <img src=<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\vote.png' ?> width="150" height="150">
            </div>
            <h2><span class="highlight">Vote Online System</span></h2>
        </div>
        <div class="form">
            <div class="form-field username">
                <div class="icon">
                    <i class="far fa-user"></i>
                </div>
                <input type="text" placeholder="Username" id="user_name" required>
            </div>
            <div class="form-field password">
                <div class="icon">
                    <i class="fas fa-lock"></i>
                </div>
                <!-- <div class="show-password"> -->
                    <input type="password" placeholder="Password" id="user_password" required>
                    <!-- <i class="material-icons visibility" id="togglePassword"></i> -->
                <!-- </div> -->
            </div>
            <br>
            <button type="submit" onclick='login()'>
                Login
            </button>
        </div>
    </div>
    <div class="login-card-footer">
        <p class="mb-0 text-secondary">
            Copyright © <script>
                document.write(new Date().getFullYear())
            </script> VOS by <img src=<?php echo base_url() . 'assests\template\argon-dashboard-master\assets\img\Logo_Team_6_v2.png' ?> width="35" height="35">| Team 6
        </p>
    </div>
</div>

<script>
    document.getElementsByTagName("h1")[0].style.fontSize = "80px";
</script>