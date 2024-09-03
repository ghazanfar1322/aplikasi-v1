<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<title>TEST PAGE</title>
</head>
<body>
@include('navbar')

<div class="container bg-success text-white">
    <h1>Biodata</h1> 
</div>
<div class="bg-dark text-white">
<img src="Ghazanfoto.png" alt="Ghazan" width="300" height="300"> 
    <p>Nama: Ghazanfar Baruna Ahmadi</p>
    <p>Umur: 13 Tahun</p>
    <p>Hobi: Gitar, Main Game, DLL</p>
    <p>Alamat: Griya Melati Blok D3 No.3-2, 3RT.04/RW.13, Bubulak <a href="https://maps.app.goo.gl/YmzpQMQNa6PjjYgm7"> <button type="button" style="background-color: brown;">Alamat Rumah</button> </a></p>
    <p>Sekolah: Sekolah Alam Bogor <a href=https://maps.app.goo.gl/f5th3dtNBfyBNkku6> <button type="button" style="background-color: aqua;"> <i>Alamat Sekolah</i> </button></a>
    </p> 
    <br>
</div>
<div class="bg-warning">

    <p>Nama aku Ghazanfar Baruna Ahmadi Biasa dipanggil Ghazan Aku sekolah di sekolah alam bogor hobi aku main gitar,
        main game, DLL.</p>
</div>
<a href="index.html"><button type="button" style="background-color: yellow;">index</button></a>
<div>
  <label for="nama">nama</label>
  <input type="text" name="nama">
</div>

</body>
</html>