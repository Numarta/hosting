<?php
	$action = $_GET['act'];
	if ($action == 'dedic')
	{
		$OrderForm = $_POST[OrderDedicatedForm];
		$QueryStr = 'INSERT INTO `dedicated` (';
	}
	else if ($action == 'order')
	{
		$OrderForm = $_POST[OrderForm];
		$QueryStr = 'INSERT INTO `orders` (';
	}
	else
	{
		exit;
		echo "Error!";
	}
	$OrderKeys = array_keys($OrderForm);
	$CountKeys = count($OrderKeys);	
	
	for ($i = 0; $i < $CountKeys; $i++)
	{
		$QueryStr .= '`' . $OrderKeys[$i] . '`,';
	}
	$QueryStr[strlen($QueryStr) - 1] = ')';
	$QueryStr .= ' VALUES (';
	
	for ($i = 0; $i < $CountKeys; $i++)
	{
		$QueryStr .= '\'' . $OrderForm[$OrderKeys[$i]] . '\',';
	}
	$QueryStr[strlen($QueryStr) - 1] = ')';

	include "connect.php";
	mysqli_query($link, $QueryStr) or die('Запрос не удался: ' . mysql_error());
	echo 1;
?>
