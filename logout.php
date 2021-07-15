<?php

	require("connectforum.php");
	session_start();
	{
	session_destroy();
	header("location:forum.php");
	}
?>