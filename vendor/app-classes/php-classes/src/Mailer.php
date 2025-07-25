<?php 

namespace App;

use Rain\Tpl;

class Mailer {

	const NAME_FROM = "Michael T.I.";

	private $email;	

	public function __construct($toAddress, $toName, $subject, $tplName, $data = array())
	{
		require_once(__DIR__ . "/../config.php");

		$config = array(
			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/email/",
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"         => false
	    );

		Tpl::configure( $config );

		$tpl = new Tpl;

		foreach ($data as $key => $value) {
			$tpl->assign($key, $value);
		}

		$html = $tpl->draw($tplName, true);

		$this->email = new \SendGrid\Mail\Mail();

		$this->email->setFrom(getenv("MAIL_FROM"), Mailer::NAME_FROM);
		$this->email->setSubject("This is a plain-text message body");
		$this->email->addTo($toAddress, $toName);
		$this->email->addContent("text/plain", $subject);
		$this->email->addContent("text/html", $html);

		$sendgrid = new \SendGrid(getenv("SENDGRID_API_KEY")); // Your key sendgrid here
		
		try {
			$response = $sendgrid->send($this->email);
			print $response->statusCode() . "\n";
			print_r($response->headers());
			print $response->body(). "\n";			
		} catch (Exception $e) {
			echo 'Caught exception: '. $e->getMessage()."\n";			
		}
	}
}

 ?>
