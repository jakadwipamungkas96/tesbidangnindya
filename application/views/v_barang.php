
		<table>
			<tr>
				<th>ID</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Merk</th>
			</tr>
			<?php foreach ($databarang as $key => $value) { ?>
			<tr>
				<td><?= $value['Id'] ?></td>
				<td><?= $value['nm_brg'] ?></td>
				<td><?= $value['jml'] ?></td>
				<td><?= $value['merk'] ?></td>
			</tr>
			<?php } ?>
		</table>
