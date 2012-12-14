<?

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://podio.com/oauth/token',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        grant_type => 'password',
        username => 'michael.victor@aiesec.net',
		password => 'Federation123',
		client_id => 'mike-test-app',
		redirect_uri => 'http://exchangechennai.in/test.php',
		client_secret => 'SwdWsSQEsAV0eHb8ENmKY1quCi82ISqoTjkhxfmhx4zACBdBLPvw9ytn3LONozGs'
    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);

$response = json_decode($resp, true);
$response['access_token'];
// Close request to clear up some resources

curl_close($curl);

$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_HTTPHEADER => array('Authorization:OAuth2 '.$response['access_token']),
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.podio.com/space/665251/member/v2/?limit=100&offset=0',
    CURLOPT_USERAGENT => 'AIESEC Test App'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
$response = json_decode($resp, true);
$user_list = array();
foreach($response as $profile)
{
	array_push($user_list,$profile['profile']['profile_id']);	
}

print_r($user_list);


// Close request to clear up some resources
curl_close($curl);

require_once 'PodioAPI.php';

Podio::setup('mike-test-app', 'SwdWsSQEsAV0eHb8ENmKY1quCi82ISqoTjkhxfmhx4zACBdBLPvw9ytn3LONozGs');

if (!Podio::is_authenticated()) {
  Podio::authenticate('app', array('app_id' => 2493200, 'app_token' => 'debd0e91c72e4d23bee478549259abdd'));
}
  
  
PodioItem::create(2493200, array('fields' => array(
  "headline" => "EBM Meeting App test",
  "attendees" => $user_list,
  "agenda" => "To dicuss the existence of Bigfoot and other such creatures, please RSPV",
  "time" => array('start' => "2012-12-11 11:27:20", "end" => "2012-12-11 12:44:20")
 )));

?>