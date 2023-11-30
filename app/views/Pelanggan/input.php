<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>Nama Golongan</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>No Pelanggan</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="pel_alamat" required></td>
        </td>
        </tr>
        <tr>
            <td>No Hp</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>No KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>Nomor Seri</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>Nomor Meteran</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>Status Aktif</td>
            <td>
                <select name="pel_aktif" required>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Id User</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['optuser'] as $opt) { ?>
                    <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_full_name']; ?></option>
                <?php } ?>
                </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="Simpan"></td>
        </tr>
    </table>
</form>