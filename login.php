<!DOCTYPE html>
<head>
    
    <title>Login pages</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/juquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<center ><br><br><br><br>
    <h3>Student Management System</h3>
    <br>
    <form action="" method="post">
    <input type="submit" name="admin_login" value="Admin Login">
    <input type="submit" name="student_login" value="Student Login">
    </form>
    <?php
    if(isset($_POST['admin_login'])){
      header("Location: admin_login.php");
    }
    if(isset($_POST['student_login'])){
        header("LOcation:student_login.php");
    }
    
    
    ?>
</center>
</body>
</html>