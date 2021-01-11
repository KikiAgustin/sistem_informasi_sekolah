 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1> <br>
            <a class="btn btn-primary"  href= "<?= base_url("Data/tambahdatasiswa") ?>">Tambah Data Siswa</a>

          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?= $judul; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $nomer=1; ?>
                  <?php foreach($datasiswa as $siswa) : ?>
                    
                    <tr>
                    <td><?= $nomer; ?></td>
                    <td><?=$siswa["nama"]; ?></td>
                    <td><?=$siswa["nis"]; ?></td>
                    <td><?=$siswa["ttl"]; ?></td>
                    <td><?=$siswa["alamat"]; ?></td>
                    <td><?=$siswa["jk"]; ?></td>
                    <td><?=$siswa["kelas"]; ?></td>
                    <td>
                   
                        
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?= base_url('Data/edit_datasiswa/').  $siswa["id_siswa"]; ?>">Edit</a>
                        <a onclick="return confirm('Apakah anda ingin menghapus data ini?')"  class="dropdown-item" href="<?= base_url('Data/hapus_datasiswa/'). $siswa["id_siswa"];  ?>">Hapus</a>
                        

                    </td>
                  </tr>
                  <?php $nomer++; ?>
                  <?php endforeach; ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    </div>