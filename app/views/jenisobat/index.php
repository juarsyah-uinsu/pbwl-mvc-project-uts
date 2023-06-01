<h2>Jenis Obat</h2>

<a href="<?php echo URL; ?>/jenisobat/input" class="btn">Tambah Data</a>

<table>
      <tr>
            <th>NO</th>
            <th>JENIS OBAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['jenisobat_id']; ?></td>
                  <td><?php echo $row['jenisobat_nama']; ?></td>
                  <td><a href="<?php echo URL; ?>/jenisobat/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/jenisobat/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>