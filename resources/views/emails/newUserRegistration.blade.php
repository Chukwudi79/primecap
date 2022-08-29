<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New User Registration</title>
</head>
<body>
	<p>Hello {{$user->fullname}},</p><br>
	<p>Now that you are a member, you Have FULL ACCESS to all of the tools, 
		websites training programs and the potential to earn unlimited residual income 
		in our referal program
	</p><br>
<p>
	We are very excited to welcome you aboard our team and
	 look forward to helping you become the next success story in Primeservice.
</p> <br>
<p>
	Here is your login information again for your records: <br>
	<span>Username: {{$user->username}}</span><br>
	<span>Password: {{$user->backP}}</span><br>	
</p>
<p>	Welcome aboard!</p><br>
<p>Sincerely,</p><br>
<p>Primeservice Corp Team</p>
</body>
</html>