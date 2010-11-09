<?php
	$url = $_GET["url"] . "?";

	unset($_GET["url"]);

	foreach ($_GET as $key => $value) {
		$url .= $key . "=" . urlencode($value) . "&";
	}

	$url = substr($url, 0, strlen($url) - 1);

	$data = file_get_contents($url);

	if ($data == false) {
		$data = "Resource could not be found";
	}

	echo $data;
?>