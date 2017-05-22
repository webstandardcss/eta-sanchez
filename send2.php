<?php	
	if (is_ajax()) {
		if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
			$action = $_POST["action"];
			switch($action) { //Switch case for value of action
				case "test": sendemail(); break;
			}
		}
	}
	
	//Function to check if the request is an AJAX request
	function is_ajax() {
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}		

	function encodeToUtf8($string) {
	     return mb_convert_encoding($string, "UTF-8", mb_detect_encoding($string, "UTF-8, ISO-8859-1, ISO-8859-15", true));
	}

	function encodeToIso($string) {
	     return mb_convert_encoding($string, "ISO-8859-1", mb_detect_encoding($string, "UTF-8, ISO-8859-1, ISO-8859-15", true));
	}
	
	/* function strReplaceAssoc($replace, $subject) { 
		return str_replace(array_keys($replace), array_values($replace), $subject);    
	} */
	
	$convert_replace_array = array( 
		'&Atilde;&sup3;' => 'o', 
		'&shy;' => '', 
		'&plusmn;' => ''
	); 
	
	function convert_replace($string) {
		$string_replaced = str_replace(array_keys($convert_replace_array), array_values($convert_replace_array), $string);
	    return $string_replaced;
	}

	/* function convert_replace($string) {
		$source = array("&Atilde;&sup3;", "&Atilde;", "&shy;", "&sup3;", "&plusmn;");
		$destination   = array("o", "a", "", "", "+-");
		$replaced = str_replace($source, $destination, $string);
	    return $string_replaced;
	} */

	function convert_data($string) {
		 $string_html = htmlentities($string);
		 // $string_html_decoded = html_entity_decode($string_html, null, "UTF-8"); 
		 $string_replaced = convert_replace($string_html);
	     return $string_replaced; 
	}

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
			//$body .= sprintf("%s: %s\n\n", $b, $_REQUEST[$a]); 
			//$body .= sprintf("%s: %s\n\n", $b, encodeToIso($_REQUEST[$a])); 
			//$body .= sprintf("%s: %s\n\n", $b, html_entity_decode(htmlentities($_REQUEST[$a]))); 
			// - Converted the next line into the function convert_data()
			//$body .= sprintf("%s: %s\n\n", $b, html_entity_decode(htmlentities($_REQUEST[$a], null, "UTF-8"))); 
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
