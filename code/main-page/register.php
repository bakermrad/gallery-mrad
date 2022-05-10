
<?php
include_once'header.php';

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>














<head>
    <title>register</title>
    <link rel="stylesheet" href="logins.css">
</head>

    <br><br><br><br>
    

    <div class="center">
        <h1>register</h1>
        <form method="post">



          <div class="txt_field">
            <input name="email" class="username" type="email" required>
            <span></span>
            <label>email</label>
          </div>


          <div class="txt_field">
            <input name="user_name" id="text" class="username" type="text" required>
            <span></span>
            <label>Username</label>
          </div>

          <div class="txt_field">
            <input name="password" id="text" class="password" type="password" required>
            <span></span>
            <label>Password</label>
          </div>


          <input type="submit" value="register">
          <div class="signup_link">
           already a member? <a href="login.php">Signup</a>
          </div>
        </form>
      </div>
</body>
</html>