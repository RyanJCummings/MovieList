<?php
require_once 'header.php';

echo<<<_END

<style>
body{
  background-color: black;
}
h1 {
  color:White;
  margin-top: 75px;  
}

h2{
    margin-top:5%;
  font-size:30px;
  color:darken(#e5e5e5, 50%);
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
        }
     
        input[type="submit"] {
            margin-top: 23px; 
            background-color: darkred;
            color: white;
            padding: 14px 20px;
            margin-left:170px;
            border: none;
            cursor: pointer;
            width: 10%;
            opacity: 0.9;
        }
  </style>
_END;

$error = $user = $pass = "";

if (isset($_POST['user'])) {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered';
    else {
        $result = queryMySQL("SELECT user,pass FROM members WHERE user='$user' AND pass='$pass'");

        if ($result->num_rows == 0) {
            $error = "Invalid login attempt";
        }
        else {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            die("<h3>Welcome back, $user.</h3><p>Please <a href='home.php?view=$user'>click here</a> to continue.</p></div><footer></footer></body></html>");
        }
    }
}

echo <<<_END

   <h1>Welcome, please login!</h1>
		
   <form method='post' action='login.php'>
        <div data-role='fieldcontain'>
            <label></label>
            <span class='error'>$error</span>
        </div>
        <div data-role='fieldcontain'>
            <label></label>
            <h3>Enter username and password</h3>
        </div>
        <div data-role='fieldcontain'>
            <label>Username</label>
            <input type='text' maxlength='16' name='user' value='$user'>
        </div>
        <div data-role='fieldcontain'>
            <label>Password</label>
            <input type='password' maxlength='16' name='pass' value='$pass'>
        </div>
        <div data-role='fieldcontain'>
            <label></label>
            <input data-transition='slide' type='submit' value='Login'>
        </div>
    </form>
_END;
require_once 'footer.php';
?>
