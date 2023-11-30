<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <table>
        <tr>
            <td>Golongan</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kode Pelanggan</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" required></td>
        </tr>
        <tr>
            <td> Nama Pelanggan</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>No KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" required></td>
        </tr>
        <tr>
            <td>No Seri</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>"required></td>
        </tr>
        <tr>
            <td>Nomor Seri</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>" required></td>
        </tr>
        <tr>
            <td>Nomor Meteran</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>" required></td>
        </tr>
        <tr>
            <td>Status Aktif</td>
            <td>
                <SELECT name="pel_aktif" required>
                    <option value="Y" <?php echo ($data['row']['pel_aktif'] == 'Y') ? 'selected' : '';?>>Aktif</option>
                    <option value="Y" <?php echo ($data['row']['pel_aktif'] == 'N') ? 'selected' : '';?>>Tidak Aktif</option>
                 </SELECT>
            </td>
        </tr>
        <tr>
            <td>Id User</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['optuser'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>"><php echo $opt['user_full_name']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SAVE"></td>
        </tr>
    </table>
</form>