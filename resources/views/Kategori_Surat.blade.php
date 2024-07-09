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
                <h1>Kategori Surat</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <div class="container mt-5">
                <div class="d-flex justify-content-center">
                    <div class="input-group mb-3" style="max-width: 700px;">
                      <span class="input-group-text">Cari Kategori</span>
                      <input type="text" class="form-control rounded-start" placeholder="Search..." aria-label="Search" aria-describedby="search-button">
                      <button class="btn btn-primary rounded-end" type="button" id="search-button">Cari</button>
                    </div>
                  </div>  
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>ID Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>1234 Street Name, City</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                                <button class="btn btn-primary btn-sm">Edit</button> 
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>5678 Street Name, City</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                                <button class="btn btn-primary btn-sm">Edit</button>                            
                            </td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table><br>
                <a href="/Form_Kategori" class="btn btn-success btn-block" style="width: 400px;">Tambahkan kategori baru</a>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
