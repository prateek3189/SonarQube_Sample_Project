<?php
	
	//Add all classes 
	if(count($AddClass)){
		foreach($AddClass as $class){
			include(CONTROLLER_PATH."/".$class.".php");
		}
	}
	
?>