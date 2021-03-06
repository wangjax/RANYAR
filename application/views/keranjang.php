<link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>NO</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub-Total</th>
            </tr>

            <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo $items['qty'] ?></td>
                    <td align="right">Rp<?php echo number_format($items['price'], 0, ',', '.') ?></td>
                    <td align="right">Rp<?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>

    </div>
    </tr>
<?php endforeach; ?>

<tr>
    <td colspan="4"></td>
    <td align="right">Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
</tr>
</table>

</div>
<div align="right ">
    <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
        <div class="btn btn-sm btn-danger">
            Hapus Keranjang</div>
    </a>
    <a href="<?php echo base_url('welcome') ?>">
        <div class="btn btn-sm btn-primary">
            Lanjutkan Belanja</div>
    </a>
    <a href="<?php echo base_url('dashboard/pembayaran') ?>">
        <div class="btn btn-sm btn-success">
            Pembayaran</div>
    </a>
</div>