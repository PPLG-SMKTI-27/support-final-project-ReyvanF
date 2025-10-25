<?php include __DIR__ . '/../layout.php'; ?>
<h2>Daftar Pengguna</h2>
<a href="?action=create">Tambah Pengguna</a>
<table border="1" cellpadding="6">
<tr><th>Foto</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>
<?php foreach ($users as $user): ?>
<tr>
<td><img src="uploads/<?= htmlspecialchars($user['photo']); ?>" width="60"></td>
<td><?= htmlspecialchars($user['name']); ?></td>
<td><?= htmlspecialchars($user['email']); ?></td>
<td><a href="index.php?action=detail&id=<?= $user['id']; ?>">Lihat Detail</a> - 
<a href="index.php?action=edit&id=<?= $user['id']; ?>">Edit</a> - 
<a href="index.php?action=delete&id=<?= $user['id']; ?>" onclick="return alert('Data berhasil dihapus')">Hapus</a></td>
</tr>
<?php endforeach; ?>
</table>