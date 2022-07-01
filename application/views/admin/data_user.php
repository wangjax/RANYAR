<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Data User</h3>
     
        
        <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>USERNAME</th>   
            <th colspan="2">Aksi</th>          
        </tr>

        <?php
        $no=1;
        foreach($user as $u) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->username ?></td>
            <td><?php echo anchor('admin/data_user/hapus_user/' .$u->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>
            
        </tr>

        <?php endforeach; ?>
   
    </table>
</div>