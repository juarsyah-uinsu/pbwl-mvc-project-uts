<h2>Data Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Data</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NOMOR HP</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['pelanggan_id']; ?></td>
                  <td><?php echo $row['pelanggan_nama']; ?></td>
                  <td><?php echo $row['pelanggan_nomorhp']; ?></td>
                  <td><?php echo $row['pelanggan_alamat']; ?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/delete" class="btn">Delete</a></td>
            </tr>
      <?php } ?>

</table>