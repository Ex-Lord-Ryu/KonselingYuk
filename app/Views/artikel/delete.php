<!DOCTYPE html>
<html>
<head>
    <title>Hapus Artikel</title>
</head>
<body>
    <h1>Hapus Artikel</h1>
    
    <p>Anda yakin ingin menghapus artikel ini?</p>
    
    <form method="POST" action="/artikel/delete/<?= $artikel['id']; ?>">
        <button type="submit">Hapus</button>
    </form>
</body>
</html>
