<?php
/********************************************************************************
* Small Time
/*******************************************************************************
* Version 0.896
* Author:  IT-Master GmbH
* www.it-master.ch / info@it-master.ch
* Copyright (c), IT-Master GmbH, All rights reserved
*******************************************************************************/
if(strstr($_template->_bootstrap,'true')){
	echo'
	<img style="width: 100%" src="images/ico/user-icon.png">
	<a style="float:left; margin: 2px; padding: 3px; background-color: #bebebe; width: 45%" href="index.php?group=2">
	        <img style="width: 100%;" src="images/ico/groups.png" alt="" />
	        <br>
	        Multi - Login
	</a>
	<a style="float:left; margin: 2px; padding: 3px; background-color: #bebebe; width: 45%" href="admin.php">
		<img style="width: 100%" src="images/ico/admin.png" alt="" />
        	<br>
        	Admin - Login
	</a>
	<span class="clearfix"></span>
	';
	
}else{
	echo '
	<a href="?group=2">
		<img height="80" src="images/ico/groups.png" alt="" />
		<br>
			Mehrbenutzer - Login ...
	</a>
	<hr>
	<a href="admin.php">
		<img height="80" src="images/ico/admin.png" alt="" />
		<br>
		Admin - Login ...
	</a>
	';
}