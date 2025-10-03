<?php
session_start(); // always start session first

// 1. Remove all session variables
session_unset();  

// 2. Destroy the session
session_destroy(); 

// Redirect to login page (or homepage)
header("Location: ../");
exit;
?>