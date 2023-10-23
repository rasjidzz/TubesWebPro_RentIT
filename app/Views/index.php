<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container"></div>
    <h1 class="text-center"> PEMBATALAN</h1>
    <br><br><br>
    <div class="container">
        <h3>Pesanan yang bisa dibatalkan</h3>
        <br>
        <div class="container border border-1 border-dark rounded-2">
            <img src="https://i.pinimg.com/1200x/3a/0a/90/3a0a90699daccb5c837115baf5f28ca0.jpg" class="img-fluid img-thumbnail " alt="">
        </div>
    </div>
    <br>
    <section>
        <div class="container border border-1 border-dark rounded-2" style="height: 350px;">
            <h3 id="upload" class="text-center mb-5 fw-normal">Upload Dokumen Pendukung</h3>
            <div class="dropArea" style="position: relative; border: 2px dashed #ccc; padding: 20px; text-align: center; height:150px;">
                <input class="file-input" type="file" accept=".pdf, .docx" id="fileInput" multiple style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                <i id="logoDL" class="fs-1 mdi mdi-arrow-down-box mt-3"></i>
                <br>
                <label for="fileInput" id="inputFile">Click Here Or Drag To Choose Your Files</label>
                <p id="fileList" style="font-size: 14px; display: none;"></p>
            </div>
            <p id="acc" style="font-size: 12px; color:darkgrey;">Accepted File: .pdf .docx</p>
            <form action="" id="tombol">
                <button class="btn btn-danger mt-3" type="submit">Ajukan Permintaan</button>
            </form>
        </div>
    </section>
    </div>
</body>

</html>