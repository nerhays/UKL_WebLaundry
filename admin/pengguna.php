<?php include 'header.php'; ?>
<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pengguna</h4>
        </div>
        <div class="panel-body">
            <a href="pengguna_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>password</th>
                    <th>Role</th>
                    
                </tr>
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi,"select * from user");
                $no = 1;
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['username']; ?></td>
                        <td><?php echo $d['password']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
