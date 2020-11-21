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
	    user_id INT NOT NULL AUTO_INCREMENT,
	    PRIMARY KEY(user_id)');

queryMysql("INSERT INTO members(user, pass)
	    VALUES ('base', 'base')");

createTable('movies',
            'movie_id INT NOT NULL AUTO_INCREMENT,
	    title VARCHAR(50),
	    PRIMARY KEY(movie_id)');

createTable('tv_shows',
            'tv_id INT NOT NULL AUTO_INCREMENT,
	    title VARCHAR(50),
	    PRIMARY KEY(tv_id)');
?>

    <p>The database is ready to go.</p>
</body>
</html>


