<h2>PELANGGAN</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="#dtb">
      <thead>
      <tr>
            <th>No</th>
            <th>Id Golongan</th>
            <th>No Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>No KTP</th>
            <th>Nomor Seri</th>
            <th>Nomor Meteran</th>
            <th>Status Aktif</th>
            <th>Id User</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['pel_id_gol']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><?php echo $row['pel_id_user']; ?></td>

                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm(Are you sure?)">DELETE</a></td>
            </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>