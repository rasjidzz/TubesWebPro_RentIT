<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/62f756257e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body style="background-color: #EDF0F5;">
    <div class="text-white py-2 pl-2 sticky-top" style="background-color: #b6252a;"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container-fluid gap-3 mx-2">
            <a class="navbar-brand" href="">
                <img src="/Assets/Logo_Rentit.png" style="max-width: 100px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="flex-shrink-0 dropdown ">
                <a class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="Assets/cristiano_profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center mt-3">
        <div class="row">
            <div class="col-lg-3" id="approved">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center text-start">
                                    <h5>3</h5>
                                    <p class="text-muted mb-0">Approved</p>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-account-check" style="font-size: 40px; color: green"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="submission">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center text-start">
                                    <h5>5</h5>
                                    <p class="text-muted mb-0">Submission</p>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-file-account" style="font-size: 40px; color: #0366e4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="rejected">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center text-start">
                                    <h5>0</h5>
                                    <p class="text-muted mb-0">Declined</p>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-account-remove" style="font-size: 40px; color: red"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow-sm" id="damaged">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center text-start">
                                    <h5>0</h5>
                                    <p class="text-muted mb-0">Damage report</p>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-account-alert" style="font-size: 40px; color: black"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3" id="cancellation">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="icon-contain">
                            <div class="row">
                                <div class="col-8 align-self-center text-start">
                                    <h5>1</h5>
                                    <p class="text-muted mb-0">Cancellation</p>
                                </div>
                                <div class="col-4">
                                    <i class="mdi mdi-account-cancel" style="font-size: 40px; color: #980700"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>