<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Database Setup</title>
</head>

<body>
    <h3>Setting up...</h3>

<?php
require_once 'functions.php';

createTable('members',
            'user VARCHAR(16),
            pass VARCHAR(16),

	    INDEX(user(6))');

createTable('movies',
            'id INT PRIMARY KEY,
            title VARCHAR(50)');

createTable('tv_shows',
            'id INT PRIMARY KEY,
            title VARCHAR(50)');

?>

    <p>The database is ready to go.</p>
</body>
</html>
