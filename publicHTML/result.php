<?php

// Would usually be done in login controller

	include('../secret.inc.php');

	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}

	if(isset($_POST['g-recaptcha-response'])) {
		$captcha = $_POST['g-recaptcha-response'];
	}

	if(!$captcha) {
		echo '<h2>Please check the captcha form</h2>';
		exit;
	}
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".GOOGLE_SECRET."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	$data = json_decode($response);

	if(isset($data->success)AND $data->success==true){
		echo '<h2>Thanks for signing up</h2>';
	} else {
		echo 'You are a spammer';
	}