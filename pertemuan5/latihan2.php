<?php 
$mahasiswa = [
	[	"Hanivan",
		"20171203",
		"Teknik Komputer dan Jaringan",
		"hanivan20@gmail.com"
	],
	[	"Haikal",
		"20200810",
		"Sekolah SD",
		"-"
	],
];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Daftar Mahasiswa</title>
	</head>
<body>
	
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<li>Nama: <?= $mhs[0] ?></li>
		<li>NRP: <?= $mhs[1] ?></li>
		<li>Jurusan: <?= $mhs[2] ?></li>
		<li>Email: <?= $mhs[3] ?></li>
	</ul>
<?php endforeach; ?>

</body>
</html>