<?php
//update 9 Desember 9.46
//by reskyaprilia
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');


$id=$_GET['a'];
if(!is_numeric($id)){
	exit('Acess Forbiden');
	}
$siswa= new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)){
	echo "Data Berhasil Dihapus";
}

?>
<br />
<a href="siswa.php"> Kembali</a>
	