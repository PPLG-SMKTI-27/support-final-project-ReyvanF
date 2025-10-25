<!DOCTYPE html>
<html>
<head>
    <title>Edit Pengguna</title>
</head>
<body>
    <h2>Edit Data Pengguna</h2>
    <form method="POST" enctype="multipart/form-data" action="">
        Nama: <input type="text" name="name" value="<?= $user['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= $user['email']; ?>" required><br><br>
        Foto Saat Ini:<br>
        <img src="uploads/<?= $user['photo']; ?>" width="100"><br><br>
        Ganti Foto: <input type="file" name="photo"><br><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <br>
    <a href="index.php">← Kembali</a>
</body>
</html>
