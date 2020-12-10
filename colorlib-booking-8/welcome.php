<html>
<body>

<?php     
$to_email = 'saadkamardin02@hotmail.com';
$subject = 'Trims';
$message =  echo $_POST["name"]; ;
$headers = echo $_POST["email"]; ;
mail($to_email,$subject,$message,$headers);
?>


require_once()
</body>
</html>