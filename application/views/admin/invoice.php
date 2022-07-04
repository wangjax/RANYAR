<link rel="stylesheet" href="../assets/css/style.css" type="text/css">

<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesanan</th>
            <th>Alamat Pengiriman</th>
            <th>No. WA</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Status Pemesanan</th>
            <th colspan="2">Aksi</th>

        </tr>

        <?php foreach ($invoice as $inv): ?>

        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->no_wa ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td>
            <form method="post" action="<?php echo base_url('admin/invoice/status_pemesanan')?>" class="user">
            <form>
                <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                placeholder="Status Pemesanan" name="status_pemesanan">
            </div>
                <button type="submit" name="tombol" class="btn btn-primary btn-user btn-block" value="simpan">Submit</button>
            </form>
            </td>
            <td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>')?></td>
            <td><?php echo anchor('admin/invoice/hapus_invoice/' .$inv->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            
        </tr>

        <?php endforeach; ?>
    </table>
</div>