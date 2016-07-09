<?php

class Email {
	public $formOutput = "";
	public $from = "";
	public $phonenumber = "";
	public $email = "";
	public $name = "";
	public $err = "";

	public $namePat = "/^[a-z ,.'-]+$/i";
	public $emailPat = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
	public $phonePat = "/^\(\d{3}\) \d{3}-\d{4}$/";

	public $validateArray = array();

	public function checkEmail() {

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$phonenumber = $_POST['phonenumber'];
			$email = $_POST['email'];
			$from = $name . ' ' . '<' . $email . '>';

			if (empty($name) || empty($email) || empty($message)){
				$err .= "Those fields are empty!";

			}elseif(!preg_match($namePat, $name)){
				array_push($validateArray, "Is that really your name?");
				
			}elseif(!preg_match($emailPat, $email)){
				array_push($validateArray, "Check your email again.");

			}elseif(!preg_match($phonePat, $phonenumber)){
				array_push($validateArray, "Check your phone number again.");
				
			}else{
				
			$final_headers = $from;
			
			mail('egrabish@gmail.com', 'Cidea Form Submission', $message, $final_headers);

			$formOutput = "Thanks! We will be in contact soon.";

			}
		}
	}
}