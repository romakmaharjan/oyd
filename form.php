<!DOCTYPE html>
<html>
<head>
	<title>simple form</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<fieldset>
		<legend>Registration</legend>
	<h1>Simple Form</h1>
	<form action="" method="POST">
		<input type="text" placeholder="firstname" required>
		<input type="text" placeholder="lastname"required>
		<input type="text" placeholder="email"required>
		<input type="password" placeholder="password"required>
		<input type="password" placeholder="confirmpassword"required>
		<input type="phone" placeholder="phone no"required>

		<div>
			<input type="radio" id="male" name="gender"><label for="male">Male</label>
			<input type="radio" id="female" name="gender"><label for="female">female</label>
			<input type="radio" id="other" name="gender"><label for="other">Other</label>
		</div>

		<input type="submit" name="submit"required>

</form>
</fieldset>
</body>
</html>