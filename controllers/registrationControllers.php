<?php
include "models/registrationModels.php";
Class registrationControllers extends registrationModels
{
	public $email;
	public $password;

	public function login()
	{
		if(isset($_POST['submit'])){
			$this->email = $_POST['email'];
			$this->password = $_POST['password'];
			$error = array();

			if(empty($this->email) or empty($this->password)){
				$error[] = "<p class='error'>Email or Password Field is Empty</p>";

			}
			if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
				$error[] = "<p class='error'>Email is not Correct</p>";
			}

			if(!empty($error)){
				echo implode($error);
			}
			else{
				$this->loginFunction($this->email, $this->password);
			}
		}
	}

	public function loginFunction($email, $password)
	{
		$call = new registrationModels;
		$result = $call->loginUser($email, $password);

		echo $result;
	}
}
