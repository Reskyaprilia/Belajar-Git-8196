<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();


?>

<table border="1">
	<tr>
		<th>NIS</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
		<th colspan="3"></th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['nationality']?></td>
		<td>
		<a href="dsiswa.php?a=<?php echo $a['id_siswa']?>">
		DETAIL
		</a>
		</td>
		<td>
		<a href="usiswa.php?a=<?php echo $a['id_siswa']?>">
		EDIT
		</a>
		</td>
		<td>
		<a href="delsiswa.php?a=<?php echo $a['id_siswa']?>">
		HAPUS
		</a>
		</td>
	</tr>
	<?php endforeach?>
</table>