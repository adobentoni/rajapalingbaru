<?php
	if(session_destroy()) // Destroying All Sessions
	{
		echo "<script>window.open('admin.php','_self')</script>"; // Redirecting To Home Page
	}
?>