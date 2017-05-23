<?php	

	/****************

	//Initialize if the request is an AJAX request

	*****************/	

	if (is_ajax()) {
		if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
			$action = $_POST["action"];
			switch($action) { //Switch case for value of action
				case "test": sendemail(); break;
			}
		}
	}
	
	/****************

	//Function to check if the request is an AJAX request

	*****************/	

	function is_ajax() {
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}		

	/****************
	
	// Fix the malformed spanish characters
	
	*****************/	

	function convert_replace($string) {
		$source = array('&Atilde;&sup3;', '&Atilde;&shy;', '&Atilde;&plusmn;');
		$destination   = array('o', 'a', 'i');
		$string = str_replace($source, $destination, $string);
	    return $string;
	}

	function convert_data($string) {
		 $string = htmlentities($string);
		 // $string = html_entity_decode($string, null, "UTF-8"); 
		 $string = convert_replace($string);
	     return $string; 
	}

	/****************
	
	// Send the mail
	
	*****************/	

	
	function sendemail(){ 
		$return = $_POST;  
		
		
		$to = "jose@attorneysanchez.com, luis@rkvideo.tv, webstandardcss@gmail.com"; 
		$from = $_REQUEST['email']; 
		$name = $_REQUEST['name'];  
		$headers = "From: $from"; 
		$subject = "You have a message sent from Attorney Sanchez Website - English Home Page Form"; 
	
		$fields = array(); 		$fields{"name"} = "Name";		$fields{"phone"} = "Phone"; 
		$fields{"Message"} = "Message";
	
		$body = "Details:\n\n";
		foreach ($fields as $a => $b) {   
			// - Fix the malformed spanish characters
			$body .= sprintf("%s: %s\n\n", $b, convert_data($_REQUEST[$a])); 
		}

    	$send = mail($to, $subject, $body, $headers);
		
		if ($send) {
			$return["json"] = "<div class='alert alert-success'><strong>Great, Your message has been sent</strong></div>";
			$return["result"] = "success";
			echo json_encode($return);
		} else {
			$return["json"] = "<div class='alert alert-danger'><strong>There is some problem</strong></div>";
			$return["result"] = "danger";
			echo json_encode($return);
		}
	}

?>
