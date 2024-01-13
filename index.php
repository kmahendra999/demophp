<?php

// Get the server's IP address
$serverIP = $_SERVER['SERVER_ADDR'];

// Print the server's IP address
echo "Server IP Address: " . $serverIP . "<br>";

// Attempt to get additional network information (may not work on all servers)
if (function_exists('shell_exec')) {
    $networkInfo = shell_exec('ifconfig');
    echo "<pre>Network Info:\n" . $networkInfo . "</pre>";
} else {
    echo "Network information retrieval is not supported on this server.";
}

?>
test
