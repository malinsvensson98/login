<?php include("includes/config.php")?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <title>Gästbok</title>
</head>
<body>



<?php
// Kontrollerar om besökaren är inloggad, skickar till logga in 
if (!isset($_SESSION['username'])) {
header("Location: login.php?message=<h5><br/>Du måste logga in för att administrera!</h5>"); 
}
?>


<h1> Du är nu i admin, inloggad </h1>

<br/><br/>
<a href="logout.php"><b>Logga ut</b></a> 

</div>

</div>
</body>
</html>