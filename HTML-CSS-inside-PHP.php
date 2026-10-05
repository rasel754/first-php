<?php
// Variables defined in PHP
$title = "Dashboard";
$cardColor = "#2563eb"; // Blue
$message = "This HTML and CSS are printed directly from PHP echo statements.";

// Outputting HTML & CSS via PHP
echo "<!DOCTYPE html>
<html>
<head>
    <title>$title</title>
    <style>
        body { font-family: sans-serif; background-color: #f1f5f9; padding: 20px; }
        .card { 
            background: white; 
            border-left: 5px solid $cardColor; 
            padding: 16px; 
            border-radius: 8px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); 
        }
    </style>
</head>
<body>
    <div class='card'>
        <h2>$title</h2>
        <p>$message</p>
    </div>
</body>
</html>";
?>