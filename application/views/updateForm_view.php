<!DOCTYPE html>
<html>
<head>
<title>Inventory</title>
</head>
    <body>

    <h1>UPDATE PRODUK</h1>

    <form method="POST" action="<?php echo base_url('Inventory/update') ?>">
        <fieldset>
                <p>
                    <label>Nama Barang :</label>
                    <input type="hidden" name="id_barang" value="<?php echo $produk[0]['Id']; ?>">

                    <input type="text" name="nama_barang" value="<?php echo $produk[0]['Nama_barang']; ?>">
                </p>

                <p>
                    <label>Kode Barang :</label>
                    <input type="text" name="kode_barang" value="<?php echo $produk[0]['Kode_barang']; ?>">
                </p>

                <p>
                    <label>Jumlah Barang :</label>
                    <input type="text" name="jumlah_barang" value="<?php echo $produk[0]['Jumlah_barang']; ?>">
                </p>

                <p>
                    <label>Tanggal :</label>
                    <input type="date" name="tanggal" value="<?php echo $produk[0]['Tanggal']; ?>">
                </p>

                <p>
                    <input type="submit" value="Simpan">
                </p>
            </fieldset>
    </form>
    </body>
</html>