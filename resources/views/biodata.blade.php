<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h1>Data Biodata</h1>
    <ul>
        <li><strong>Nama:</strong> {{ $nama }}</li>
        <li><strong>Alamat:</strong> {{ $alamat }}</li>
        <li><strong>Umur:</strong> {{ $umur }} tahun</li>
    </ul>


        <a href="showJam/{{date('G:i:s')}}">Klik di sini</a>
</body>
</html>
