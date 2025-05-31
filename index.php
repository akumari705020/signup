<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp/signIn</title>
    <style>
         *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .rf{
            width: 400px;
            height: 400px;
            border: 10px inset;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform:translate(-50%,-50%);
            border-radius: 10px;
            background-image: linear-gradient(45deg,red,white,gray);
        }
        h1{
            margin-bottom: 30px;
            color:black;
            font-weight:bold;
        }
        #na…#name,#email,#password{
            width: 280px;
            height: 30px;
        }
        .btn{
            width: 80px;
            height: 40px;
            margin-left: 30px;
            margin-top: 15px;
            background-image: linear-gradient(45deg,orange,white,blue);
            border-radius: 30px;
            border: 5px inset white;
            cursor: pointer;

        }

    </style>
</head>
<body>
    <div class="rf">
        <h1>User SignUp/SignIn</h1>
        <form action="connect.php" method="post">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name"><br><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email"><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" class="btn" value="SignUP" name="signup" id="signup">
            <input type="submit" class="btn" value="SignIN" name="signin" id="signin">
   </form>

    
</body>
</html>