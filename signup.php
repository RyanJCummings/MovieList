<?php
require_once 'header.php';

echo <<<_END


<style>
body{
  background-color: black;
}

h1 {
  margin-top:75px;
  color: white;
}


h2{
  margin-top:5%;
  font-size:30px;
  color: red;
  /*color:darken(#e5e5e5, 50%);*/
  border-bottom:solid 1px #e5e5e5;
  }
input[type="text"]
  {
    background: #fff;
    border: 1px solid #dbdbdb;
    font-size: 1.2em;
    padding: .5em .5em;
    border-radius: 2px;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    margin-bottom: 15px;
    }
input[type = "password"]
    {
        margin-top:15px;
        background: #fff;
        border: 1px solid #dbdbdb;
        font-size: 1.2em;
        padding: .5em .5em;
        border-radius: 2px;
        display: inline-block;
        border: none;
	background: #f1f1f1;
        margin-left: 2px;
        }
     
input[type="submit"] {
            
            background-color: darkred;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            margin-left:170px;
            border: none;
            cursor: pointer;
            width: 10%;
            opacity: 0.9;
        }
  </style>  



<script>
    function checkUser(user) {
        if (user.value == '') {
            $('#used').html('&nbsp;');
            return;
        }

        $.post('checkuser.php', { user : user.value }, function(data) {
            $('#used').html(data)
        });
    }
</script>  
_END;

$error = $user = $pass = "";
if (isset($_SESSION['user'])) 
    destroySession();

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered<br><br>';
    else {
        $result = queryMysql("SELECT * FROM members WHERE user='$user'");

        if ($result->num_rows)
            $error = 'That username already exists<br><br>';
        else {
	    queryMysql("INSERT INTO members VALUES('$user', '$pass')");
	    createTable("{$user}_topMovies",
			'user_id INT(6),
			movie_id INT(6)');
	    
	    createTable("{$user}_topTV",
			'user_id INT(6),
			tv_id INT(6)');

	    createTable("{$user}_bottomMovies",
			'user_id INT(6),
			movie_id INT(6)');

	    createTable("{$user}_bottomTV",
		    	'user_id INT(6),
			tv_id INT(6)');

	    createTable("{$user}_honorableMovies",
			'user_id INT(6),
			movie_id INT(6)');

	    createTable("{$user}_honorableTV",
			'user_id INT(6),
			tv_id INT(6)');

	    createTable("{$user}_watchlist_movies",
		    	'user_id INT(6),
			movie_id INT(6)');

	    createTable("{$user}_watchlist_tv",
	    		'user_id INT(6),
			tv_id INT(6)');		

            die('<h4>Account created</h4>Please Log in.</div></body></html>');
        }
    }
}

echo <<<_END


<h1>Welcome to the signup page</h1>


    <form method='post' action='signup.php'>$error
        <div data-role='fieldcontain'>
            <label></label>
            <h3>Create username and password</h3>
        </div>
        <div data-role='fieldcontain'>
            <label>Username</label>
            <input type='text' maxlength='16' name='user' value='$user' onBlur='checkUser(this)'>
            <label></label>
            <!-- <div id='used'>&nbsp;</div> -->
        </div>
        <div data-role='fieldcontain'>
            <label>Password</label>
            <input type='text' maxlength='16' name='pass' value='$pass'>
        </div>
        <div data-role='fieldcontain'>
            <label></label>
            <input data-transition='slide' type='submit' value='Sign Up'>
        </div>
    </form>
_END;
  require_once 'footer.php';
?>
