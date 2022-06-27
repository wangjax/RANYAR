<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) 
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                echo "Total Belanja Anda: Rp".number_format($grand_total,0,',','.');
                ?>
            </div> <br><br>

            <h3>Input alamat pengiriman dan Pembayaran</h3>

            <form  action="<?php echo base_url('dashboard/proses_pesanan'); ?> " method="post">

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
            </div> 

            <div class="form-group">
                <label>No. WA</label>
                <input type="text" name="no_wa" placeholder="No. WA Anda" class="form-control">
            </div>

            <div class="form-group">
                <label>Jasa Pengiriman</label>
                <select class="form-control">
                    <option>JNE</option>
                    <option>JNT</option>
                    <option>Si Cepat</option>
                </select>
            </div>

            
            <div class="form-group">
                <label>Pilih Bank </label>
                <select class="form-control">
                    <option>BCA - 6450300177</option>
                    <option>DANA - 085722102987</option>
                    <option>GO PAY - 085722102987</option>
                    <option>OVO - 085722102987</option>
                </select>
            </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
              </form>
            
            <?php
              } else
              {
                  echo"Keranjang Belanja Anda Masih Kosong";
              }
                ?>
            </div>
        <div class="col-md-2"></div>
    </div>
</div>