<?php
session_start();
//Destruir sessão(autenticado)
session_destroy($_SESSION);
header('Location: index.php');
?>