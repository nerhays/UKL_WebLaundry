<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Pengguna</h4>
            </div>
            <div class="panel-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from user where id='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="pengguna_update.php">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama .." value="<?php echo $d['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label>HP</label>
                            <input type="number" class="form-control" name="hp" placeholder="Masukkan no.hp .." value="<?php echo $d['password']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat .." value="<?php echo $d['level']; ?>">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
