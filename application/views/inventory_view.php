<!DOCTYPE html>
<html>
<head>
<title>Inventory</title>
</head>
    <body>

    <h1>INVENTORY</h1>

    <form method="POST" action="<?php echo base_url('Inventory/add') ?>">
        <fieldset>
                <p>
                    <label>Nama Barang :</label>
                    <input type="text" name="nama_barang">
                </p>

                <p>
                    <label>Kode Barang :</label>
                    <input type="text" name="kode_barang">
                </p>

                <p>
                    <label>Jumlah Barang :</label>
                    <input type="text" name="jumlah_barang">
                </p>

                <p>
                    <label>Tanggal :</label>
                    <input type="date" name="tanggal">
                </p>

                <p>
                    <input type="submit" value="Simpan">
                </p>
            </fieldset>
    </form>


    <h1>PRODUK</h1>

    <a href="<?php echo base_url("Inventory")?>">Lihat Semua Barang</a> <p>
    
    <p>
        <label>Cari Barang : </label>
        <form method="POST" action="<?php echo base_url('Inventory/search') ?>">
            <input type="text" name="search" placeholder="Nama barang">
            <input type="submit" value="Cari" name="cari">
        </form>

    </p>

    <?php if(!isset($_GET['search'])){?>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>KODE BARANG</th>
            <th>JUMLAH BARANG</th>
            <th>TANGGAL</th>
            <th>AKSI</th>
        </tr>

        <?php foreach($produk as $produk){ ?>
        <tr>
            <td><?php echo $produk['Id']; ?> </td>
            <td><?php echo $produk['Nama_barang']; ?> </td>
            <td><?php echo $produk['Kode_barang']; ?> </td>
            <td><?php echo $produk['Jumlah_barang']; ?> </td>
            <td><?php echo $produk['Tanggal']; ?> </td>
            <td>
                <form method="POST" action="<?php echo base_url('Inventory/updateForm') ?>">
                    <input type="hidden" name="id_barang" value="<?php echo $produk['Id']; ?>">
                    <input type="submit" value="Update" name="update">
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php }else{?>
        <table border="2">
        <tr>
            <th>ID</th>
            <th>NAMA BARANG</th>
            <th>KODE BARANG</th>
            <th>JUMLAH BARANG</th>
            <th>TANGGAL</th>
            <th>AKSI</th>
        </tr>

        <tr>
            <td><?php echo $produk[0]['Id']; ?> </td>
            <td><?php echo $produk[0]['Nama_barang']; ?> </td>
            <td><?php echo $produk[0]['Kode_barang']; ?> </td>
            <td><?php echo $produk[0]['Jumlah_barang']; ?> </td>
            <td><?php echo $produk[0]['Tanggal']; ?> </td>
            <td>
                <form method="POST" action="<?php echo base_url('Inventory/updateForm') ?>">
                    <input type="hidden" name="id_barang" value="<?php echo $produk[0]['Id']; ?>">
                    <input type="submit" value="Update" name="update">
                </form>
            </td>
        </tr>
    </table>
    <?php } ?>


    </body>
</html>