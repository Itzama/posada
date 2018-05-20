<?php
	session_start();

	// ini_set('error_reporting', 0);

	include 'app/config/config.ini';

	if(!empty($_REQUEST['mod'])){
		$modulo=$_REQUEST['mod'];
	}else{
		$modulo=MODULO_DEFAULT;
	}

	if (empty($conf[$modulo]['layout'])) {
		$conf[$modulo]['layout']=LAYOUT_DEFAULT;
	}
	$path_layout=LAYOUT_PATH.'/'.$conf[$modulo]['layout'];
	$path_modulo=MODULO_PATH.'/'.$conf[$modulo]['file'];
	$path_footer=FOOTER_PATH.'/'.$conf[$modulo]['footer'];

	if (file_exists($path_layout)) {
		require_once $path_layout;
	}else{
		if (file_exists($path_modulo)) {
			require_once $path_modulo;
		}else{
			die("<pre>Error al cargar el módulo <b>".$modulo."</b>. No existe el archivo <b>".$conf[$modulo]['file']."</b></pre>");
		}
	}
?>