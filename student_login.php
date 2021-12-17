
<head>
    
    <title>Student Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/juquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<center ><br><br><br><br>
    <h3>Student Login Pages</h3>
    <br>
    <form action="" method="post">
    Email:<input type="email" name="email" required><br><br>
    Password:<input type="password" name="password" ><br><br>
    <input type="submit" name ="submit"><br><br>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $conn=mysqli_connect("localhost","root","","sms");
        if(!$conn)
        {
            die("error ".mysqli_connect_error());
        }
        else
        {
             $sql="SELECT * from `student` where email='$_POST[email]'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
                if($row['email']==$_POST['email'])
                {
                    if($row['password']==$_POST['password'])
                    header("Location:student_dashboard.php");
                    else{
                        echo "Wrong Password";
                    }
                }
                else{
                    echo "Wrong Email address";
                }

            }
            
        }
       
    }
    


    ?>
</center>
</body>
</html>