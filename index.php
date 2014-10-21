<!DOCTYPE html>
<?php 
include 'TableElement.php';
$tableMahasiswa = new TableElement();

$data = array(
	array(
		'nim' => '12',
		'nama' => 'Lyan'
		),
	array(
		'nim' => '11',
		'nama' => 'Dwi'
		),
	array(
		'nim' => '6514',
		'nama' => 'Pangestu'
		)
	);


$tableMahasiswa->setData($data);
$tableMahasiswa->setTableCaption("Tabel Mahasiswa");
$tableMahasiswa->setTableAttr(array("sortable"=>"sortable"));
?>

<html>
<head>
	<title>Table Element</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/libs/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/libs/bootstrap/bootstrap-theme.min.css">
</head>
<body>
	<?php $tableMahasiswa->generateTable(); ?>
</body>

<script src="js/libs/jquery/jquery-1.11.1.min.js"></script>
<script src="js/libs/bootstrap/bootstrap.min.js"></script>

</html>
