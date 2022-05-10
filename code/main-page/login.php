<?php 


include_once 'header.php';

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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: main.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>









<head>
    <title>login</title>
    <link rel="stylesheet" href="logins.css">
</head>

    <br><br><br><br>


    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input  id="text" name="user_name" class="username" type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input id="text" name="password" class="password" type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a href="register.php">Signup</a>
            </div>
        </form>
    </div>











</body>

</html>