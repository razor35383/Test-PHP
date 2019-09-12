<?php 
	setcookie('user', $users['name'], time()-3600*24, "/");
	header ('Location: /')
 ?>