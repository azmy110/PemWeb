<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop Form</title>
    <link rel="stylesheet" href="formuliradminn.css">
    <link rel="stylesheet" href="footernav.css">
</head>
<body>
    
    <?php include "navbaruser.php"?>
    
    <main>
        <div class="form-container">
            <h2>FORMULIR ADMIN</h2>
            <form>
                <label for="namaBarber">Nama BarberShop</label>
                <input type="text" id="namaBarber" name="namaBarber">
                
                <label for="namaKapster">Nama Kapster</label>
                <input type="text" id="namaKapster" name="namaKapster">
                
                <label for="harga">Harga</label>
                <input type="text" id="harga" name="harga">
                
                <label for="uploadFoto">Unggah Foto</label>
                <input type="file" id="uploadFoto" name="uploadFoto">
                
                <div class="button-group">
                    <button type="submit" class="btn btn-submit">Masukan</button>
                    <button type="button" class="btn btn-cancel">Batal</button>
                </div>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    
</body>
</html>
