<?php
$conn=mysqli_connect("localhost","root","","sms");
$sql="INSERT INTO `STUDENT`(roll_no, name, father_name, class, mobile, email,  password,remark) VALUES('$_POST[roll_no]','$_POST[name]','$_POST[father_name]','$_POST[class]','$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[remark]')";
mysqli_query($conn,$sql);
// echo $_POST['father_name'];
// echo "sucessfully";

?>
<script type="text/javascript">

alert("updated sucessfully");
window.location.href="admin_dashboard.php";
</script>