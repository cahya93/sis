<h3>DAFTAR REKAP SISWA YANG SUDAH MEMBUAT AKUN</h3>
<p style="text-align: right;"><?php echo format_indo(date('Y-m-d H:i:s')); ?></p>
<table border="1" cellspacing="" width="100%">
    <thead class="thead-inverse">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Lokasi PKL</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($siswa as $s) : ?>
            <tr>
                <td scope="row" align="center"><?= $i; ?></td>
                <td><?= $s['name']; ?></td>
                <td><?= $s['kelas']; ?></td>
                <td><?= $s['jurusan']; ?></td>
                <td><?= $s['nama_instansi']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>