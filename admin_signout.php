<?php
	session_start();
	session_destroy();
	header("Location: dbms.html");
?>