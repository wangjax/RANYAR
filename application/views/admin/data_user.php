<link rel="stylesheet" href="../../../../../../assets/css/style.css" type="text/css">
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Data User</h3>
     
        
        <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>USERNAME</th>            
        </tr>

        <?php
        $no=1;
        foreach($user as $u) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->username ?></td>
            
        </tr>

        <?php endforeach; ?>
   
    </table>
</div>