<?php
	//<Name of Application>

	//********************************************************************
	//*********************Enter Your Variables Here**********************
	//********************************************************************

	//Internal IP Address to the Server
	$internalIP     = 'purpurmc.aternos.me';

	//Internal Port to the Application
	$internalPort   = '48230';

	//External IP Address to the Server (ISP)
	$externalIP     = 'purpurmc.aternos.me';

	//External Port to the Application (default = $internalPort)
	$externalPort   = $internalPort;

	//Does this application use https?
	$https          = false;


	//********************************************************************
	//*******************DO NOT CHANGE BELOW THIS LINE********************
	//********************************************************************

	//System Variables
	$currentIP      = $_SERVER['REMOTE_ADDR'];
	$query          = $_SERVER['QUERY_STRING'];

	$https ? $protocol = 'https' : $protocol = 'http';

	if ($currentIP == $externalIP) {
		$ip     = $internalIP;
		$port   = $internalPort;
	} else {
		$ip     = $externalIP;
		$port   = $externalPort;
	}

	header('Location: ' . $protocol . '://' . $ip . ':' . $port . $query);

?>
