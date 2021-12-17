<?php

$conn=mysqli_connect("localhost","root","","sms");
if(!$conn)
die("error".mysqli_connect_error());
else{
   $sql="UPDATE `student` set name='$_POST[name]',father_name='$_POST[father_name]',class='$_POST[class]',mobile='$_POST[mobile]',email='$_POST[email]',password='$_POST[password]',remark='$_POST[remark]' WHERE roll_no='$_POST[Roll_no]'";
  $result=mysqli_query($conn,$sql);


}
?>
<script type="text/javascript">

alert("updated sucessfully");
window.location.href="admin_dashboard.php";
</script>