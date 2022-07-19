<!doctype html>
<html lang="en">
<head>
    <style>
        h2{
            color: blue;
            font-family: "DejaVu Sans";
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
<h2>Student Registration Form</h2>
<form action=""method="post">
Name: <input type="text" name="name" required maxlength="16" ><br>
E-mail: <input type="text" name="email"><br>
    Phone No: <input type="number" name="number" pattern="0-9" maxlength="10"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
    <input type="submit" value="Register">
</form>
</body>
</html>
