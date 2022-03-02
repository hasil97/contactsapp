<html>
<head>
    <title> User Login and Signup</title>
    <link rel="stylesheet" type="text/css" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body{
            min-height: 100vh;
            background-image: linear-gradient(120deg,rgb(96, 255, 96),rgb(0, 152, 212));
        }
        .loginbox{
            width: 320px;
            height: 420px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }
        .avatar{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .loginbox label{
            margin: 0;
            padding: 0;
            font-weight: bold;

        }
        .loginbox input{
            width: 100%;
            margin-bottom: 20px;

        }

        .loginbox input[type="email"], input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .loginbox button[type="submit"]
        {
            border: none;
            outline: none;
            height: 40px;
            width: 100%;
            background-image: linear-gradient(120deg,rgb(96, 255, 96),rgb(0, 152, 212));
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
            margin-top: 25px;
        }
        .loginbox button[type="submit"]:hover
        {
            cursor: pointer;
            background: linear-gradient(120deg,rgb(46, 34, 172),rgb(228, 75, 155));
            color: #000;
        }
    </style>
</head>
<body>
    <div class="loginbox">
        <img src="https://cdn2.iconfinder.com/data/icons/web-and-apps-interface/32/User-512.png" class="avatar">
        <h1>Sign In</h1>
            <h6>Don't have an account? <a href="signup.php">Sign Up</a></h6>
                <form action="validation.php" method="post">
                    
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Enter email" required>
                    
                    
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter password" required>
                    
                    <button type="submit">Sign in</button>
                </form>
    </div>
</body>
</html>