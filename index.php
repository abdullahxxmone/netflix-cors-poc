<?php
// xss.php

// Get the user input from the 'input' parameter
$userInput = isset($_GET['input']) ? $_GET['input'] : '';

// Display the user input without proper sanitization (VULNERABLE!)
echo "<html><head><title>XSS Demo</title></head><body>";
echo "<div>User Input: " . $userInput . "</div>";
echo "</body></html>";
?>
