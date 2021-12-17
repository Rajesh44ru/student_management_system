<script type="text/javascript">
var a=confirm("ARE you sure want to delete");
if(a){
     <?php
    $conn=mysqli_connect("localhost","root","","sms");
    $sql="DELETE FROM `student` WHERE roll_no=$_POST[roll_no]";
    mysqli_query($conn,$sql);
     ?>
     window.location.href="admin_dashboard.php";
    }
else{
    window.location.href="admin_dashboard.php";

    }


</script>
   



















    // <?php
    // $conn=mysqli_connect("localhost","root","","sms");
    // $sql="DELETE FROM `student` WHERE roll_no=$_POST[roll_no]";
    // mysqli_query($conn,$sql);
    //  ?>
