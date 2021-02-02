 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0">Data Alumni</h1><br>
                     <a class="btn btn-primary" href="<?= base_url("Data/tambah_dataalumni") ?>">Tambah Data Alumni</a>
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
                                         <th>NISN</th>
                                         <th>Nama</th>
                                         <th>Alamat</th>
                                         <th>Tahun Lulus</th>
                                         <th>Opsi</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php $nomer = 1; ?>
                                     <?php foreach ($data_alumni as $siswa) : ?>
                                         <tr>
                                             <td><?= $nomer; ?></td>
                                             <td><?= $siswa["nisn"]; ?></td>
                                             <td><?= $siswa["nama"]; ?></td>
                                             <td><?= $siswa["alamat"]; ?></td>
                                             <td><?= $siswa["th_lulus"]; ?></td>
                                             <td>
                                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opsi</a>

                                                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                     <a class="dropdown-item" href="<?= base_url('Data/edit_dataalumni/') .  $siswa["id_alumni"]; ?>">Edit</a>
                                                     <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="dropdown-item" href="<?= base_url('Data/hapus_dataalumni/') . $siswa["id_alumni"];  ?>">Hapus</a>
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