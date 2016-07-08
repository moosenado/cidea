<?php

class Email {
	public $formOutput = "";
	public $from = "";
	public $message = "";
	public $email = "";
	public $name = "";
	public $err = "";

	public $namePat = "/^[a-z ,.'-]+$/i";
	public $emailPat = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";

	public $validateArray = array();

	public function checkEmail() {

		if(isset($_POST['submit'])){

			$name = $_POST['name'];
			$email = $_POST['email'];
			$from = $name . ' ' . '<' . $email . '>';
			$message = $_POST['message'];

			if (empty($name) || empty($email) || empty($message)){
				$err .= "Those fields are empty!";

			}elseif(!preg_match($namePat, $name)){
				array_push($validateArray, "Is that really your name?");
				
			}elseif(!preg_match($emailPat, $email)){
				array_push($validateArray, "Check your email again.");
				
			}else{
				
			$final_headers = $from;
			
			mail('egrabish@gmail.com', 'EG Form Submission', $message, $final_headers);

			$formOutput = "Thanks! I will be in touch soon.";

			}
		}
	}
}