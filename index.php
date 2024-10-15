
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
    <?php
        session_start();

        if(!isset($_SESSION['username'])) {
            header('Location: login.php');
            exit();
        }

        require 'navigation.php';
        require 'crud_table.php';
        require 'home.php';
    ?>

    <?php
        require 'create.php';
        require 'edit.php';
        require 'delete.php';
    ?>

</body>
</html>
