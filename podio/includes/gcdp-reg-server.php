<?php
require_once 'functions.inc.php';
$space_id = 644337;
$finance_space_id = 644357;
include_podio_api();
authenticate_with_podio_php();
try {
  Podio::authenticate('app', array('app_id' => 2822439, 'app_token' => '454c46c4afd84828a78e3684c4010df3'));

  // Authentication was a success, now you can start making API calls.

}
catch (PodioError $e) {
  // Something went wrong. Examine $e->body['error_description'] for a description of the error.
}

$contact_array = array("name"=>$_POST['ep_name'], "mail"=>array($_POST['ep_email']), "organization" => $_POST['university'], "phone" => array($_POST['mobile']), "address" =>array($_POST['address']));
$ep_profile_id = PodioContact::create( $space_id, $contact_array);
$item_id = PodioItem::create(2822439, array('fields' => array(
  "ep-details" => $ep_profile_id
  )));
$save_name = str_replace(' ', '', $_POST['ep_name']);
move_uploaded_file($_FILES["contract"]["tmp_name"], "uploaded_files/Contract-" . $save_name.".pdf");
move_uploaded_file($_FILES["cv"]["tmp_name"], "uploaded_files/CV-" . $save_name.".pdf");
$path_to_file_Contract = 'uploaded_files/Contract-'.$save_name.'.pdf'; 
$path_to_file_CV = 'uploaded_files/CV-'.$save_name.'.pdf'; 
$contract_file = PodioFile::upload($path_to_file_Contract, 'Contract-'.$save_name.'.pdf');
$cv_file = PodioFile::upload($path_to_file_CV, 'CV-'.$save_name.'.pdf');
$contract_file_id =  $contract_file->id;
$cv_file_id = $cv_file->id;
PodioFile::attach($contract_file_id, array('ref_type' => 'item', 'ref_id' => $item_id));
PodioFile::attach($cv_file_id, array('ref_type' => 'item', 'ref_id' => $item_id));

Podio::authenticate('app', array('app_id' => 2411031, 'app_token' => '999ad761f4ea48568017451a92f81ca7'));
PodioContact::create( $finance_space_id, $contact_array);

header('Location: ../success-gcdp-ep.php');


?>