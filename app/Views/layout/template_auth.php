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

    <!-- MDB -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
</head>

<style>
    .navbar-nav .nav-item .nav-link.active {
        color: #B32C30;
    }
</style>

<body>
    <div class="text-white py-2 pl-2 sticky-top" style="background-color: #b6252a;"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid gap-3 mx-2">
            <a class="navbar-brand" href="">
                <img src="/Assets/Logo_Rentit.png" style="max-width: 100px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() === 'homepage' ? 'active' : '' ?>" href="<?= base_url('/homepage') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() === 'facility' ? 'active' : '' ?>" href="<?= base_url('/facility') ?>">Facility</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Other
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <li><a class="dropdown-item" href="#">Pesanan</a></li> -->
                            <li><a class="dropdown-item" href="<?= base_url('/pembatalan') ?>">Pembatalan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/laporankerusakan') ?>">Lapor Kerusakan</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Riwayat</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="flex-shrink-0 dropdown">
                <a class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="Assets/cristiano_profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('/status') ?>">Status Pemesanan</a></li>
                </ul>
            </div>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
        </div>
    </nav>
    <!-- NAVBAR -->

    <?= $this->renderSection('content'); ?>

    <footer class="bg-dark p-3">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-center">
                    <img src="/Assets/Logo_Rentit.png" alt="Company Logo" class="img-fluid" style="max-width: 120px; height: auto;">
                </div>
                <div class="col-md-6 text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="https://www.facebook.com/telkomuniversity"><img src="/Assets/face.png" alt="" class="img-fluid" style="max-width: 30px; height: auto;"></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/telkomuniversity/"><img src="/Assets/insta.png" alt="" class="img-fluid" style="max-width: 30px; height: auto;"></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/school/telkom-university/"><img src="/Assets/Linked.png" alt="" class="img-fluid" style="max-width: 30px; height: auto;"></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/TelUniversity"><img src="/Assets/twit.png" alt="" class="img-fluid" style="max-width: 30px; height: auto;"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>