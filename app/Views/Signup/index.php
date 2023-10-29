<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    <style>
        #login {
            color: black;
            text-decoration: none;
        }

        #login:hover {
            text-decoration: underline;
            color: black;
            transition: 0.1ms ease;
        }

        .signUp {
            background: url('Assets/loginbg.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>

<body class="signUp">
    <nav class="navbar navbar-light bg-white navbar-custom sticky-top shadow">
        <div class="mx-auto my-3 order-0 order-md-1 position-relative">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <img src="/Assets/Logo_Rentit.png" width="150">
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <h2 class="card-title text-center mt-3 mb-4">Register Account</h2>
                    <div class="card-body">
                        <form>
                            <div class="input-group py-2">
                                <div class="input-group-text">
                                    <i class="mdi mdi-badge-account-horizontal"></i>
                                </div>
                                <input type="text" class="form-control shadow-sm" id="name" placeholder="Name">
                            </div>
                            <div class="input-group py-2">
                                <div class="input-group-text">
                                    <i class="mdi mdi-email"></i>
                                </div>
                                <input type="email" class="form-control shadow-sm" id="email" placeholder="Email">
                            </div>
                            <div class="input-group py-2">
                                <div class="input-group-text">
                                    <i class="mdi mdi-lock"></i>
                                </div>
                                <input type="password" class="form-control shadow-sm" id="password" placeholder="Password">
                            </div>
                            <div class="input-group py-2">
                                <div class="input-group-text">
                                    <i class="mdi mdi-lock-check"></i>
                                </div>
                                <input type="password" class="form-control shadow-sm" id="R_password" placeholder="Retype Password">
                                <div class="invalid-feedback" id="passwordMismatchMsg">Password Anda Harus Sama!</div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <a href="<?= base_url('/login') ?>" class="mt-2 ms-1" id="login">Login</a>
                                <button class="btn btn-danger">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>