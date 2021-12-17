<head>
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/juquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
    .header {
        width: 100%;
        height: 10%;
        top: 2%;
        background-color: black;
        color: white;
        position: fixed;
    }

    .left {
        width: 75%;
        height: 15%;
        top: 10%;
        position: fixed;
        left: 2%;
    }

    .right {
        height: 75%;
        width: 80%;
        color: red;
        background-color: whitesmoke;
        top: 21%;
        left: 12%;
        border: solid 1px black;
        position: fixed;

    }

    #span {
        width: 80%;
        left: 17%;
        top: 15%;
        position: fixed;
    }
    </style>

</head>

<body>
    <?php
    session_start();
    $conn=mysqli_connect("localhost","root","","sms");
?>
    <div class="header">
        <br><BR>
        <center><strong>Student Management system &nbsp; &nbsp; &nbsp;</strong>Email:<?php  echo  $_SESSION['email']?>
            &nbsp; &nbsp; &nbsp;Name:<?php  echo $_SESSION['name']?> &nbsp; &nbsp;
            <a href="logout.php">logout</a>
        </center>
    </div>
    <span id="span" style="color:red;">
        <marquee>Note:This is portal system open till from 10 a.m to 5 P.m. Please edit your information</marquee><br>
        <div class="left"><bR><br><br><br><br>
            <form action="" method="post">

                <table>
                    <tr>
                        <td> <input type="submit" name="search_student" value=" Search student"> </td>
                    </tr>
                    <tr>
                        <td> <input type="submit" name="edit_student" value=" Edit  a student"> </td>
                    </tr>
                    <tr>
                        <td> <input type="submit" name="add_student" value=" Add  a student"> </td>
                    </tr>
                    <tr>
                        <td> <input type="submit" name="delete_student" value="Delete student"> </td>
                    </tr>
                </table>
            </form>

        </div>
        <div class="right">
            <div id="demo">
                <?php
           if(isset($_POST['search_student'])){
              ?>
                <center>
                    <form action="" method="POST"><br><br>
                        ENTER ROLL NO:<input type="text" name="roll_no">

                        <input type="submit" name="search_student_by_roll_for_search" value="search"
                            style="color:black">
                </center>
                <?php
           }
           if(isset($_POST['search_student_by_roll_for_search']))
           {
             
            $sql="SELECT * from `student` where roll_no='$_POST[roll_no]'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
            ?>
                <table><br><br>
                    <tr>
                        <td><b>Roll No:<b></td>
                        <td>&nbsp; &nbsp;
                            <input type="text" value="<?php  echo $row['roll_no'];?>" disabled>

                        </td>

                    </tr>
                    <tr>
                        <td><b>Name:<b></td>
                        <td>&nbsp; &nbsp;
                            <input type="text" value="<?php  echo $row['name'];?>" disabled>

                        </td>

                    </tr>
                    <tr>
                        <td><b>Father Name:<b></td>
                        <td>&nbsp; &nbsp;
                            <input type="text" value="<?php  echo $row['father_name'];?>" disabled>

                        </td>

                    </tr>
                    <tr>
                        <td><b>class:<b></td>
                        <td>&nbsp; &nbsp;
                            <input type="text" value="<?php  echo $row['class'];?>" disabled>

                        </td>

                    </tr>
                    <tr>
                        <td><b>mobile<b></td>
                        <td>&nbsp; &nbsp;
                            <input type="text" value="<?php  echo $row['mobile'];?>" disabled>

                        </td>

                    </tr>
                    <tr>
                        <td><b>Email:<b></td>
                        <td>&nbsp; &nbsp;
                            <input type="text" value="<?php  echo $row['email'];?>" disabled>

                        </td>

                    </tr>
                    <tr>
                        <td><b>Password:<b></td>
                        <td>&nbsp; &nbsp;
                            <input type="text" value="<?php  echo $row['password'];?>" disabled>

                        </td>

                    </tr>
                    <tr>
                        <td><b>Remarks:<b></td>
                        <td>&nbsp; &nbsp;

                            <textarea rows="3" cols="40" disabled><?php  echo $row['remark'];?></textarea>
                        </td>

                    </tr>


                </table>
                <?php }
           }
          ?>
                <?php
                //for editing purpose
           if(isset($_POST['edit_student'])){
              ?>
                <center>
                    <form action="" method="POST"><br><br>
                        ENTER ROLL NO:<input type="text" name="roll_no">

                        <input type="submit" name="search_student_by_roll_for_edit" value="Edit" style="color:black">
                </center>
                <?php
           }
           if(isset($_POST['search_student_by_roll_for_edit']))
           {
             
            $sql="SELECT * from `student` where roll_no='$_POST[roll_no]'";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
            ?>
                <form action="admin_edit_student.php" method="POST">
                    <table><br><br>
                        <tr>
                            <td><b>Roll No:<b></td>
                            <td>&nbsp; &nbsp;
                                <input type="text" name="Roll_no" value="<?php  echo $row['roll_no'];?>">

                            </td>

                        </tr>
                        <tr>
                            <td><b>Name:<b></td>
                            <td>&nbsp; &nbsp;
                                <input type="text" name="name" value="<?php  echo $row['name'];?>">

                            </td>

                        </tr>
                        <tr>
                            <td><b>Father Name:<b></td>
                            <td>&nbsp; &nbsp;
                                <input type="text" name="father_name" value="<?php  echo $row['father_name'];?>">

                            </td>

                        </tr>
                        <tr>
                            <td><b>class:<b></td>
                            <td>&nbsp; &nbsp;
                                <input type="text" name="class" value="<?php  echo $row['class'];?>">

                            </td>

                        </tr>
                        <tr>
                            <td><b>mobile<b></td>
                            <td>&nbsp; &nbsp;
                                <input type="text" name="mobile" value="<?php  echo $row['mobile'];?>">

                            </td>

                        </tr>
                        <tr>
                            <td><b>Email:<b></td>
                            <td>&nbsp; &nbsp;
                                <input type="text" name="email" value="<?php  echo $row['email'];?>">

                            </td>

                        </tr>
                        <tr>
                            <td><b>Password:<b></td>
                            <td>&nbsp; &nbsp;
                                <input type="text" name="password" value="<?php  echo $row['password'];?>">

                            </td>

                        </tr>
                        <tr>
                            <td><b>Remarks:<b></td>
                            <td>&nbsp; &nbsp;

                                <textarea name="remark" rows="3" cols="40"><?php  echo $row['remark'];?></textarea>
                            </td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="submit" name="submit" value="save" style="color:black">
                            </td>
                        </tr>


                    </table>
                </form>
                <?php }
           }

           
         ?>
                <?php
//for adding purpose
if(isset($_POST['add_student']))
               {
                 ?>
                <br><br>
                <center>
                    <h4> Fill The Below Details</h4>
                </center>
                <form action="add_new_student.php" method="post">
                    <table>
                        <tr>
                            <td>Enter Rollno:</td>
                            <td>
                                <input type="text" name="roll_no" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td>
                                <input type="text" name="name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Father Name</td>
                            <td>
                                <input type="text" name="father_name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Class</td>
                            <td>
                                <input type="text" name="class" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Mobile No:</td>
                            <td>
                                <input type="number" name="mobile" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="email" name="email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="text" name="password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Remark</td>
                            <td>
                                <textarea row="3" cols="40" name="remark"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><br><br>&nbsp;&nbsp;
                                <input type="submit" value="Add student">
                            </td>
                        </tr>

                    </table>
                </form>
                <?php


                }



                    ?>

                <?php
            //delete student
              if(isset($_POST['delete_student'])) 
              {?>
                <CENTER>
                    <br><br>
                    <h4>ENTER THE ROLL NO: TO DELETE</h4>
                    <FORM ACTION="delete_student.php" method="post">
                        <table>
                            <tr>

                                <td>
                                    Roll no:

                                </td>
                                <td><input type="text" name="roll_no"></td>
                                <td><input type="submit" name="delete_student" value="Delete student"></td>
                            </tr>
                            

                        </table>
                    </form><?php

                    }


                    ?>






            </div>

        </div>

</body>

</html>