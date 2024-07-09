<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!-- Sidebar -->
    @include('sidebar')

    

        <!-- Page Content -->
        <div style="width: 75%;">
            <div class="bg-teal p-3">
                <h1>Arsip Surat >> Lihat</h1>
                <p>Nomor:</p>
                <p>Kategori:</p>
                <p>Judul:</p>
                <p>Waktu Unggah:</p>

            </div>

            <embed src="nama_file.pdf" type="application/pdf" width="100%" height="500px" />


            <a href="/Kategori_Surat" class="btn btn-secondary"><< Kembali</a>
            <a href="/Kategori_Surat" class="btn btn-secondary">Unduh</a>
            <a href="/Kategori_Surat" class="btn btn-secondary">Edit/Ganti File</a>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
