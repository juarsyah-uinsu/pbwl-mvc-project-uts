<h2>Data Transaksi</h2>

<a href="<?php echo URL; ?>/transaksi/input" class="btn">Tambah Data</a>

<table>
      <tr>
            <th>NO</th>
            <th>TANGGAL TRANSAKSI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['transaksi_id']; ?></td>
                  <td><?php echo $row['transaksi_tanggal']; ?></td>
                  <td><a href="<?php echo URL; ?>/transaksi/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/transaksi/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>