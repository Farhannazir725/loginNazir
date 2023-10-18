
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-card">
        <h2>Login</h2>
        <h3>Enter the Credentials</h3>
            <form class="login-form" method="POST" action="config.php">
                <input type="text" name="first" placeholder="First Name" required autocomplete="off">
                <input type="text" name="last" placeholder="last name" required autocomplete="off">
                <input type="email" name="email" placeholder="Email" required autocomplete="off">
                <input type="password" name="password" placeholder="Password" required autocomplete="off">
                <input type="password" name="cpassword" placeholder="Confirm Password" required autocomplete="off">
                
                <button type="submit" value="Submit"  name="signup">Sign Up</button>
                <a href="login.php">Login</a>
            </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
</body>
</html>