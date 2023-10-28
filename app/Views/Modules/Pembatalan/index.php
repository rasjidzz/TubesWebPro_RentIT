<?= $this->extend('layout/template_Auth'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid"></div>
<h1 class="text-center font-family-Open Sans fw-bold"> PEMBATALAN</h1>
<br><br><br>
<div class="container">
    <h3 class="font-family-Open Sans fw-bold">Pesanan yang bisa dibatalkan</h3>
    <br>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Fasilitas
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">namaGedung</a></li>
        </ul>
    </div>
    <div class="card mb-3 mt-5">
        <div class="row g-0">
            <div class="col-6 col-md-2">
                <img src="https://i.pinimg.com/1200x/3a/0a/90/3a0a90699daccb5c837115baf5f28ca0.jpg" class="card-img" id="gedung_bayar" style="height: 160px; object-fit: cover;" alt="gedung">
            </div>
            <div class="col-6 col-md-10">
                <div class="card-body">
                    <h5 class="card-title fs-2 font-family-Open Sans" id="nama_bayar">Momo Hirai</h5>
                    <br>
                    <p class="card-text text-danger font-family-Open Sans" id="harga_bayar">🧡🧡</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<section>
    <div class="container border border-1 border-dark rounded-2" style="height: 350px;">
        <h3 id="upload" class="text-center mb-5 fw-normal font-family-Open Sans">Upload Dokumen Pendukung</h3>
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

<script>
    const dropArea = document.querySelector(".dropArea");
    const inputFile = document.querySelector("#fileInput");
    const inputFileLabel = document.querySelector("label[for='fileInput']");
    const fileList = document.querySelector("#fileList");
    const selectedFiles = []; // Menyimpan file yang telah dipilih

    dropArea.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropArea.style.backgroundColor = "#f7f7f7";
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.style.backgroundColor = "transparent";
    });

    dropArea.addEventListener("drop", (e) => {
        e.preventDefault();
        dropArea.style.backgroundColor = "transparent";

        const files = e.dataTransfer.files;

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                selectedFiles.push(files[i]); // Menyimpan file ke dalam array
            }

            displaySelectedFiles();

            console.log(selectedFiles);
        }
    });

    inputFile.addEventListener("change", () => {
        const files = inputFile.files;

        if (files.length > 0) {
            for (let i = 0; i < files.length; i++) {
                selectedFiles.push(files[i]); // Menyimpan file ke dalam array
            }

            displaySelectedFiles();
        }

        console.log(selectedFiles);
    });

    function displaySelectedFiles() {
        inputFileLabel.style.display = "none";
        fileList.style.display = "block";
        fileList.innerHTML = ""; // Membersihkan daftar sebelum menambahkan kembali

        for (let i = 0; i < selectedFiles.length; i++) {
            const fileItem = document.createElement("div");
            fileItem.innerText = selectedFiles[i].name;
            fileItem.style.marginBottom = "5px";
            fileItem.style.fontSize = "13px";
            fileList.appendChild(fileItem);
        }

        document.getElementById("logoDL").style.display = "none";
    }
</script>

<?= $this->endSection(); ?>