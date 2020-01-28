<?php
include('config.php');
?>
<?php  
if (isset($_POST['btn'])){
echo $_POST['id'] ; 
echo $_POST['username'] ; 
echo $_POST['age'] ; 
echo $_POST['contact'] ; 
echo $_POST['email']; 
}
else{
    echo "Welcome Guest";
}
//echo 'Welcome' . ' ' . $_GET['username']
?>
<html>
    <head>
        <title>Input Form</title>
</head>
<body>
    <form name="details" action="new.php" method="post"> 
    <table>
    <tr>
    <td>ID</td>
    <td><input type="text" name="id" value=""></td>  
    </tr>
    <tr>
    <td>Name</td>
    <td><input type="text" name="username" value=""></td>
    </tr>
    <tr>
    <td>Age</td>
    <td><input type="text" name="age" value=""></td>
    </tr>
    <tr>
    <td>Contact</td>
    <td><input type="text" name="contact" value=""></td>
    </tr>
    <tr>
    <td>email</td>
    <td><input type="text" name="email" value=""></td>
    </tr>
    <tr>
    <td><input type="submit" value="submit" name="btn"></td>
    </tr>
    </table>
</form>
</body>
</html>