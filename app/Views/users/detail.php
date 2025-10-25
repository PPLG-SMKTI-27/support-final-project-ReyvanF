<!DOCTYPE html>
<html>
<head>
    <title>Detail Pengguna</title>
</head>
<body>
    <h2>Detail Pengguna</h2>
    <b>Id:</b> <?= htmlspecialchars($user['id'] ?? '-'); ?><br>

    <img src="uploads/<?= htmlspecialchars($user['photo']); ?>" 
         width="120"><br><br>

    <b>Nama:</b> <?= htmlspecialchars($user['name'] ?? '-'); ?><br>
    <b>Email:</b> <?= htmlspecialchars($user['email'] ?? '-'); ?><br>
    <b>Dibuat pada:</b> <?= htmlspecialchars($user['TglDibuat'] ?? '-'); ?><br><br>

    <a href="index.php">← Kembali ke daftar pengguna</a> |
    <a href="index.php?action=edit&id=<?= $user['id']; ?>">Edit</a>
</body>
</html>
