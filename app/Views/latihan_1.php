<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>No HP</th>
    </tr>

    <?php
    // Informasi koneksi ke database
    $host = 'nama_host_database';
    $dbname = 'nama_database';
    $username = 'nama_pengguna_database';
    $password = 'kata_sandi_database';

    try {
        // Buat koneksi ke database menggunakan PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        // Set atribut mode error dan exception untuk PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query untuk mengambil data dari tabel mhs
        $stmt = $pdo->query('SELECT * FROM mhs');

        // Lakukan pengulangan untuk setiap baris hasil query
        while ($row = $stmt->fetch()) {
            // Tampilkan baris tabel untuk setiap data
            echo '<tr>';
            echo '<td>' . $row['nim'] . '</td>';
            echo '<td>' . $row['nama'] . '</td>';
            echo '<td>' . $row['jenis_kelamin'] . '</td>';
            echo '<td>' . $row['tanggal_lahir'] . '</td>';
            echo '<td>' . $row['no_hp'] . '</td>';
            echo '</tr>';
        }
    } catch (PDOException $e) {
        // Tangani kesalahan jika terjadi
        echo "Koneksi database gagal: " . $e->getMessage();
    }
    ?>
</table>

</body>
</html>
