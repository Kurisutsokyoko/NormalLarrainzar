<?php	

	$imagen="21a4462309f790521ebdc4c30df3d7ca7acbd5a9-1964260077.jpeg";
	$copy="_copy";
	list($name_i,$name_ext)=explode(".",$imagen);

	//$name=$name_i.$name_ext;
	$com=$name_i.$copy.".".$name_ext;
/*	echo $name_i;
	echo " - - - ";
	echo $name_ext;
*/
	echo $com;
?>