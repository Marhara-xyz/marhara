<table border="1">
	<tbody>
		<tr>
			<th>Nama</th>
			<th>Ucapan</th>
		</tr>
		<?php foreach ($query->result() as $key => $value): ?>
		<tr>
			<td><?= $value->nama_tamu; ?></td>
			<td><?= $value->ucapan;  ?></td>
		</tr> 
	<?php endforeach; ?>
	</tbody>
</table>