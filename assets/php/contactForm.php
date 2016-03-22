<?php

	// Contact
	$to = 'kayser.vic@gmail.com';
  $subject = 'Prise de contact depuis portfolio';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message'])){
   		$name    = $_POST['c_name'];
    	$from    = $_POST['c_email'];
    	$message = $_POST['c_message'];

			if (mail($to, $subject, $message, $from)) {
				$result = array(
					'message' => 'Merci de m\'avoir contacté.',
					'sendstatus' => 1
					);
				echo json_encode($result);
			} else {
				$result = array(
					'message' => 'Une erreur est survenue.',
					'sendstatus' => 1
					);
				echo json_encode($result);
			}
	}

?>
