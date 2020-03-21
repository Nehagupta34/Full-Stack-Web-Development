
	<?php
$enrollment = $_POST['enrollment'];
$name = $_POST['name'];
$age = $_POST['age'];
$course = $_POST['course'];
$branch = $_POST['branch'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$enrollment=$_GET['enrollment'];


if (!empty($nenrollment)|| !empty($name) || !empty($age) || !empty($course)||  !empty($branch)||  !empty($contact)  || !empty($email)) {
include 'config.php';

  $sql="UPDATE details SET  branch='$branch',course='$course', enroll='$nenroll', name = '$name',age='$age',contact='$contact',email='$email' WHERE enroll=$enroll;";
  if($conn->query($sql)){
    header("location:details.php");
  }
  else
  {
    echo "data updation fail";
  }
  }
 else {
 echo "All field are required";
}


 ?>

