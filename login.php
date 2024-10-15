<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Entrance Examination</title>
    <link rel="stylesheet" href="styles.css?<?php echo time(); ?>">
    <script src="jquery.js" defer></script>
    <script src="script.js?v=<?php echo time(); ?>" defer></script>
</head>
<body>
    <div id="loginFormBg" class="loginFormBg"></div>

    <form id="loginForm" class="loginForm">
        <h4>Crud Examination</h4>
        <h2>Login</h2>
        <div id="response"></div>
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        
        <button type="submit" class="btn-primary">Login</button>
    </form>
</body>
</html>
