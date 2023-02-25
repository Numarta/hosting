<?php
	$link = mysqli_connect('localhost', 'numart_zz', 'qweasdzxc')
			or die('Not connect: ' . mysqli_error());
	mysqli_select_db($link, 'numart_magazinehhos') or die(mysqli_error());
	mysqli_query ($link, "set_client='utf8'");
	mysqli_query ($link, "set character_set_results='utf8'");
	mysqli_query ($link, "set collation_connection='utf8_general_ci'");
	mysqli_query ($link, "SET NAMES utf8");
?>