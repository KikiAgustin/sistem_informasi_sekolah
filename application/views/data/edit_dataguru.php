<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 ">Edit Data Guru</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">

            <form action="" method="POST">
                <h5 class="font-weight-bold">NIP</h5>
                <input type="hidden" name="id_guru" value="<?= $getidguru['id_guru']; ?>">
                <input type="text" name="nip" placeholder="nip" value="<?= $getidguru['nip'];   ?>">
                <?= form_error('nip', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Nama</h5>
                <input type="text" name="nama" placeholder="nama" value="<?= $getidguru['nama'];  ?>">
                <?= form_error('nama', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Alamat</h5>
                <input type="text" name="alamat" placeholder="ALAMAT" value="<?= $getidguru['alamat'];  ?>">
                <?= form_error('alamat', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Mapel</h5>
                <select name="pendidikan" id="" value="<?= $getidguru['pendidikan'];  ?>">
                    <option value="Matematika">Matematika</option>
                    <option value="Bahasa Inggris "> Bahasa Inggris</option>
                    <option value="Bahasa Indonesia"> Bahasa Indonesia</option>
                    <option value="IPA"> IPA</option>
                    <option value="IPS"> IPS</option>
                    <option value="PKN"> PKN</option>
                </select>
                <?= form_error('pendidikan', '<small class="text-danger pl-3"', '</small>'); ?>
                <br>
                <br>
                <h5 class="font-weight-bold">Pendidikan</h5>
                <select name="mapel" id="mapel" value="<?= $getidguru['mapel']; ?>">
                    <option value="">Pilih</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value=D3">D3</option>
                    <option value=S1">S1</option>
                    <option value=S2">S2</option>

                </select>
                <br>
                <br>
                <button name="submit" type="submit" class="btn btn-danger">Tambah Data</button>

            </form>

        </div>
    </section>

</div>