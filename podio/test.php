<?

require_once 'PodioAPI.php';

Podio::setup('mike-test-app', 'SwdWsSQEsAV0eHb8ENmKY1quCi82ISqoTjkhxfmhx4zACBdBLPvw9ytn3LONozGs');

if (!Podio::is_authenticated()) {
  Podio::authenticate('app', array('app_id' => 2493200, 'app_token' => 'debd0e91c72e4d23bee478549259abdd'));
}
  
  
PodioItem::create(2493200, array('fields' => array(
  "headline" => "EBM Meeting App test",
  "attendees" => 1023392,
  "agenda" => "To dicuss the existence of Bigfoot and other such creatures, please RSPV",
  "time" => array('start' => "2012-12-11 11:27:20", "end" => "2012-12-11 12:44:20")
 )));

?>