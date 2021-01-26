 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Data Guru</h1>
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
                     <th>NIP</th>
                     <th>Nama</th>
                     <th>Alamat</th>
                     <th>Jenis Kelamin</th>
                     <th>Mata pelajaran</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php $nomer = 1; ?>
                   <?php foreach ($dataguru as $siswa) : ?>
                     <tr>
                       <td><?= $nomer; ?></td>
                       <td><?= $siswa["nip"]; ?></td>
                       <td><?= $siswa["nama"]; ?></td>
                       <td><?= $siswa["alamat"]; ?></td>
                       <td><?= $siswa["jeniskelamin"]; ?></td>
                       <td><?= $siswa["mata pelajaran"]; ?></td>

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