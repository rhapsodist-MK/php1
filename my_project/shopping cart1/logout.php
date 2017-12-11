<?php

	session_start();
	
	unset($_SESSION['name']);
	unset($_SESSION['last_name']);

	header("location:index.php");