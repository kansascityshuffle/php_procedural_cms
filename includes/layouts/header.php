<?php 
	if (!isset($layout_context)) {
		$layout = "public";
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Development Blog <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
		<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
			<h1>Development Blog <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
		</div>