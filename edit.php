<?php
include("koneksi.php");

if(!isset($_GET['id_user'])){
    header("location:tampil.php");

}

$id=$_GET ['id_user'];
$sql =("SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan= tb_bahan.id_bahan WHERE tb_user.id_user='$id'");
$query=mysqli_query($koneksi, $sql);
$alat = mysqli_fetch_assoc($query);

?>
<html>
<head>
</head>
<body>
    <h1>Edit</h1>
    <form action="prosesedit.php" method="POST">
    <form>
    <fieldset>
    <input type="hidden" name="id_user" value="<?php echo $alat['id_user']?>"/>
            <p>
                <label for="nama_user"> Nama User : </label>
                <input type="text" name="nama_user" value="<?php echo $alat['nama_user']?>" />
            </p>
            <p>
                <label for="jabatan"> Jabatan : </label>
                <input type="text" name="jabatan" value="<?php echo $alat['jabatan']?>" />
            </p>
            <p>
                <label for="nama_bahan"> Nama Bahan : </label>
                <input type="text" name="nama_bahan" value="<?php echo $alat['nama_bahan']?>" />
            </p>
            <p>
                <label for="jenis_bahan"> Jenis Bahan : </label>
                <input type="text" name="jenis_bahan" value="<?php echo $alat['jenis_bahan']?>" />
            </p>
            <p>
                <label for="stok"> Stok : </label>
                <input type="number" name="stok" value="<?php echo $alat['stok']?>" />
            </p>
            <p>
                <label for="harga"> Harga : </label>
                <input type="number" name="harga" value="<?php echo $alat['harga']?>" />
            </p>
            <p>
                <label for="kondisi"> Kondisi : </label>
                <input type="radio" name="kondisi" value="baik" value="<?php echo $alat['kondisi']?>"/>Baik
                <input type="radio" name="kondisi" value="rusak" value="<?php echo $alat['kondisi']?>"/>Rusak
            </p>
            <p>
                <label for="tgl_masuk"> Tanggal Masuk : </label>
                <input type="date" name="tgl_masuk" value="<?php echo $alat['tgl_masuk']?>"/>
            </p>
            <p>
                <input type="submit" value="simpan" name="edit" />
            </p>
</fieldset>
</form>
</body>
</html>