<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<style>
    h2{
        color: blue;
        text-align: center;
    }
    form{
        text-align: center;
    }
</style>
<body>
<h2>Student registration form</h2>
<form action="send.php" method="post">
<label for="Firstname">First Name</label><br>
<input type="text" id="Firstname" placeholder="Input your first name" name="firstname"><br>
<label for="Lastname">Last Name</label><br>
<input type="text" id="Lastname" placeholder="Input your last name"name="lastname"><br>
<label for="Email">Email address</label><br>
<input type="email" id="Email" placeholder="Input your email" name="email"><br>
    <label for="YOB">Date of birth</label><br>
    <input type="date" id="YOB" placeholder="Date of birth" name="dob"><br>
    <input type="submit" value="Register">
</form>
</body>
</html>
