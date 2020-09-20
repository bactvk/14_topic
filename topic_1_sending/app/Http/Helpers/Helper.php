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