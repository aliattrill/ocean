<?php
	$url = "https://us1.pdfgeneratorapi.com/api/v3/templates/130893/output?key=92f93358e44389743372d6ca2086a429fbb8280af75f75c3fc602dcdf1b7df85&workspace=david@xceleratordental.com&secret=7e0fa485b4c0f10648a8f35f5983a291c68d163cb95a4c34f4191af65f0dd59a&output=url";
	$data = $_POST['json_data'];

	// create curl resource
	$ch = curl_init();

	// set url
	curl_setopt($ch, CURLOPT_URL, $url);

	//return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	// encode as JSON
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	// $output contains the output string
	$output = curl_exec($ch);
	
	echo $output;

	// close curl resource to free up system resources
	curl_close($ch);
?>	
