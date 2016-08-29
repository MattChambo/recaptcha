
<html>
<head>
	<title>Google capcha demo</title>
	 <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<h1>Google reCAPTCHA Demo</h1>
	<form id="sign-up" action="result.php" method="post">
	<input type="text" for="name" name="name" placeholder="Name">
	<input type="email" for="email" placeholder="email">
	 <div class="g-recaptcha" data-sitekey="6LeJ0igTAAAAANAzg22xaXoLKAwY5XwANTzWX4j9"></div>
	<input type="submit" for="submit">
	</form>
</body>
</html>