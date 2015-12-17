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
        return ($validator->fails());
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
}
?>