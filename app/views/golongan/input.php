<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table>
        <tr>
            <td>Id Golongan</td>
            <td><input type="text" name="gol_id" required></td>
        </tr>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="gol_nama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="Simpan"></td>
        </tr>
    </table>
</form>