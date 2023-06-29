<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo {
            width: 200px;
        }

        .help-button,
        .login-button {
            padding: 10px 20px;
            background-color: green;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            width: 100px;
            height: 30px;
            font-size: 20px;
            margin-top: 5px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .container {
            background-color: #0066ff;
           
            margin-top: 15px;
            margin-left: 10px;
            margin-right: 10px;
        }

        

        .logo-image {
            display: block;
            margin-top: 20px;
            width: 150px;
        }

        
        .button-register{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        .allocate{
            padding-top: 20px;
            padding-bottom: 30px;
        }
        .smart{
            padding-top: 40px;
        }
        body{
            background-color: whitesmoke;
        }
        .www{
            font-weight: bolder;
            align-items: center;
            font-size: 65px;
            color: black;
            padding-top: 5px;
            padding-right: 48px;
            font-family: 'Cooper Black', sans-serif;
            padding-bottom: 100px;
        }
        .register-button{
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;

        }

    </style>
</head>
<body>
    <div class="container">
    <div class="header">
        <img src="logo.jpg" alt="Logo" class="logo">
        <div class="button-container">
            <h1 class="www">WISE WALLET WIZARD <h1>
            <a href="login.php" class="login-button">Login</a>
            <a href="register.php" class="help-button">Sign Up</a>
        </div>
    </div>
    </div>
        <div class="non-container">
    <div style="display: flex; justify-content: center; align-items: center;">
    <div class="smart" style="color: blue; font-weight: bold;font-size: 30px;">Smart Savings, Wise Spending</div>
    </div>

    <div style="display: flex; justify-content: center; align-items: center; ">
    <div class="allocate" style="color: black; font-weight: bold;margin-buttom: 10px;padding-top: 0px">Allocate your resources wisely by spending, saving, and giving towards what truly matters in life.</div>
    </div>



    <div class="button-register">
            <a href="register.php" class="register-button">CREATE YOUR OWN WISE WALLET</a>
    </div>
    <div></div>
        </div>
    
</body>
</html>
