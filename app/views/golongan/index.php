<h2>GOLONGAN</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Input Golongan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>KODE GOLONGAN</th>
                  <th>NAMA GOLONGAN</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { 
                  ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_kode']; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
                        <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapusnya ?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>