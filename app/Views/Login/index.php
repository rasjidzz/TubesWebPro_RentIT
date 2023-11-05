<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        .auth-page {
            max-width: 600px;
            margin: auto;
        }

        .card-body {
            background-color: #ed1e28;
        }

        .bg {
            background: url('Assets/loginbg.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .navbar-custom {
            height: 80px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body class="account-body bg opacity-25">
    <nav class="navbar navbar-light bg-white navbar-custom sticky-top">
        <div class="mx-auto my-0 order-0 order-md-1 position-relative">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <img src="/Assets/Logo_Rentit.png" width="150">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row vh-100">
            <div class="col-12 align-self-center mb-5">
                <div class="text-center auth-logo-text">
                    <h4>
                        Hello !
                        <br>
                        Welcome To Rent It
                    </h4>
                    <h2 class="mt-0 mb-3">SSO LOGIN</h2>
                </div>
                <div class="auth-page">
                    <div class="card-access auth-card shadow-lg bg-light w-100 rounded-3">
                        <div class="card-body rounded-3">
                            <div class="px-3">
                                <form>
                                    <div class="form-group my-3">
                                        <label for="username" class="label-access text-white mb-2">
                                            Username
                                        </label>
                                        <div class="input-group mb-3">
                                            <input id="username" type="text" placeholder="username" class="form-control " name="username" value="" required="" autocomplete="" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="userpassword" class="text-white mb-2">Password</label>
                                        <div class="input-group mb-3">
                                            <input id="password" type="password" placeholder="Password" class="form-control " name="password" value required>
                                        </div>
                                    </div>
                                    <div class="form-group row my-3">
                                        <div class="col">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label text-white" for="flexSwitchCheckDefault">Remember Me </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row my-3">
                                        <div class="col text-center">
                                            <a href="<?= base_url('/signup'); ?>" class="link-dark">Register Now</a>
                                        </div>
                                    </div>
                                    <div class="form-group  row my-3">
                                        <a class="btn btn-light btn-round btn-block text-dark" type="submit" onclick="login()">
                                            Log In
                                            <i class="bi bi-arrow-right-circle"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tex-center auth-logo-text"></div>
            </div>
        </div>
    </div>
</body>



</html>

<script>
    function login() {
        // console.log("Login");
        // $.ajax({
        //     url: '<?= site_url('/test'); ?>',
        //     method: 'GET',
        //     success: function(response) {
        //         console.log(response);
        //     }
        // })
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        console.log('username : ' + username);
        console.log('password : ' + password);
        if (username == 'test' && password == 'inipassword') {
            console.log('password benar!');
            window.location.href = '/homepage';
        } else if (username == 'user@admin' && password == 'iniadmin') {
            console.log('password benar!');
            window.location.href = '/adminpage';
        }
    }
</script>