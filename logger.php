<?php 	
	require_once('log_class.php');

	$log=new Log;

	// $log->write('log2.txt','Hello joe');
				
	echo $log->read('log2.txt');
	

