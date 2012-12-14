<?php

function include_podio_api(){
	require_once '../PodioAPI.php';	
}

function authenticate_with_podio_php(){
	
	Podio::setup('mike-test-app', 'SwdWsSQEsAV0eHb8ENmKY1quCi82ISqoTjkhxfmhx4zACBdBLPvw9ytn3LONozGs');
}

?>