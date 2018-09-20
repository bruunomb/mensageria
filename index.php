<?php
session_start();
 date_default_timezone_set('America/Sao_Paulo');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login no servidor</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/code.js"></script>

</head>
<body>
  <div class="wrapper">
        <?php
        if (isset($_SESSION['userName'])) {
            include_once 'view/chat.php';
        } else {
            include_once 'view/login.php';
        }
        ?>
  </div>

</body>
</html>
