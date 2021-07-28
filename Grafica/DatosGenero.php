<?php
// Valores con PHP. Estos podrían venir de una base de datos o de cualquier lugar del servidor

require_once "php/conexion.php";

$conexion = conexion();

// Datos del Primer mes hasta el Noveno mes
for($i = 1; $i<10; $i++){
	$datosMesH = "SELECT count(*) from nacimientos where FECH_NACH like '%/0$i/2019%' and SEXOH= 1";
	$result = mysqli_query($conexion, $datosMesH);
	$mes = mysqli_fetch_row($result);
	$NacHombre[] = $mes[0];

    
	$datosMesM = "SELECT count(*) from nacimientos where FECH_NACH like '%/0$i/2019%' and SEXOH= 2";
	$result = mysqli_query($conexion, $datosMesM);
	$mes = mysqli_fetch_row($result);
	$NacMujer[] = $mes[0];
}

// Datos del Decimo mes hasta el Doceavo mes
for($i = 10; $i<=12; $i++){
	$datosMesH = "SELECT count(*) from nacimientos where FECH_NACH like '%/$i/2019%' and SEXOH= 1";
	$result = mysqli_query($conexion, $datosMesH);
	$mes = mysqli_fetch_row($result);
	$NacHombre[] = $mes[0];

    
	$datosMesM = "SELECT count(*) from nacimientos where FECH_NACH like '%/$i/2019%' and SEXOH= 2";
	$result = mysqli_query($conexion, $datosMesM);
	$mes = mysqli_fetch_row($result);
	$NacMujer[] = $mes[0];
}

$etiquetas = ["ENERO", "FEBRERO", "MARZO", "ABRIL","MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];

// Ahora las imprimimos como JSON para pasarlas a AJAX, pero las agrupamos
$respuesta = [
    "etiquetas" => $etiquetas,
    "NacHombre" => $NacHombre,
	"NacMujer" => $NacMujer,
];
echo json_encode($respuesta);
?>

