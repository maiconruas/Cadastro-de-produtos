

<?php   
session_start();

unset($_SESSION['codigo']);

header("Location: index.php");
?>
