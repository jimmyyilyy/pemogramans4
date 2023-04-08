<!DOCTYPE html>
<html lang="en">
    <head>
       
        <h3>Tambah Data</h3>

</head>
<body>
    <form action="/anggota/edit" method="post">
    <table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?= $anggota->nama;?>"></td>
</tr>
<tr>
    <td>Jabatan</td>
		 <td><input type="text" name="jabatan" value="<?= $anggota->jabatan;?>"></td>
</tr>
<tr>
<td></td>
<td> <input type="hidden" name="id_anggota" value="<?= $anggota->id_anggota;?>"></td>
</tr>
<tr>
<td> <button type="submit">Simpan</button></td>
</tr>
</table>
    </form>
</body>

</html>
