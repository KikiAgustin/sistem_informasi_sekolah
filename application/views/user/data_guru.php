<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="<?= base_url('User'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Guru</li>
                    </ol>
                </nav>

                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Mata pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data_guru as $guru) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td> <img width="130px" height="130px" class="img-fluid" src="<?= base_url('asset/gambar/guru/') . $guru['foto']; ?>" alt="<?= $guru['nama']; ?>"> </td>
                                    <td><?= $guru['nip']; ?></td>
                                    <td><?= $guru['nama']; ?></td>
                                    <td><?= $guru['alamat']; ?></td>
                                    <td><?= $guru['pendidikan']; ?></td>
                                    <td><?= $guru['mapel']; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</section>