<h1>
        Data Admin
      </h1>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No/th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Foto</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        $query = mysqli_query($koneksi, "SELECT * FROM admin");
                            while ($data = mysqli_fetch_array($query)){
                    ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data["nama_lengkap"]; ?> </td>
                  <td><?php echo $data["username"]; ?></td>
                  <td><img src="gambar/<?php echo $data["foto"]; ?>" alt="" width="50"</td>
                  <td><a href="#"><span class="fa fa-edit"></span></a>
                  <a href="#"><span class="fa fa-remove"></span></a></td>
                </tr>
            <?php $no++; ?>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>