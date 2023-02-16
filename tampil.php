<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data</title>
</head>
<body>
    <center>
        <header>
            <h3> DATA INVENTARIS </h3>
        </header>
        <table border="1">
            <tr>
                <td>Nama User</td>
                <td>Jabatan</td>
                <td>Nama Bahan</td>
                <td>Jenis Bahan</td>
                <td>Stok</td>
                <td>Harga</td>
                <td>Kondisi</td>
                <td>Tanggal Masuk</td>
                <td>Aksi</td>
            </tr>

            <?php
            include("koneksi.php");
            $query= mysqli_query($koneksi, "SELECT * FROM tb_bahan INNER JOIN
            tb_user ON tb_bahan.id_bahan = tb_user.id_bahan");

            while($data=mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$data['nama_user']."</td>";
                echo "<td>".$data['jabatan']."</td>";
                echo "<td>".$data['nama_bahan']."</td>";
                echo "<td>".$data['jenis_bahan']."</td>";
                echo "<td>".$data['stok']."</td>";
                echo "<td>".$data['harga']."</td>";
                echo "<td>".$data['kondisi']."</td>";
                echo "<td>".$data['tgl_masuk']."</td>";
                echo "<td>";
                echo "<a href='edit.php?id_user=".$data['id_user']."'>Edit</a> |";
                echo "<a href='hapus.php?id_user=".$data['id_user']."'>Hapus</a> ";
                echo "</td>";
                echo "</tr>";

            }
            ?>
            <a href="tambah.php"><input type="button" value="Tambah">
        </table>
        </center>

</body>
</html>