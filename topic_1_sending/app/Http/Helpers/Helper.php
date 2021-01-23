<?php 
	
	namespace App\Http\Helpers;

	class Helper{

		const WebHooksURL = "https://hooks.slack.com/services/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";
		
		static public function setUpConfigAccountInfo()
		{
			config([
				'MAIL_HOST' =>'smtp.gmail.com',
				'MAIL_PORT' => 587,
				'MAIL_USERNAME' => 'bacnguyen11b41998@gmail.com',
				'MAIL_PASSWORD' => 'tqhoermxcmdmhfcv',
				'MAIL_ENCRYPTION' => 'tls'
			]);			
		}
	}


?>