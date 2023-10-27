<?= $this->extend('layout/template_nonAuth'); ?>

<?= $this->section('content'); ?>

<div class="container"></div>
<h1 class="text-center"> PEMBATALAN</h1>
<br><br><br>
<div class="container">
    <h3>Pesanan yang bisa dibatalkan</h3>
    <br>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pilih Fasilitas
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">namaGedung</a></li>
        </ul>
    </div>
    <br>
    <br>
    <div class="container border border-1 border-dark rounded-2 " style="display: flex; align-items: center;">
        <img src="https://i.pinimg.com/1200x/3a/0a/90/3a0a90699daccb5c837115baf5f28ca0.jpg" class="img-fluid" id="gambar_gedung" style="width: 170px; height: 130px; object-fit: cover;" alt="gedung">
        <div style="margin-left: 30px;">
            <p class="fw-bold fs-3" id="nama_gedung">Nama gedung</p>
            <p class="text-danger" id="harga_gedung">Harga</p>
        </div>
    </div>
</div>
<br>
<br>
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