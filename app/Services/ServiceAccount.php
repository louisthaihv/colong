<?php 
namespace App\Services;

use Validator;
/**
 * all service use for update on database of game
 * */
class ServiceAccount {
	
	public static function updateUser() {

		return 1;
	}

	public static function checkCaptcha($data) {

		$rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make($data, $rules);
        // return ($validator->fails());
        return true;
	}

	public static function getPassword($input) {

		$command = public_path().'/hash_pwd/qglpasswd.exe user '.$input;
        $output = shell_exec($command);
        $start = strpos($output, '(') + 1;
        $end = strpos($output, ')');
        $length = $end - $start; 
        $pass = substr($output, $start, $length);

        return $pass;
	}

	public static function submitCard($cardInfor) {
		$partnerCode = PARTNER_CODE;
		$password= PARTNER_PASS;
		$secretKey= SCRECT_KEY;
		$issuer = $cardInfor['issuer'];
		$cardCode =$cardInfor['cardCode'];
		$cardSerial=$cardInfor['cardSerial'];
		$serviceCode=SERVICE_CODE;	

		// useCard
		$amount = AMOUNT;
		$service_url = "http://125.212.219.11/voucher/rest/useCard";
		$transRef = ServiceAccount::generateRandomString(17) . rand(100,500);

        $curl_post_data = array(
        "issuer"=> $issuer,
        "cardCode" => $cardCode,
        "cardSerial" => $cardSerial,
        "amount" => $amount,
        "transRef" => $transRef,
        "partnerCode" => $partnerCode,
        "password" => $password,
        "accountId" => 'accountId'.rand(1,99),
        "serviceCode" => $serviceCode,
        "signature" => md5("$issuer$cardCode$transRef".$partnerCode.$password.$secretKey),
        );

       	$xml =  ServiceAccount::curl_rest($service_url,$curl_post_data);
		echo "<pre> useCard result"; dump($xml);
		// getTransactionDetail
		$data = array('partnerCode'=>$partnerCode,'password'=>$password);
		$data['transRef'] = $transRef;
		$data['signature'] = md5($transRef.$partnerCode.$password.$secretKey);
		$json = ServiceAccount::curl_check_tran($data);
		echo "<pre> checkTransaction result"; dump($json);
	}

	public static function curl_rest($url, $data){
		$curl = curl_init($url);
		$transRef = $data['transRef'];
		$ext = 'issuer:'.$data['issuer'].'; cardCode:'.$data['cardCode'].'; cardSerial:'.$data['cardSerial'];
		$fields_string = json_encode($data);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);                                                                  
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);                                                                      
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($fields_string))                                                                       
		);
		$process = 0;
		try{
			$result = curl_exec($curl);
		}catch(Exception $e){
			//$this->logger->error("transRef: ".$transRef ." ".$e->getMessage());
			$json = "-1|He thong dang ban vui long thu lai sau.";
			$process = -1;
		}
		if($process == 0){
			$json = array();
			// $json['result'] = $result;
			$json = json_decode($result,true);

			//$this->logger->info("[RESPONSE] $ext transRef: ".$transRef ." ".$result);	
		}
		curl_close($curl);
		return $json;
	}

	public static function curl_check_tran($data){		
		$url = "http://125.212.219.11/voucher/rest/getTransactionDetail";
		$curl = curl_init($url);
		$transRef = $data['transRef'];
		//$ext = 'issuer:'.$data['issuer'].'; cardCode:'.$data['cardCode'].'; cardSerial:'.$data['cardSerial'];
		$fields_string = json_encode($data);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
		curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);                                                                  
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);                                                                      
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($fields_string))                                                                       
		);
		$process = 0;
		try{
			$result = curl_exec($curl);
		}catch(Exception $e){
			$this->logger->error("transRef: ".$transRef ." ".$e->getMessage());
			$json = "-1|He thong dang ban vui long thu lai sau.";
			$process = -1;
		}
		if($process == 0){
			$json = array();
			// $json['result'] = $result;
			$json = json_decode($result,true);

			//$this->logger->info("[RESPONSE] $ext transRef: ".$transRef ." ".$result);	
		}
		curl_close($curl);
		return $json;
	}	

	public static function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
}
?>