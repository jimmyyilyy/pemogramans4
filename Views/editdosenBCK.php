<!DOCTYPE html>
<html lang="en">
<head>
<center>  <h3>Tambah Data</h3>
</head>
<body>
    <form action="/dosen/edit" method="post">
    <table>
        <tr>
        <td>Nidn</td>
       <td><input type="text" name="nidn" value="<?= $dosen->nidn;?>"></td>
       </tr>
       <tr>
       <td>Nama</td>
       <td><input type="text" name="nama" value="<?= $dosen->nama;?>"></td>
         </tr> 
         <tr>
         <td>Mata Kuliah</td>
         <td><input type="text" name="matkul" value="<?= $dosen->matkul;?>"></td>
        </tr> 
        <tr>
         <td></td>
         <td><input type="hidden" name="id_dosen" value="<?= $dosen->id_dosen;?>"></td>
        </tr> 
        <tr>
        <td><button type="submit">Simpan</button></td>
        </tr> 
</table>
    </form>
</body>
</html>