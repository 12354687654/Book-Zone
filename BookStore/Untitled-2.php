<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/login.css">
    <title>CSS Login Screen Tutorial</title>
</head>
<body>
    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        if ($username === 'admin' && $password === 'admin') {
            
            header('Location: /index.html');
            exit;
        } else {
            
            echo '<p class="error">Invalid username or password</p>';
        }
    }
    ?>

    <nav class="navbar">
        <div class="nav-right">
            <li><a href="/index.html">Home</a></li>
            <li><a href="/products.html">Products</a></li>
            <li><a href="/About.html">About</a></li>
            <li><a href="/login.html">Login</a></li>
            <li><a href="/Register.html">Create Account</a></li>
        </div>
    </nav>
    <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>LOGIN</h3>
                    <p>Please enter your credentials to login.</p>
                </div>
            </div>
            <form class="login-form" method="POST">
                <input type="text" name="username" placeholder="username" />
                <input type="password" name="password" placeholder="password" />
                <button type="submit">Login</button>
                <p class="message">Not registered? <a href="/Register.html">Create an account</a></p>
            </form>
        </div>
    </div>
</body>
</html>
