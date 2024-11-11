<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop</title>
    <link rel="stylesheet" href="barbershopadmin.css">
    <link rel="stylesheet" href="footernav.css">
</head>
<body>
    <?php include "navbaruser.php"?>

    <main>
        <div class="search-bar">
            <input type="text" placeholder="BAR PENCARIAN">
            <button>Cari</button>
            <a href="formuliradmin.php" class="add-btn">TAMBAH</a>
        </div>
        
        
        <div class="container">
            <h2><center>Halaman Tambah Barbershop</center></h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama BarberShop</th>
                        <th>Foto</th>
                        <th>Nama Kapster</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hitam Putih</td>
                        <td><img src="foto1.jpg" alt="Kapster 1" width="50"></td>
                        <td>Oribe Canales</td>
                        <td>Classic cut Rp 50.000</td>
                        <td>
                            <button>Edit</button>
                            <button>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bohemian Raphshodi</td>
                        <td><img src="foto1.jpg" alt="Kapster 1" width="50"></td>
                        <td>Oribe Canales</td>
                        <td>Classic cut Rp 50.000</td>
                        <td>
                            <button>Edit</button>
                            <button>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Guns and Rose</td>
                        <td><img src="foto1.jpg" alt="Kapster 1" width="50"></td>
                        <td>Oribe Canales</td>
                        <td>Classic cut Rp 50.000</td>
                        <td>
                            <button>Edit</button>
                            <button>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Tukang Cukur</td>
                        <td><img src="foto1.jpg" alt="Kapster 1" width="50"></td>
                        <td>Oribe Canales</td>
                        <td>Classic cut Rp 50.000</td>
                        <td>
                            <button>Edit</button>
                            <button>Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="save-btn">SIMPAN</button>
        </div>
        
        <div class="pagination">
            <button onclick="prevPage()">&lt; Sebelumnya</button>
            <span id="page-numbers"></span>
            <button onclick="nextPage()">Next &gt;</button>
        </div>
        
    </main>
    
    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>
