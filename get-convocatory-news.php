<?php
include 'php_files/NewsDAO.php';
include 'php_files/JSONConverter.php';

$selectedDate = $_POST["selectedDate"];

$jsonConverter = new JSONConverter ();
$newsDAO = new NewsDAO ();
// echo "Entro Aqui";
$result = $jsonConverter->recordSetToJson($newsDAO->selectConvocatoryByDate($selectedDate));

echo $result;

?>