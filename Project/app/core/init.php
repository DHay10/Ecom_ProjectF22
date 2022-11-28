<?php
	session_start();
	$_SESSION['cart'] = array();
	require("app/core/autoload.php");