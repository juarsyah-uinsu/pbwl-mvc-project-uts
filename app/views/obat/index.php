<h2>Data Obat</h2>

<a href="<?php echo URL; ?>/obat/input" class="btn">Tambah Data</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA OBAT</th>
            <th>HARGA OBAT</th>
            <th>STOCK OBAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['obat_id']; ?></td>
                  <td><?php echo $row['obat_nama']; ?></td>
                  <td><?php echo $row['obat_harga']; ?></td>
                  <td><?php echo $row['obat_stock']; ?></td>
                  <td><a href="<?php echo URL; ?>/obat/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/obat/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>