<?php
$sql = mysqli_query($con, "SELECT * FROM data");
session_start();
?>
<form action=" " method="POST">
	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td>nama</td>
			<td>nim</td>
			<td>jenis kelamin</td>
			<td>prodi</td>
			<td>fakultas</td>
			<td>asal</td>
			<td>motto hidup</td>
		</tr>
		<?php
		if(mysqli_num_rows($sql)>0){
			$no=1;
			while ($data = mysqli_fetch_array($sql)){
		?>
		<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['nim']; ?></td>
		<td><?php echo $data['jenis']; ?></td>
		<td><?php echo $data['prodi']; ?></td>
		<td><?php echo $data['fakultas']; ?></td>
		<td><?php echo $data['asal']; ?></td>
		<td><?php echo $data['moto']; ?></td>
	</tr>
		<?php $no++; } ?>
	<?php } ?>
</table>

	</form>
