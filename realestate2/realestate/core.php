<?php

	require "libs/Smarty.class.php";
	require "configs/Client.class.php";
	require "configs/dbconfig.config.php";
	require "core.function.php";

	

	$smarty = new Smarty();

	$smarty->setTemplateDir("view");
	$smarty->setCompileDir("../templates_c");
	$smarty->setCacheDir("../cache");
	$smarty->setConfigDir("../configs");

