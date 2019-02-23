<?php

 

if(isset($_POST['submit'])){

$email = $_POST['email'];

$emailPattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!preg_match($emailPattern,$email)){

echo "InValid email";

}else{

echo "Valid email";

}

}

?>

 

<html>

<body>

<form method="post">

Email:

<input type="text" name="email">

<input type="submit" name="submit" value="submit">

</form>

</body>

</html>