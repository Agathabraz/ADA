<?php
session_start();
unset($_SESSION['nome'], $_SESSION['email'],$_SESSION['senha'], $_SESSION['msg']);
header("Location: index.html");
?>
