<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            /* Untuk memastikan bahwa gambar background menutupi seluruh area */
            /* Tambahan gaya CSS jika diperlukan */
        }

        .navbar-custom {
            height: 80px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="account-body bg opacity-25">
    <nav class="navbar navbar-light bg-white navbar-custom">
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
                                    <div class="form-group row mt-4">
                                        <div class="col-sm-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label text-white" for="flexSwitchCheckDefault">Remember Me </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group  row my-3">
                                        <button class="btn btn-light btn-round btn-block text-dark" type="submit">
                                            Log In
                                            <i class="bi bi-arrow-right-circle"></i>
                                        </button>
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