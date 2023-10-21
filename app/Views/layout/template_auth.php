<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    .navbar-nav .nav-item .nav-link.active {
        color: #B32C30;
    }
</style>

<body>
    <div class="text-white py-2 pl-2" style="background-color: #b6252a;"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
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
                            <li><a class="dropdown-item" href="#">Pesanan</a></li>
                            <li><a class="dropdown-item" href="#">Pembatalan</a></li>
                            <li><a class="dropdown-item" href="#">Lapor Kerusakan</a></li>
                            <li><a class="dropdown-item" href="#">Riwayat</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer class="bg-dark p-3 fixed-bottom">
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>