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
$tableMahasiswa->setTableClass("tbl-mhs");

?>

<html>
<head>
	<title>Table Element</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php $tableMahasiswa->generateTable(); ?>
</body>
</html>
