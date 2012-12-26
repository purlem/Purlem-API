<?php

class Purlem
{
  public static $user_id;
  public static $token;
  public static $apiBase = 'https://purlapi.com';
  const VERSION = '1';

  public static function connect($user_id, $token)
  {
	self::$user_id = $user_id;
	self::$token = $token;
  }
  
  public function get_contact($contact_id) {
	 return self::_curlRequest('get','/contacts/'.$contact_id);
  }
  
  public function get_by_contact($array) {
	 $field = $array[0];
	 $data = $array[1];
	 return self::_curlRequest('get','/contacts/get_by/'.$field.'/'.$data);
  }
 
  public function add_contact($params) {
	 return self::_curlRequest('post','/contacts/add', $params);
  }
  
  public function update_contact($params) {
	 return self::_curlRequest('post','/contacts/update', $params);
  }
  
  public function delete_contact($contact_id) {
	 return self::_curlRequest('post','/contacts/delete/'.$contact_id);
  }
  
  public function get_all_campaigns() {
	 return self::_curlRequest('get','/campaigns');
  }
  
  public function get_campaign($campaign_id) {
	 return self::_curlRequest('get','/campaigns/'.$campaign_id);
  }
  
  public function add_instantpurl_campaign($params) {
	 return self::_curlRequest('post','/campaigns/add/instantpurl', $params);
  }
  
  public function add_ftp_campaign($params) {
	 return self::_curlRequest('post','/campaigns/add/ftp', $params);
  }
  
  public function update_campaign($params) {
	 return self::_curlRequest('post','/campaigns/update', $params);
  }
  
  public function delete_campaign($contact_id) {
	 return self::_curlRequest('post','/campaigns/delete/'.$contact_id);
  }
  
  public function get_results($campaign_id) {
	 return self::_curlRequest('get','/results/'.$campaign_id);
  }
  
  public function delete_result($result_id) {
	 return self::_curlRequest('post','/results/delete/'.$result_id);
  }
    
  private function _curlRequest($meth, $url, $params=array(0)) {
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                        
	curl_setopt($ch, CURLOPT_USERPWD, "".self::$user_id.":".self::$token."");
	if($meth == 'post') {
		curl_setopt($ch, CURLOPT_POST, 1);
        if(isset($params)) curl_setopt($ch, CURLOPT_POSTFIELDS, self::encode($params));	
	}
	curl_setopt($ch, CURLOPT_URL, self::$apiBase."/v".self::VERSION."/".$url); 
	$response = curl_exec($ch);
	
	return $response;
	exit;
  }
  
  public static function encode($d)
  {
    return http_build_query($d, null, '&');
  }
  
}
