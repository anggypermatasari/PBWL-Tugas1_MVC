<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
    <table>
        <tr>
        <td>No.</td>
        <td><input type="text" name="gol_id" value="<?php echo $data['row']['gol_id']; ?>" readonly></td>
        </tr>
        <tr>
            <td>Kode Golongan</td>
            <td><input type="text" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>"required></td>
        </tr>
        <tr>
            <td> Nama Golongan</td>
            <td><input type="text" name="gol_nama" value="<?php echo $data['row']['gol_nama']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="Update"></td>
        </tr>
        </table>
</form>