<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Nilai Mahasiswa</title>
    <!-- Memuat Bootstrap dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-3">Form Input Nilai Mahasiswa</h1>
    <form action="hasil.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas:</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Mata Kuliah:</label>
            <select class="form-select" id="mata_kuliah" name="mata_kuliah">
                <option value="Dasar Pemrograman">Dasar Pemrograman</option>
                <option value="Database">Database</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai:</label>
            <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>