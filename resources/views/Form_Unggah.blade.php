
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Arsip Surat >> Unggah</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <p>Lorem Ipsum is simply dummy</p>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nomor_surat">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="kategori1">Kategori 1</option>
                                <option value="kategori2">Kategori 2</option>
                                <option value="kategori3">Kategori 3</option>
                                <!-- Tambahkan opsi kategori sesuai kebutuhan -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="file">File:</label>
                                    <input type="file" class="form-control" id="file" name="file" placeholder="File">
                                    <small>masukkan file pdf</small>
                        </div>
                        <br>
                        <a href="/" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
```

