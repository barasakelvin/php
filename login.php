<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<h2>Student login form</h2>
<form action="send_to.php" method="post">
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" placeholder="Input your first name" name="fname"><br>
    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" placeholder="Input your last name"name="lname"><br>
    <label for="Email">Email address</label><br>
    <input type="email" id="Email" placeholder="Input your email" name="email"><br>
    <label for="dob">Date of birth</label><br>
    <input type="date" id="dob" placeholder="Date of birth" name="dob"><br>
    <input type="submit" value="Register">
</form>
</body>
</html>
