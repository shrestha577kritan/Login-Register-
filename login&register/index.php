<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" class="src">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Sign In</h1>
        <form method="post">
            <div class="form-control">
                <input type="text" required>
                <label>Your Email</label>
            </div>
            <div class="form-control">
                <input type="password" required>
                <label>Your Password</label>
            </div>
            <button class="btn">Submit</button>
            <p class="text">Dont have an account?
            <a href="register.php">Create Account</a> </p>
        </form>
    </div>
    
</body>
</html>